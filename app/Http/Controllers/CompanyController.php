<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Company;
use DB;

class CompanyController extends Controller
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
      $companies = Company::latest()->get();
      return view('companies.addCompany', compact('companies',));
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
            'activity'=>'required',
            'phone'=>'required|unique:companies',
            'email'=>'required|unique:companies',
            'address'=>'required',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/companies"), $new_name);
        }
        else {
          $new_name = 'No Image.png';
        }
          Company::create([
              'companyName' => request('companyName'),
              'activity' => request('activity'),
              'phone' => request('phone'),
              'email' => request('email'),
              'address' => request('address'),
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
         $company = DB::select('select * from companies where id = ?',[$id]);
         return view('companies.editCompany',['company'=>$company]);
      }



      public function edit(Request $request,$id) {
         $companyName = $request->input('companyName');
         $activity = $request->input('activity');
         $phone = $request->input('phone');
         $email = $request->input('email');
         $address = $request->input('address');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/companies", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update companies set companyName = ? where id = ?',[$companyName,$id]);
         DB::update('update companies set activity = ? where id = ?',[$activity,$id]);
         DB::update('update companies set phone = ? where id = ?',[$phone,$id]);
         DB::update('update companies set email = ? where id = ?',[$email,$id]);
         DB::update('update companies set address = ? where id = ?',[$address,$id]);
         DB::update('update companies set image = ? where id = ?',[$new_name,$id]);
         return redirect('/company');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from companies where id = ?',[$id]);
     return back();
  }
}
