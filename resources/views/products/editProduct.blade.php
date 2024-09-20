@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<div class="box box-block bg-white">
			<h5>ویرایش مشخصات کالا / محصول</h5>
			<form action = "/updateProduct/<?php echo $product[0]->id; ?>" method = "post" enctype="multipart/form-data" >
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>اسم کالا<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="productName" value="<?php echo $product[0]->productName; ?>" placeholder="اسم کالا" required>
								<span class="font-90 text-muted"></span>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>نوع کالا<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="type" value="<?php echo $product[0]->type; ?>" placeholder="نوع کالا"  required>
								<span class="font-90 text-muted"></span>
							</div>
						</div>
						<input type="hidden" name="productCode" value="<?php echo $product[0]->productCode; ?>">
						<div class="col-md-4">
							<div class="form-group">
								<label>کد کالا<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="type" value="<?php echo $product[0]->type; ?>" placeholder="کد کالا"  required>
								<span class="font-90 text-muted"></span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>کمپنی سازنده<span style="color: red">*</span></label>
								<select class="form-control" name="company_id" required>
									<option value="<?php echo $product[0]->company_id; ?>"><?php echo $product[0]->companyName; ?></option>
									@foreach($companies as $company)
									<option value="{{$company->id}}">{{$company->companyName}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<label for="fullName" style="color: black">قیمت</label>
							<div class="input-daterange input-group" id="date-range" >
								<input type="text" name="price" value="<?php echo $product[0]->price; ?>"   class="form-control txt" >
								<span class="input-group-addon bg-primary b-0 text-white">واحد پولی</span>
								<input type="text"  name="priceUnit" value="<?php echo $product[0]->priceUnit; ?>" class="form-control" >
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>وزن</label>
								<div class="input-daterange input-group" id="date-range">
									<input type="text" name="weight" value="<?php echo $product[0]->weight; ?>" class="form-control txt" >
									<span class="input-group-addon bg-primary b-0 text-white">واحد مربوطه</span>
									<input type="text"  name="weightUnit" value="<?php echo $product[0]->weightUnit; ?>" class="form-control" >
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>محل فروش</label>
								<input type="text" class="form-control" name="salesPlace" value="<?php echo $product[0]->salesPlace; ?>" placeholder="محل فروش" >
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>تاریخ تولید</label>
								<input type="date" class="form-control" name="productionDate" value="<?php echo $product[0]->productionDate; ?>">
								<span class="font-90 text-muted"></span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>تاریخ انقضا</label>
								<input type="date" class="form-control" name="expireDate" value="<?php echo $product[0]->expireDate; ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>نمایش در سایت</label>
								<select class="form-control" name="view">
									<option value="<?php echo $product[0]->view; ?>">-------------</option>
									<option value="2">خیر</option>
									<option value="1">بلی</option>
								</select>
							</div>
						</div>
					</div>
						<input type="hidden" name="status" value="1">
					<div class="row">
						<div class="col-md-12">
							<label  style="color: black">تصویر محصول</label>
							<input type="hidden" name="productImage" value="<?php echo $product[0]->productImage; ?>">
							<input type="file" name="productImage" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/products/<?php echo $product[0]->productImage; ?>" />
						</div>
				</div>
					<br>
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
