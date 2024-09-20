@extends('layouts.master')
@section('content')
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="box bg-white product-view mb-2">
      <div class="box-block">
        @foreach($products as $product)
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <div class="pv-images mb-1 mb-sm-0">
              <div class="mb-1">
                <br>
                <center><img class="img-fluid" src="/UploadedImages/products/{{$product->productImage}}" alt=""></center>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-7">
            <div class="pv-content">
              <div class="pv-title">
                مشخصات کالا / محصول
                <a class="text-danger" href="#"><i class="fa fa-star"></i></a>
              </div>
              <table class="table mb-md-0">
                <tbody>
                  <tr class="table-active">
                    <th><b>اسم کالا</b></th>
                    <td>{{$product->productName}}</td>
                    <td><b>تاریخ تولید</b></td>
                    <td>{{$product->productionDate}}</td>
                  </tr>
                  <tr>
                    <th><b>نوع کالا</b></th>
                    <td>{{$product->type}}</td>
                    <td><b>تاریخ انقضا</b></td>
                    <td>{{$product->expireDate}}</td>
                  </tr>
                  <tr class="table-success">
                    <th><b>کمپنی</b></th>
                    <td>{{$product->companyName}}</td>
                    <td><b>نمایش</b></td>
                    <td>
                      @if($product->view == 1)
                        <input type="button" class="btn btn-danger btn-rounded btn-sm" value="خیر">
                      @else($product->view == 2)
                        <input type="button" class="btn btn-success btn-rounded btn-sm" value="بلی">
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <th><b>قیمت</b></th>
                    <td>{{$product->price}} {{$product->priceUnit}}</td>
                    <td><b>ثبت کننده</b></td>
                    <td>{{$product->name}}</td>
                  </tr>
                  <tr class="table-info">
                    <th><b>وزن</b></th>
                    <td>{{$product->weight}} {{$product->weightUnit}}</td>
                    <td><b>کد اصالت</b></td>
                    <td>{{$product->productCode}}</td>
                  </tr>
                  <tr>
                    <th><b>محل فروش</b></th>
                    <td>{{$product->salesPlace}}</td>
                    <td><b>وضعیت کالا</b></td>
                    <td>
                      @if($product->status == 0)
                        <input type="button" class="btn btn-danger btn-rounded btn-sm" value="غیر فعال">
                      @else($product->status == 1)
                        <input type="button" class="btn btn-success btn-rounded btn-sm" value="فعال">
                      @endif
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a class="text-primary" href="{{route('productList')}}"><span class="underline">برگشت</span></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
