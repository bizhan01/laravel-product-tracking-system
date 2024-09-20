@extends('website.masterLayouts')
@section('content')

<section class="site-section " dir="rtl">
  <div class="container  border rounded" >
    <center style="margin-top: 20px"><button class="btn btn-primary btn-lg"> به شرکت <?php echo $product[0]->companyName; ?> خوش آمدید</button></center><br>
    <div  style=" text-align: right">
      <div class="row">
        <div class="col-lg-5">
          <div class=" p-3 border rounded mb-4">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">مشخصات کالا</h3>
            <ul class="list-unstyled pl-3 mb-0" style="direction: rtl;">
              <li class="mb-2"><strong class="text-black">اسم کالا/محصول: </strong> <?php echo $product[0]->productName; ?></li>
              <li class="mb-2"><strong class="text-black">کشور/کمپنی تولید کننده: </strong> <?php echo $product[0]->companyName; ?></li>
              <li class="mb-2"><strong class="text-black">نوع کالا: </strong> <?php echo $product[0]->type; ?></li>
              <li class="mb-2"><strong class="text-black">قیمت کالا:  </strong> <?php echo $product[0]->price; ?></li>
              <li class="mb-2"><strong class="text-black">وزن کالا: </strong> <?php echo $product[0]->weight; ?></li>
              <li class="mb-2"><strong class="text-black">محل فروش:  </strong> <?php echo $product[0]->salesPlace; ?></li>
              <li class="mb-2"><strong class="text-black">تاریخ تولید:  </strong> <?php echo $product[0]->productionDate; ?></li>
              <li class="mb-2"><strong class="text-black">تاریخ انقضا:  </strong> <?php echo $product[0]->expireDate; ?></li>
              <li class="mb-2"><strong class="text-black">کد اصالت:  </strong> <?php echo $product[0]->id; ?></li>
            </ul>
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

        <div class="col-lg-7">
          <div class="mb-5">
            <figure class="mb-5"><img src="/uploadedImages/products/<?php echo $product[0]->productImage; ?>" alt="" class="img-fluid rounded"></figure>
          </div>
        </div>
      </div>

      <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
        <div class="col-md-2">
          <a href="/uploadedImages/companies/<?php echo $product[0]->image; ?>"><img src="/uploadedImages/companies/<?php echo $product[0]->image; ?>" alt="Image" class="img-fluid" style="height: 100px"></a>
        </div>
        <div class="col-md-4">
          <h2><a href="job-single.html"><?php echo $product[0]->companyName; ?></a> </h2>
          <p class="meta"><strong><?php echo $product[0]->activity; ?></strong></p>
        </div>
        <div class="col-md-3 text-left">
          <h5><?php echo $product[0]->email; ?></h5>
          <span class="meta"><?php echo $product[0]->address; ?></span>
        </div>
        <div class="col-md-3 text-md-right">
          <strong class="text-black" dir="ltr"><?php echo $product[0]->phone; ?></strong>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
