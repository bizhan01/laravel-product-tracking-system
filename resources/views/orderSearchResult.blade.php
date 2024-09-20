@extends('website.masterLayouts')
@section('content')
<div style="height: 113px;"></div>
<div class="site-blocks-cover overlay inner-page" style="background-image: url('/website/images/IMG-20210727-WA0005.jpg'); height: 450px" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="h3 mb-0">نتیجه جستجو</h1><br>
         @if(isset($details))
         @foreach($details as $order)
        <p class="h2  mb-10" style="background-color: green; color: white; padding: 80px;">
          مشتری گرامی<br>
          @if($order->status == 1)
             سفارش شما در حال آماده شدن است
           @elseif($order->status == 2)
            سفارش شما از مبدا به مقصد ارسال شده است
           @elseif($order->status == 3)
             سفارش شما آماده تحویل میباشد
            @elseif($order->status == 4)
             سفارش شما تحویل داده شده است
           @else
          @endif
        </p>
        @endforeach
        @else(isset($message))
          <p class="h2  mb-10" style="background-color: #f70c17; color: white; padding: 60px; direction: rlt">{{$message}}
            مشتری گرامی<br>
            کد سفارش شما در سیستم ثبت نمی باشد<br>
          لطفا بصورت صحیح کد را وارد کنید
          </p>
        @endif
        <p><a href="{{route('contactUs')}}" class="btn btn-outline-warning py-3 px-4">تماس باما</a> <a href="{{route('welcome')}}" class="btn btn-warning py-3 px-4">برگشت</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
