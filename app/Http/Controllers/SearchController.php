<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Biography;
use App\Order;
use App\Product;
use DB;

class SearchController extends Controller
{
    public function searchOrder()
      {
        $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();

        $q = Input::get ( 'q' );
        if($q != ""){
          $orders = Order::where ( 'orderCode', $q )->get ();
          if (count ( $orders ) > 0)
            return view ( 'orderSearchResult', compact('biographies') )->withDetails ( $orders )->withQuery ( $q );
          else
            return view ( 'orderSearchResult', compact('biographies') )->withMessage ("");
        }
      }


      public function searchProduct()
        {
          $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();

          $q = Input::get ( 'q' );
          if($q != ""){
            // $products = Product::where ( 'id', $q )->get ();

            $products = DB::table('products as pr')
                     ->leftJoin('users as u', 'pr.user_id', '=', 'u.id')
                     ->leftJoin('companies as com', 'pr.company_id', '=', 'com.id')
                     ->select('pr.*', 'u.name as name',  'com.companyName as companyName',  'com.activity as activity',  'com.phone as phone',  'com.email as email',  'com.address as address',  'com.image as image')
                    ->where('pr.productCode', $q)
                    ->get();

            if (count ( $products ) > 0)
              return view ( 'productSearchResult', compact('biographies') )->withDetails ( $products )->withQuery ( $q );
            else
              return view ( 'productSearchResult', compact('biographies') )->withMessage ( '' );
          }
        }


        public function searchDrug()
          {
            $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();

            $q = Input::get ( 'q' );
            if($q != ""){
              // $products = Product::where ( 'id', $q )->get ();

              $products = DB::table('drugs as pr')
                       ->leftJoin('users as u', 'pr.user_id', '=', 'u.id')
                       ->leftJoin('companies as com', 'pr.company_id', '=', 'com.id')
                       ->select('pr.*', 'u.name as name',  'com.companyName as companyName',  'com.activity as activity',  'com.phone as phone',  'com.email as email',  'com.address as address',  'com.image as image')
                      ->where('pr.productCode', $q)
                      ->get();

              if (count ( $products ) > 0)
                return view ( 'drugSearchResult', compact('biographies') )->withDetails ( $products )->withQuery ( $q );
              else
                return view ( 'drugSearchResult', compact('biographies') )->withMessage ( '' );
            }
          }


}
