@extends('layouts.master')
@section('content')

<div class="content-area py-1">
		<div class="box box-block bg-white">
			<h5>فورم ثبت محصول جدید:</h5>
			<!-- <p class="font-90 text-muted mb-1">Use <code>data-mask</code> to the input element.</p> -->
			@include('layouts.errors')
			<form method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>اسم کالا<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="productName" placeholder="اسم کالا" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>نوع کالا<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="type" placeholder="نوع کالا" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>کد کالا<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="productCode" placeholder="کد کالا" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>کمپنی سازنده<span style="color: red">*</span></label>
							<select class="form-control" name="company_id" required>
								<option value="">انتخاب کنید</option>
								@foreach($companies as $company)
								<option value="{{$company->id}}">{{$company->companyName}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-md-4">
						<label for="fullName" style="color: black">قیمت</label>
						<div class="input-daterange input-group" id="date-range">
							<input type="text" name="price"   class="form-control txt" >
							<span class="input-group-addon bg-primary b-0 text-white">واحد پولی</span>
							<input type="text"  name="priceUnit" class="form-control" >
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>وزن</label>
							<div class="input-daterange input-group" id="date-range">
								<input type="text" name="weight"  class="form-control txt" >
								<span class="input-group-addon bg-primary b-0 text-white">واحد مربوطه</span>
								<input type="text"  name="weightUnit" class="form-control" >
							</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>محل فروش</label>
							<input type="text" class="form-control" name="salesPlace" placeholder="محل فروش" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>تاریخ تولید</label>
							<input type="date" class="form-control" name="productionDate">
							<span class="font-90 text-muted"></span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>تاریخ انقضا</label>
							<input type="date" class="form-control" name="expireDate">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>نمایش در سایت</label>
							<select class="form-control" name="view">
								<option value="2">خیر</option>
								<option value="1">بلی</option>
							</select>
						</div>
					</div>
				</div>
					<input type="hidden" name="status" value="1">
				<div class="row">
				<div class="col-md-12">
					<label>عکس</label>
					 <input type="file" name="productImage" id="input-file-now" class="dropify"/>
				</div>
			</div>

				<br>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
							<i class="ti-save"></i>
							<span>ذخیره</span>
						</button>
						<button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
							<i class="ti-loop"></i>
							<span>لغو</span>
						</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


@endsection
