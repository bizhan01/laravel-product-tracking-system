@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<div class="box box-block bg-white">
			<h5>ویرایش معلومات شرکا / همکاران</h5>
			<form action = "/updateCompany/<?php echo $company[0]->id; ?>" method = "post" enctype="multipart/form-data" >
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				 <div class="row form-group">
					 <div class="col-md-6">
						 <label  style="color: black">اسم شرکت <span style="color: red">*</span></label>
						 <input type="text" name="companyName" value = '<?php echo $company[0]->companyName; ?>'  class="form-control"  placeholder="اسم کامل" required>
					 </div>
					 <div class="col-md-6">
						 <label  style="color: black">نوع فعالیت <span style="color: red">*</span></label>
						 <input type="text" name="activity" value = '<?php echo $company[0]->activity; ?>'  class="form-control"  placeholder="نوع فعالیت" required>
					 </div>
				 </div>
				 <div class="row form-group">
					 <div class="col-md-4">
						 <label  style="color: black">شماره تماس<span style="color: red">*</span></label>
						 <input type="text" name="phone" placeholder="0799999999" value = '<?php echo $company[0]->phone; ?>' data-mask="0799999999" class="form-control" style="direction: ltr" >
					 </div>
					 <div class="col-md-4">
						 <label  style="color: black">ایمیل آدرس <span style="color: red">*</span></label>
						 <input type="email" name="email" value = '<?php echo $company[0]->email; ?>'  class="form-control"  placeholder="ایمیل آدرس" required>
					 </div>
					 <div class="col-md-4">
						 <label  style="color: black">آدرس فزیکی<span style="color: red">*</span></label>
						 <input type="text" name="address"  value = '<?php echo $company[0]->address; ?>'  class="form-control"  required>
					 </div>
				</div>
				 <div class="row form-group">
					 <div class="col-md-12">
						 <label  style="color: black">تصویر / لوگو</label>
						 <input type="hidden" name="image" value="<?php echo $company[0]->image; ?>">
						 <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/companies/<?php echo $company[0]->image; ?>" />
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
		</div>
	</div>
</div>
@endsection
