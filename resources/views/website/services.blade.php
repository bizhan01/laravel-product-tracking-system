@extends('website.masterLayouts')
@section('content')


  <div class="site-section" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">خدمات ما</h2>
        </div>
      </div>
      <div class="row">
        @foreach($services as $service)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
          <a href="serviceDetails/{{ $service->id }}" class="h-100 feature-item">
            <span class="d-block icon  mb-3 text-primary"><img src="/uploadedImages/services/{{$service->photo}}" alt="" style="height: 100px"/></span>
            <h2>{{$service->title}}</h2>
            <span class="counting">جزئیات</span>
          </a>
        </div>
      @endforeach
      </div>
    </div>
  </div>
@endsection
