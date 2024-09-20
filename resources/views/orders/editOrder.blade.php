@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
	<div class="container-fluid">
    <nav class="navbar navbar-light bg-white b-a mb-2">
      <center>
        <h3>ویرایش سفارش</h3>
        <h3>نمبر سفارش: <?php echo $order[0]->orderCode;?></h3>
      </center><br>
			<form action = "/updateOrder/<?php echo $order[0]->id; ?>" method = "post" enctype="multipart/form-data" >
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				 <div class="row form-group">
           <input type="hidden" name="user_id" value="<?php echo $order[0]->user_id; ?>">
           <div class="col-md-3">
             <div class="form-group">
               <label>کد سفارش<span style="color: red">*</span></label>
               <input type="text" class="form-control" name="orderCode" value="<?php echo $order[0]->orderCode; ?>" placeholder="کد سفارش" required>
               <span class="font-90 text-muted"></span>
             </div>
           </div>

					 <div class="col-md-3">
						 <div class="form-group">
							 <label>اسم مشتری<span style="color: red">*</span></label>
							 <input type="text" class="form-control" name="customerName" value="<?php echo $order[0]->customerName; ?>" placeholder="اسم کوچک + اسم خانوادگی" required>
							 <span class="font-90 text-muted"></span>
						 </div>
					 </div>

           <div class="col-md-3">
             <div class="form-group">
               <label>کالا / محصول<span style="color: red">*</span></label>
               <input type="text" class="form-control" name="productName" value="<?php echo $order[0]->productName; ?>" placeholder="کالا / محصول" required>
               <span class="font-90 text-muted"></span>
             </div>
           </div>

           <div class="col-md-3">
             <div class="form-group">
               <label>تعداد<span style="color: red">*</span></label>
               <input type="text" class="form-control txt" name="quantity" value="<?php echo $order[0]->quantity; ?>" placeholder="تعداد" required>
               <span class="font-90 text-muted"></span>
             </div>
           </div>
           <input type="hidden" name="status" value="<?php echo $order[0]->status; ?>">
				 </div>
				 <div class="row form-group">
					 <div class="col-md-12">
						 <label  style="color: black">توضیحات</label><br>
						 <textarea name="desc" rows="10" class="col-md-12" placeholder="لطفا توضیحات خدمات را در اینجا بنویسید..."><?php echo $order[0]->desc; ?></textarea>
					 </div>
				 </div>
				 <div class="row form-group">
					 <div class="col-md-6">
						 <input type="submit"value="ذخیره سازی تغییرات" class="btn btn-success ">
						 <input type="reset"  value="لغو" class="btn btn-warning ">
					 </div>
				</div>
			 @include('layouts.errors')
      </form>
    </nav>
  </div>
</div>
@endsection
