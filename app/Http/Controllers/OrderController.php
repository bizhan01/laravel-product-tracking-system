<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Order;
use Illuminate\Support\Str;


class OrderController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
      if (Auth::check()){
      $userid = Auth::user()->id;
    }
    $orders = DB::table('orders as or')
             ->leftJoin('users as u', 'or.user_id', '=', 'u.id')
             ->select('or.*', 'u.name as name', 'u.site as site')
            ->orderByRaw('(or.created_at)desc')
            ->where('or.user_id', $userid)
            ->get();
    	return view('orders.addOrder', compact('orders'));
    }

    public function pending() {
      $orders = DB::table('orders as or')
               ->leftJoin('users as u', 'or.user_id', '=', 'u.id')
               ->select('or.*', 'u.name as name', 'u.site as site')
              ->orderByRaw('(or.created_at)desc')
              ->where('or.status', 1)
              ->get();
      return view('orders.pending', compact('orders'));
    }

    public function send() {
      $orders = DB::table('orders as or')
               ->leftJoin('users as u', 'or.user_id', '=', 'u.id')
               ->select('or.*', 'u.name as name', 'u.site as site')
              ->orderByRaw('(or.created_at)desc')
              ->where('or.status', 2)
              ->get();
      return view('orders.send', compact('orders'));
    }

    public function ready() {
      $orders = DB::table('orders as or')
               ->leftJoin('users as u', 'or.user_id', '=', 'u.id')
               ->select('or.*', 'u.name as name', 'u.site as site')
              ->orderByRaw('(or.created_at)desc')
              ->where('or.status', 3)
              ->get();
      return view('orders.ready', compact('orders'));
    }

    public function delivered() {
      $orders = DB::table('orders as or')
               ->leftJoin('users as u', 'or.user_id', '=', 'u.id')
               ->select('or.*', 'u.name as name', 'u.site as site')
              ->orderByRaw('(or.created_at)desc')
              ->where('or.status', 4)
              ->get();
      return view('orders.delivered', compact('orders'));
    }

    // save student
    public function store(Request $req) {
    	 $this->validate($req, [
    		'orderCode' => 'required|unique:orders',
    		'customerName' => 'required',
    		'productName' => 'required',
    		'quantity' => 'required',
    		'status' => 'required',
    		'desc' => 'nullable',
    	]);
    	$order = new Order();
        $order->user_id = Auth::user()->id;
        $order->orderCode = $req->orderCode;
        $order->customerName = $req->customerName;
      	$order->productName = $req->productName;
      	$order->quantity = $req->quantity;
      	$order->status = $req->status;
      	$order->desc = $req->desc;

    	try {
    		$order->save();
            session()->flash('success', 'موفقانه ثبت شد');
    		return back();
    	} catch (Exception $e) {
    		session()->flash('failed', 'ذخیره نشد. لطفا دوباره کوشش کنید.');
    		return back();
    	}
    }


    public function confirm($id) {
     $order = DB::select('select * from orders where id = ?',[$id]);
     return view('orders.confirmOrder',['order'=>$order]);
    }



        public function show($id) {
         $order = DB::select('select * from orders where id = ?',[$id]);
         return view('orders.editOrder',['order'=>$order]);
       }


      public function edit(Request $req) {
          $this->validate($req, [
            'user_id' => 'required|string',
            'orderCode' => 'required',
            'customerName' => 'required',
            'productName' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'desc' => 'nullable',
          ]);

          $order = Order::find($req->id);

          $order->user_id = $req->user_id;
          $order->orderCode = $req->orderCode;
          $order->customerName = $req->customerName;
          $order->productName = $req->productName;
          $order->quantity = $req->quantity;
          $order->status = $req->status;
          $order->desc = $req->desc;

          try {
              $order->save();
              session()->flash('success', 'موفقانه ثبت شد');
              return redirect('/order');
          } catch (Exception $e) {
              session()->flash('failed', 'ذخیره نشد. لطفا دوباره کوشش کنید.');
              return back();
          }
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from orders where id = ?',[$id]);
     return back();
   }


}
