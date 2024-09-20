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
				<center><h3>ثبت خدمات</h3></center>
        <form method="POST" action="{{route('addService')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-12">
                <label  style="color: black">اسم خدمات <span style="color: red">*</span></label>
                <input type="text" name="title" value=""  class="form-control"  placeholder="اسم خدمات" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <label  style="color: black">توضیحات</label><br>
                <textarea name="description" rows="10" class="col-md-12" placeholder="توضیحات مربوطه را اینجا بنویسید..."></textarea>
              </div>
              <div class="col-md-6">
                <label  style="color: black">تصویر</label>
                <input type="file"  name="photo" id="input-file-now" class="dropify" />
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
   <div class="col-lg-12 box box-block bg-white">
     <center><h3>نمایش خدمات</h3></center>

     <div class="row mb-0 mb-md-1">
      @foreach($services as $service)
       <div class="col-md-12">
         <div class="box bg-white post post-2">
           <div class="p-img img-cover" style="background-image: url(/UploadedImages/services/{{$service->photo}});"></div>
           <div class="p-content">
             <h5 class="text-truncate"><a class="text-black" href="#">{{$service->title}}</a></h5>
             <div class="p-text"><p class="mb-0-5">{{$service->description}} <a class="text-primary" href="#"></a></p></div>
             <div class="p-info">
               <a class="text-success" href="editService/{{ $service->id }}"><i class="fa fa-edit"></i><br>ویرایش</a>
               <a class="text-danger" href="deleteService/{{ $service->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash"></i><br>حذف</a>
             </div>
           </div>
         </div>
       </div>
       @endforeach
     </div>
    </div>
  </div>
</div>
@endsection
