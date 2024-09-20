@extends('website.masterLayouts')
@section('content')
<br>
@if($success = session('success'))
  <div class="alert alert-success alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center><strong>{{$success}}</strong></center>
 </div>
@endif



<div class="site-section bg-light" style="text-align: right" dir="rtl">
<div class="container">
  <div class="row">

    <div class="col-md-12 col-lg-8 mb-5">

      <form method="POST" action="{{route('SendMessage')}}" class="p-5 bg-white">
          {{ csrf_field() }}

        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">اسم کامل</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12">
            <label class="font-weight-bold" for="email">ایمیل</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="">
          </div>
        </div>


        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="phone">موضوع پیام شما</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="موضوع پیام شما">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label class="font-weight-bold" for="message">پیام</label>
            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="پیام شما..."></textarea>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="ارسال پیام" class="btn btn-primary pill px-4 py-2">
          </div>
        </div>


      </form>
    </div>

    <div class="col-lg-4">
      @foreach($biographies as $bio)
      <div class="p-4 mb-3 bg-white">
        <h3 class="h5 text-black mb-3">معلومات ارتباطی</h3>
        <p class="mb-0 font-weight-bold">آدرس</p>
        <p class="mb-4">{{$bio->address}}</p>

        <p class="mb-0 font-weight-bold">شماره تماس</p>
        <p class="mb-4"><a href="#">{{$bio->phone1}}</a></p>

        <p class="mb-0 font-weight-bold">ایمیل آدرس</p>
        <p class="mb-0"><a href="#">{{$bio->email}}</a></p>

      </div>

      <div class="p-4 mb-3 bg-white">
        <h3 class="h5 text-black mb-3">معلومات مختصر</h3>
        <p>{{$bio->description}}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>

@endsection
