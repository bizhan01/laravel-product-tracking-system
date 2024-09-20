@extends('website.masterLayouts')
@section('content')
<div class="site-section" data-aos="fade">
  <div class="container">
    <div class="row align-items-center">
      @foreach($biographies as $bio)
      <div class="col-md-6 mb-5 mb-md-0">
          <div class="img-border">
            <a href="https://vimeo.com/28959265" class="">
              <img src="/UploadedImages/about/{{$bio->image}}" alt="Image" class="img-fluid rounded">
            </a>
          </div>
      </div>
      <div class="col-md-5 ml-auto" style="text-align: right">
        <div class="text-right mb-5 section-heading">
          <h2>درباره ما</h2>
        </div>

        <p class="mb-4 h5 font-italic lineheight1-5">{{$bio->description}}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
