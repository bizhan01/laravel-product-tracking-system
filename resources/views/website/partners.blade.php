@extends('website.masterLayouts')
@section('content')
<br>
<div class="site-section block-15">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2>همکاران / شرکای ما</h2>
      </div>
    </div>

    <!-- Content -->
    <div class="content-area py-1" dir="rtl" style="text-align: center">
      <div class="container-fluid">
    		<div class="box box-block bg-white">
     			<div class="overflow-x-auto table-responsive">
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
     							</tr>
     						@endforeach
     					</tbody>
     				</table>
     			</div>
     		</div>
      </div>
    </div>


    <div class="row">

    </div>
  </div>
</div>

@endsection
