@extends('layouts.master')
@section('content')

<div class="content-area py-1">
		<div class="box box-block bg-white">
			<h5>فورم ثبت سفارش جدید:</h5>
			<!-- <p class="font-90 text-muted mb-1">Use <code>data-mask</code> to the input element.</p> -->
			@include('layouts.errors')

			<form method="post" action="{{ route('addOrder') }}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>کد سفارش<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="orderCode" placeholder="کد سفارش" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>اسم مشتری<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="customerName" placeholder="اسم کوچک + اسم خانوادگی" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>کالا / محصول<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="productName" placeholder="کالا / محصول" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>تعداد<span style="color: red">*</span></label>
							<input type="text" class="form-control txt" name="quantity" placeholder="تعداد" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>
					<input type="hidden" name="status" value="1">
				</div>

				<div class="row">
					<div class="col-md-12">
						<label>توضیحات</label>
				     <textarea name="desc" rows="10" class="col-md-12" placeholder="توضیحات سفارش را اینجا بنویسید..."></textarea>
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


	<!-- Content -->
	<div class="content-area py-1">
	  <div class="container-fluid">
			<div class="box box-block bg-white">
				<center><h3>لیست شفارشات</h3></center><br>
	 			<div class="overflow-x-auto">
	 				<table class="table table-striped table-bordered dataTable" id="table-2">
	 					<thead>
	 						<tr>
	 							<th>شماره</th>
	 							<th>آی دی سفارش</th>
	 							<th>تاریخ</th>
	 							<th>فرستنده</th>
	 							<th>سایت</th>
	 							<th>مشتری</th>
	 							<th>محصول</th>
	 							<th>تعداد</th>
	 							<th>وضعیت</th>
	 							<th>توضیحات</th>
	 							<td class="with-sub <?php if (Auth::user()->isAdmin == '2'): ?>
		              <?php echo 'hide' ?>
		              <?php endif ?>">تغییر وضیعت</td>
	 							<td class="with-sub <?php if (Auth::user()->isAdmin == '2'): ?>
		              <?php echo 'hide' ?>
		              <?php endif ?>">ویرایش</td>
	 							<td class="with-sub <?php if (Auth::user()->isAdmin == '2'): ?>
		              <?php echo 'hide' ?>
		              <?php endif ?>">خذف</td>
	 						</tr>
	 					</thead>
	 					<tbody>
	 						@foreach($orders as $order)
	 							<tr>
	 								<td>{{ $loop->iteration }}</td>
	 								<td>{{ $order->orderCode}}</td>
	 								<td dir="ltr">{{ $order->created_at}}</td>
	 								<td>{{ $order->name}}</td>
	 								<td>{{ $order->site}}</td>
	 								<td>{{ $order->customerName}}</td>
	 								<td>{{ $order->productName}}</td>
	 								<td>{{ $order->quantity}}</td>
	 								<td>
										<center>
											@if($order->status == 1)
												<input type="button" class="btn btn-danger btn-rounded btn-sm" value="در حال پروسیس">
											@elseif($order->status == 2)
												<input type="button" class="btn btn-warning btn-rounded btn-sm" value="ارسال شده">
											@elseif($order->status == 3)
												<input type="button" class="btn btn-primary btn-rounded btn-sm" value="آماده تحویل">
											@else
												<input type="button" class="btn btn-success btn-rounded btn-sm" value="دریافت شده">
											@endif
									 </center>
									</td>
	 								<td>{{ $order->desc}}</td>
	 								<td class="with-sub <?php if (Auth::user()->isAdmin == '2'): ?>
			              <?php echo 'hide' ?>
			              <?php endif ?>">
										<a href="{{url('confirmOrder').'/' .$order->id}}" title="تغییر وضیعت">
											<i class="ti-loop text-success"></i>
										</a>
									</td>
									<td class="with-sub <?php if (Auth::user()->isAdmin == '2'): ?>
			              <?php echo 'hide' ?>
			              <?php endif ?>">
										<a href="{{url('editOrder').'/' .$order->id}}" title="ویرایش">
											<i class="ti-pencil-alt"></i>
										</a>
									</td>
									<td class="with-sub <?php if (Auth::user()->isAdmin == '2'): ?>
			              <?php echo 'hide' ?>
			              <?php endif ?>">
										<a href="{{url('deleteOrder').'/' .$order->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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
