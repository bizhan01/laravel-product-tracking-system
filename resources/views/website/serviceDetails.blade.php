@extends('website.masterLayouts')
@section('content')
  <div class="site-section" dir="rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">جزئیات خدمات</h2>
        </div>
      </div>
      <center>
        <div class="col-sm-9 col-md-8 col-lg-10 mb-7" data-aos="fade-up" data-aos-delay="100" style="border: 1px solid black;">
          <a href="" class="h-100" >
            <span class="d-block icon  mb-3 text-primary"><img src="../uploadedImages/services/<?php echo $service[0]->photo; ?>" alt="" style="height: 100px"/></span>
            <h2><?php echo $service[0]->title; ?></h2>
            <span class="counting"><?php echo $service[0]->description;?></span>
          </a>
          <br></br>
        </div>
      </center>
    </div>
  </div>
@endsection
