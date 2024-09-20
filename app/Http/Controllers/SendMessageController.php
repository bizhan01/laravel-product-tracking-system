<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Contact;
use DB;

class SendMessageController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        $this->validate(request(),[
       'name'=>'required|max:255',
       'email'=>'required',
       'subject'=>'required',
       'message'=>'required',

  ]);
    Contact::create([
        'name' => request('name'),
        'email' => request('email'),
        'subject' => request('subject'),
        'message' => request('message'),
        'created_at'=>carbon::now(),
        'updated_at'=>carbon::now(),
      ]);

      try {
       session()->flash('success', 'پیام شما موفقانه دریافت شد  ما به زودی با شما در تماس میشویم');
       return back();
       } catch(Exception $ex) {
       session()->flash('failed', 'خطا! دوباره کوشش کنید');
       return back();
     }
  }
}
