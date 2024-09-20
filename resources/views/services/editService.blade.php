@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
	<div class="container-fluid">
    <nav class="navbar navbar-light bg-white b-a mb-2">
      <center><h3>ویرایش خدمات</h3></center>
			<form action = "/updateService/<?php echo $service[0]->id; ?>" method = "post" enctype="multipart/form-data" >
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				 <div class="row form-group">
					 <div class="col-md-12">
						 <label  style="color: black">اسم خدمات<span style="color: red">*</span></label>
						 <input type="text" name="title" value = '<?php echo $service[0]->title; ?>'  class="form-control"  placeholder="اسم کامل" required>
					 </div>
				 </div>
				 <div class="row form-group">
					 <div class="col-md-6">
						 <label  style="color: black">توضیحات</label><br>
						 <textarea name="description" rows="10" class="col-md-12" placeholder="لطفا توضیحات خدمات را در اینجا بنویسید..."><?php echo $service[0]->description; ?></textarea>
					 </div>
					 <div class="col-md-6">
						 <label  style="color: black">تصویر</label>
						 <input type="hidden" name="image" value="<?php echo $service[0]->photo; ?>">
						 <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/services/<?php echo $service[0]->photo; ?>" />
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
