<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biography;
use App\Product;
use App\Company;
use App\Service;
use DB;

class SiteController extends Controller
{


      public function index() {
        $services = Service::latest()->get();
        $companies = Company::latest()->get();
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.welcome', compact('services', 'companies', 'biographies'));
      }

      public function services() {
        $services = Service::latest()->get();
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.services', compact('services', 'biographies'));
      }

      public function serviceDetails($id) {
        $service = DB::select('select * from services where id = ?',[$id]);
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.serviceDetails', compact( 'biographies', 'service'));
      }

      public function partners() {
        $companies = Company::latest()->get();
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.partners', compact('companies', 'biographies'));
      }

      public function products() {
        $products = Product::latest()->get();
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.products', compact('products', 'biographies'));
      }

      public function productShowDetails($id) {
        $product = DB::table('products as pr')
                 ->leftJoin('users as u', 'pr.user_id', '=', 'u.id')
                 ->leftJoin('companies as com', 'pr.company_id', '=', 'com.id')
                 ->select('pr.*', 'u.name as name',  'com.companyName as companyName',  'com.activity as activity',  'com.phone as phone',  'com.email as email',  'com.address as address',  'com.image as image')
                ->where('pr.id', $id)
                ->get();

        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.productDetails', compact( 'product', 'biographies'));
      }


      public function about() {
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.about', compact('biographies'));
      }

      public function contactUs() {
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        return view('website.contactUs', compact('biographies'));
      }



}
