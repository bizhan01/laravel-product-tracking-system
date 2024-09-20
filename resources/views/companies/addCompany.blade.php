@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <!-- ُSuccess Flash Message -->
          @if($success = session('success'))
          <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <div>{{$success}}</div>
          </div>
          @endif
				<center><h3>ثبت مشخصات شرکت </h3></center>
        <form method="POST" action="{{route('addCompany')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-6">
                <label  style="color: black">اسم شرکت <span style="color: red">*</span></label>
                <input type="text" name="companyName" value=""  class="form-control"  placeholder="اسم شرکت" required>
              </div>
							<div class="col-md-6">
								<label  style="color: black">فعالیت <span style="color: red">*</span></label>
								<input type="text" name="activity" value=""  class="form-control"  placeholder="فعالیت" required>
							</div>
            </div>

						<div class="row form-group">
							<div class="col-md-4">
								<label  style="color: black">شماره تماس <span style="color: red">*</span></label>
								<input type="text" name="phone" placeholder="0799999999" data-mask="0799999999" class="form-control" style="direction: ltr" required>
							</div>
							<div class="col-md-4">
								<label  style="color: black">ایمیل آدرس <span style="color: red">*</span></label>
								<input type="email" name="email" value=""  class="form-control"  placeholder="like: rahmatulllahbizhan@gmail.com" required>
							</div>
							<div class="col-md-4">
								<label  style="color: black">آدرس فزیکی <span style="color: red">*</span></label>
								<input type="text" name="address" value=""  class="form-control"  placeholder="آدرس فزیکی" required>
							</div>
						</div>

            <div class="row form-group">
              <div class="col-md-12">
                <label  style="color: black">تصویر / لوگو</label>
                <input type="file"  name="image" id="input-file-now" class="dropify" />
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
              </div>
           </div>
          @include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>



<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
		<div class="box box-block bg-white">
			<center><h3>لیست شرکا / همکاران</h3></center>
 			<div class="overflow-x-auto">
 				<table class="table table-striped table-bordered dataTable" id="table-3">
 					<thead>
 						<tr>
 							<th>شماره</th>
							<td style="width: 50px !important; ">عکس</td>
 							<th>نام</th>
 							<th>فعالیت</th>
 							<th>تلفن</th>
 							<th>ایمیل</th>
 							<th>آدرس</th>
 							<td>ویرایش</td>
 							<td>خذف</td>
 						</tr>
 					</thead>
 					<tbody>
 						@foreach($companies as $company)
 							<tr>
 								<td>{{ $loop->iteration }}</td>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="{{ asset('UploadedImages/companies').'/'.$company->image}}"  style="width: 100% !important; ">
								</td>
 								<td>{{ $company->companyName}}</td>
 								<td>{{ $company->activity}}</td>
 								<td>{{ $company->phone}}</td>
 								<td>{{ $company->email}}</td>
 								<td>{{ $company->address}}</td>
 								<td>
									<a href="{{url('editCompany').'/' .$company->id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
								</td>
								<td>
									<a href="{{url('deleteCompany').'/' .$company->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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
