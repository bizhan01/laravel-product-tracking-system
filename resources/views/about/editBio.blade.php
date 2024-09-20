@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
	<div class="container-fluid">
    <nav class="navbar navbar-light bg-white b-a mb-2">
      <center><h3>ویرایش مشخصات شرکت</h3></center>
			<form action = "/editBio/<?php echo $bio[0]->id; ?>" method = "post" enctype="multipart/form-data" >
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				 <div class="row form-group">
					 <div class="col-md-6">
						 <label  style="color: black">اسم کامل</label>
						 <input type="text" name="companyName" value = '<?php echo $bio[0]->companyName; ?>'  class="form-control"  placeholder="اسم کامل" required>
					 </div>
					 <div class="col-md-6">
						 <label  style="color: black">آدرس</label>
						 <input type="text" name="address" value = '<?php echo $bio[0]->address; ?>'  class="form-control"  placeholder="آدرس" required>
					 </div>
				 </div>
				 <div class="row form-group">
					 <div class="col-md-4">
						 <label  style="color: black">تلفن اول <span style="color: red">*</span></label>
						 <input type="text" name="phone1" placeholder="0799999999" value = '<?php echo $bio[0]->phone1; ?>' data-mask="0799999999" class="form-control" style="direction: ltr" required>
					 </div>
					 <div class="col-md-4">
						 <label  style="color: black">تلفن دوم</label>
						 <input type="text" name="phone2" placeholder="0799999999" value = '<?php echo $bio[0]->phone2; ?>' data-mask="0799999999" class="form-control" style="direction: ltr" >
					 </div>
					 <div class="col-md-4">
						 <label  style="color: black">ایمیل آدرس <span style="color: red">*</span></label>
						 <input type="email" name="email" value = '<?php echo $bio[0]->email; ?>'  class="form-control"  placeholder="ایمیل آدرس" required>
					 </div>
				</div>
				 <div class="row form-group">
					 <div class="col-md-6">
						 <label  style="color: black">بیوگرافی</label><br>
						 <textarea name="description" rows="10" class="col-md-12" placeholder="لطفا شرکت تان را در 500 کراکتر مختصر معرفی کنید..." ><?php echo $bio[0]->description; ?></textarea>
					 </div>
					 <div class="col-md-6">
						 <label  style="color: black">تصویر</label>
						 <input type="hidden" name="image" value="<?php echo $bio[0]->image; ?>">
						 <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/about/<?php echo $bio[0]->image; ?>" />
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
