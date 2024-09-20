@extends('layouts.master')
@section('content')
	<!-- Content -->
	<div class="content-area py-1">
	  <div class="container-fluid">
			<div class="box box-block bg-white">
				<center><h3>سفارشات در حال پروسیس</h3></center><br>
	 			<div class="overflow-x-auto">
	 				<table class="table table-striped table-bordered dataTable" id="table-2">
	 					<thead>
	 						<tr>
	 							<th>کد سفارش</th>
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
