<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Service;
use DB;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = Service::latest()->get();
      return view('services.addservice', compact('services',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'title'=>'required',
            'description'=>'nullable',
            'photo' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('photo')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/services"), $new_name);
        }
        else {
          $new_name = 'service.png';
        }
          Service::create([
              'title' => request('title'),
              'description' => request('description'),
              'photo' => $new_name,
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);
            try {
             session()->flash('success', 'عملیات موافقانه اجرا شد ');
             return back();
             } catch(Exception $ex) {
             session()->flash('failed', 'خطا! دوباره کوشش کنید');
             return back();
           }
    }



        public function show($id) {
         $service = DB::select('select * from services where id = ?',[$id]);
         return view('services.editService',['service'=>$service]);
      }



      public function edit(Request $request,$id) {
         $title = $request->input('title');
         $description = $request->input('description');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/services/", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update services set title = ? where id = ?',[$title,$id]);
         DB::update('update services set description = ? where id = ?',[$description,$id]);
         DB::update('update services set photo = ? where id = ?',[$new_name,$id]);
         return redirect('/service');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from services where id = ?',[$id]);
     return back();
  }
}
