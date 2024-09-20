<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Drug;
use App\Company;

class DrugController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
      $companies = Company::latest()->get();
    	return view('drugs.addProduct', compact('companies'));
    }

    public function drugList() {
        if (Auth::check()){
        $userId = Auth::user()->id;
      }
      $products = Drug::where('user_id', $userId)->latest()->get();
    	return view('drugs.productList', compact('products'));
    }

    // save student
    public function store(Request $req) {
    	 $this->validate($req, [
    		'productName' => 'required|string',
    		'type' => 'required',
    		'productCode' => 'required|unique:products',
    		'company_id' => 'required',
        'price' => 'nullable',
    		'priceUnit' => 'nullable',
    		'weight' => 'nullable',
    		'weightUnit' => 'nullable',
    		'salesPlace' => 'nullable',
    		'productionDate' => 'nullable',
    		'expireDate' => 'nullable',
    		'view' => 'required',
    		'photo' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
        'status' => 'required'
    	]);

        $photo_name = '';
		if($image = $req->file('productImage')){
			$photo_name = date('YmdHis') . '.' . $image-> getClientOriginalExtension();
			$image -> move("UploadedImages/drugs", $photo_name);
        }
        else {
          $photo_name = 'No Image.png';
        }

    	$product = new Drug();

        $product->user_id = Auth::user()->id;
        $product->productName = $req->productName;
      	$product->type = $req->type;
      	$product->productCode = $req->productCode;
      	$product->company_id = $req->company_id;
        $product->price = $req->price;
        $product->priceUnit = $req->priceUnit;
        $product->weight = $req->weight;
        $product->weightUnit = $req->weightUnit;
      	$product->salesPlace = $req->salesPlace;
      	$product->productionDate = $req->productionDate;
      	$product->expireDate = $req->expireDate;
      	$product->view = $req->view;
      	$product->productImage = $photo_name;
      	$product->status = $req->status;

    	try {
    		$product->save();
            session()->flash('success', 'موفقانه ثبت شد');

    		return back();
    	} catch (Exception $e) {
    		session()->flash('failed', 'ذخیره نشد. لطفا دوباره کوشش کنید.');
    		return back();
    	}
    }



    public function drugDetails($id='') {
      $products = DB::table('drugs as pr')
               ->leftJoin('users as u', 'pr.user_id', '=', 'u.id')
               ->leftJoin('companies as com', 'pr.company_id', '=', 'com.id')
               ->select('pr.*', 'u.name as name',  'com.companyName as companyName')
              ->where('pr.id', $id)
              ->get();
     return view('drugs.productDetails',['products'=>$products]);
    }


    // Repeat Product
    public function repeatRroduct($id) {
     $companies = Company::latest()->get();
     $product = DB::table('products as pr')
              ->leftJoin('companies as com', 'pr.company_id', '=', 'com.id')
              ->select('pr.*',  'com.companyName as companyName')
             ->where('pr.id', $id)
             ->get();
     return view('drugs.repeatRroduct',['product'=>$product, 'companies'=>$companies]);
  }



    // Edit
    public function show($id) {
     $companies = Company::latest()->get();
     $product = DB::table('drugs as pr')
              ->leftJoin('companies as com', 'pr.company_id', '=', 'com.id')
              ->select('pr.*',  'com.companyName as companyName')
             ->where('pr.id', $id)
             ->get();
     return view('drugs.editProduct',['product'=>$product, 'companies'=>$companies]);
  }



    public function edit(Request $req) {
        $this->validate($req, [
          'productName' => 'required|string',
          'type' => 'required',
          'productCode' => 'required',
          'company_id' => 'required',
          'price' => 'nullable',
      		'priceUnit' => 'nullable',
      		'weight' => 'nullable',
      		'weightUnit' => 'nullable',
          'salesPlace' => 'nullable',
          'productionDate' => 'nullable',
          'expireDate' => 'nullable',
          'view' => 'required',
          'photo' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
          'status' => 'required'
        ]);

        $photo_name = '';
        if($image = $req->file('productImage')){
          $photo_name = date('YmdHis') . '.' . $image-> getClientOriginalExtension();
          $image -> move("UploadedImages/drugs", $photo_name);
            }

        $product = Drug::find($req->id);

        $product->productName = $req->productName;
        $product->type = $req->type;
        $product->productCode = $req->productCode;
        $product->company_id = $req->company_id;
        $product->price = $req->price;
        $product->priceUnit = $req->priceUnit;
        $product->weight = $req->weight;
        $product->weightUnit = $req->weightUnit;
        $product->salesPlace = $req->salesPlace;
        $product->productionDate = $req->productionDate;
        $product->expireDate = $req->expireDate;
        $product->view = $req->view;
        $product->status = $req->status;
        if ($photo_name != '') {
            $product->productImage = $photo_name;
        }

        try {
            $product->save();
            session()->flash('success', 'موفقانه ثبت شد');
            return redirect('/drugList');
        } catch (Exception $e) {
            session()->flash('failed', 'ذخیره نشد. لطفا دوباره کوشش کنید.');
            return back();
        }
    }


    public function destroy($id='') {
        if ($id == '') {
            return back();
        }
        else {
            $s = Drug::FindOrFail($id);
            if(file_exists('UploadedImages/drugs/'.$s->productImage) AND !empty($s->productImage)) {
                unlink('UploadedImages/drugs/'.$s->productImage);
            }
            try{
                $s->delete();
                session()->flash('success', 'موفقانه حذف شد');
                return back();
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
                session()->flash('failed', 'حذف نشد لطفا دوباره کوشش کنید');
                return back();
            }

        }
    }


}
