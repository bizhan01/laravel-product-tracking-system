@extends('website.masterLayouts')
@section('content')
@if(isset($details))
@foreach($details as $product)
<br></br>
<section class="site-section" dir="rtl" >
  <div class="container  border rounded" >
    <br></br>
  <center>
    <h3>مشتری گرامی اصالت دارو مورد نظر شما در سیستم ثبت و مورد تایید می باشد</h3>
    <br>
    <button class="btn btn-primary btn-lg"> به شرکت {{$product->companyName}} خوش آمدید</button>
  </center><br>
  <div class="container" style=" text-align: right">
    <div class="row">
      <div class="col-lg-5">
        <div class=" p-3 border rounded mb-4">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">مشخصات کالا</h3>
          <table class="table table-striped table-bordered dataTable" id="table-3">
            <tbody>
              <tr>
                <th>اسم کالا/محصول </th>
                <th style="color: green">{{$product->productName}}</th>
              </tr>
              <tr>
                <th>کشور/کمپنی تولید کننده</th>
                <th style="color: green">{{$product->companyName}}</th>
              </tr>
              <tr>
                <th>نوع کالا</th>
                <th style="color: green">{{$product->type}}</th>
              </tr>
              <tr>
                <th>قیمت کالا</th>
                <th style="color: green">{{$product->price}} {{$product->priceUnit}}</th>
              </tr>
              <tr>
                <th>وزن کالا</th>
                <th style="color: green">{{$product->weight}} {{$product->weightUnit}}</th>
              </tr>
              <tr>
                <th>محل فروش</th>
                <th style="color: green">{{$product->salesPlace}}</th>
              </tr>
              <tr>
                <th>تاریخ تولید</th>
                <th style="color: green">{{$product->productionDate}}</th>
              </tr>
              <tr>
                <th>تاریخ انقضا</th>
                <th style="color: green">{{$product->expireDate}}</th>
              </tr>
              <tr>
                <th>کد اصالت</th>
                <th style="color: green">{{$product->productCode}}</th>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="bg-light p-3 border rounded">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">شریک ساختن</h3>
          <div class="px-3">
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
          </div>
        </div>

      </div>

      <div class="col-lg-5">
        <div class="mb-5">
          <figure class="mb-5"><img src="/uploadedImages/drugs/{{$product->productImage}}" alt="" class="img-fluid rounded"></figure>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="mb-5">
          <figure class="mb-5"><img src="/website/images/confirm.png" alt="" class="img-fluid rounded"></figure>
        </div>
      </div>
    </div>

    <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
      <div class="col-md-2">
        <a href="/uploadedImages/companies/{{$product->image}}"><img src="/uploadedImages/companies/{{$product->image}}" alt="Image" class="img-fluid" style="height: 100px"></a>
      </div>
      <div class="col-md-4">
        <h2><a href="job-single.html">{{$product->companyName}}</a> </h2>
        <p class="meta"><strong>{{$product->activity}}</strong></p>
      </div>
      <div class="col-md-3 text-left">
        <h5>{{$product->email}}</h5>
        <span class="meta">{{$product->address}}</span>
      </div>
      <div class="col-md-3 text-md-right">
        <strong class="text-black" dir="ltr">{{$product->phone}}</strong>
      </div>
    </div>

  </div>
  </div>
</section>

@endforeach
@else(isset($message))
<br></br>
<section class="site-section" dir="rtl" >
  <div class="container  border rounded" >
    <br>
    <p class="h2 " style="text-align: center; background-color: #f70c17; color: white; padding: 50px; direction: rlt">{{$message}}
      مشتری گرامی<br>
      کد دارو مورد نظر در سیستم  ثبت نمی باشد<br>
      لطفا کد کالا را صحیح در ذیل وارد نمایید
    </p><br>
  </div>
  <br>
  <center><p> <a href="{{route('welcome')}}" class="btn btn-warning py-3 px-4">برگشت</a>  <a href="{{route('contactUs')}}" class="btn btn-outline-warning py-3 px-4">تماس باما</a></p></center>
</section>

@endif
@endsection
