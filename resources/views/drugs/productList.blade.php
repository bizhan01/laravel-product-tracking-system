@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست ادویه</h4>
		@include('layouts.errors')
		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>آی دی(ID)</th>
							<th>اسم کالا</th>
							<th>نوع کالا</th>
							<td>عملیات</td>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="{{ asset('UploadedImages/drugs').'/'.$product->productImage}}"  style="width: 100% !important; ">
								</td>
								<td dir="ltr" style="text-align: center;">{{ $product->productCode}}</td>
								<td>{{ $product->productName}}</td>
								<td>{{ $product->type}}</td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="{{url('drugDetails').'/'.$product->id}}" title="جزییات">
										<i class="ti-info-alt text-info"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<!-- {{url('repeatRroduct').'/'.$product->id}} -->
									<a href="#" title="تکرار">
										<i class="ti-plus text-warning"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('editDrug').'/' .$product->id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('deleteDrug').'/' .$product->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
										<i class="ti ti-trash text-danger"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
