@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md">
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-success"></span><i class="ti-shopping-cart-full"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">سفارشات جدید</h6>
            <h1 class="mb-1">0</h1>
            <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
            <!-- <span class="text-muted font-90">from previous period</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-danger"></span><i class="ti-bar-chart"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">سفارشات تایید شده</h6>
            <h1 class="mb-1">0</h1>
            <!-- <i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">محصولات</h6>
            <h1 class="mb-1">0</h1>
            <!-- <span class="tag tag-primary mr-0-5">+125</span> -->
            <!-- <span class="text-muted font-90">arraving today</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-warning"></span><i class="fa fa-users"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">کارمندان</h6>
            <h1 class="mb-1">0</h1>
            <!-- <div id="sparkline1"></div> -->
          </div>
        </div>
      </div>
    </div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" href="#">فروشات</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-muted" href="#">خریداری ها</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-muted" href="#">مصارف</a>
      </li>
    </ul>
    <div class="box box-block bg-white b-t-0 mb-2">
      <div class="text-muted mb-1">فروشات 10 روز اخیر</div>
      <div class="clearfix mb-1">
          <!-- <h5 class="float-xs-left">آمار فروشات</h5> -->
          <div class="float-xs-right">
            <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
            <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
            <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
          </div>
        </div>
        <div id="advanced" class="chart-container mb-1" style="height: 295px;"></div>
    </div>
  </div>
</div>
@endsection
