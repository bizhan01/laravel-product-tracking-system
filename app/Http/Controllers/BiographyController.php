<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Biography;
use DB;

class BiographyController extends Controller
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
      $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
      return view('about.bio', compact('biographies',));
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
            'companyName'=>'required',
            'description'=>'required|max:500',
            'address'=>'required',
            'phone1'=>'required',
            'phone2'=>'nullable',
            'email'=>'required',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/about"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Biography::create([
              'companyName' => request('companyName'),
              'description' => request('description'),
              'address' => request('address'),
              'phone1' => request('phone1'),
              'phone2' => request('phone2'),
              'email' => request('email'),
              'image' => $new_name,
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
         $bio = DB::select('select * from Biographies where id = ?',[$id]);
         return view('about.editBio',['bio'=>$bio]);
      }



      public function edit(Request $request,$id) {
         $companyName = $request->input('companyName');
         $description = $request->input('description');
         $address = $request->input('address');
         $phone1 = $request->input('phone1');
         $phone2 = $request->input('phone2');
         $email = $request->input('email');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/about/", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update biographies set companyName = ? where id = ?',[$companyName, $id]);
         DB::update('update biographies set description = ? where id = ?',[$description, $id]);
         DB::update('update biographies set address = ? where id = ?',[$address, $id]);
         DB::update('update biographies set phone1 = ? where id = ?',[$phone1, $id]);
         DB::update('update biographies set phone2 = ? where id = ?',[$phone2, $id]);
         DB::update('update biographies set email = ? where id = ?',[$email, $id]);
         DB::update('update biographies set image = ? where id = ?',[$new_name,$id]);
         return redirect('/bio');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from biographies where id = ?',[$id]);
     return back();
  }
}
