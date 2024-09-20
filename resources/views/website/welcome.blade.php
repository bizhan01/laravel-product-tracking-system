@extends('website.masterLayouts')
@section('content')
<div style="height: 113px;"></div>

    <div style="margin-top: 20px">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-1"></div>
          <div class="col-10" data-aos="fade">
              <div class="ftco-search" dir="rtl">
                <div class="row">
                  <center>
                  <div class="col-md-12 nav-link-wrap" >
                    <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-bottom: 50px">
                      <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">وضیعت سفارش کالا</a>
                      &nbsp &nbsp &nbsp
                      <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">چک اصالت کالا</a>
                      &nbsp &nbsp &nbsp
                      <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">جستجوی دارو</a>
                    </div>
                  </div>
                </center>
                  <div class="col-md-12 tab-wrap">

                    <div class="tab-content p-4" id="v-pills-tabContent" style="height: 400px; border: 2px solid  #62b246;">

                      <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab" >
                        <form method="POST" action="{{ route('searchOrder') }}" class="search-job">
                          {{ csrf_field() }}
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="form-group">
                                  <br><br>
                                <div class="form-field">
                                  <center><h5 style="color: #62b246"><b>لطفا کد سفارش کالای خویش را در زیر وارد کنید.</b></h5><center> <br></br>
                                  <input type="text" name="q" class="form-control" placeholder="XXXXXXXXXXXXX کد سفارش کالای خود را وارد کنید." style="height: 50px; border: 2px solid #62b246;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <br></br>
                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-field">
                                  <button type="submit" name="submit" class="btn  btn-block waves-effect waves-light" style="height: 50px; background-color: #62b246">
                                      جستجوی وضعیت سفارش کالا
                                      &nbsp &nbsp<i class="icon-search float-xs-right"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                      <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                        <form method="POST" action="{{ route('searchProduct') }}" class="search-job">
                            {{ csrf_field() }}
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="form-group">
                                  <br><br>
                                <div class="form-field">
                                  <center><h5 style="color: #ff9933"><b>لطفا کد محصول را در زیر وارد نماید تا از اصالت محصول اطمینان حاصل کنید.</b></h5><center><br>
                                  <input type="text" name="q" class="form-control" placeholder="XXXXXXXXXXXXX" style="height: 50px; border: 2px solid #ff9933;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <br></br>
                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-field">
                                  <button type="submit" name="submit" class="btn  btn-block waves-effect waves-light" style="height: 50px; background-color: #ff9933">
                                      جستجوی اصالت کالا
                                      &nbsp &nbsp<i class="icon-search float-xs-right"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                      <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                        <form method="POST" action="{{ route('searchDrug') }}" class="search-job">
                            {{ csrf_field() }}
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="form-group">
                                <div class="form-field">
                                  <br><br>
                                  <center><h5 style="color: orange"><b>جهت تایید اصالت دارو لطفا کد و یا شماره آن در ذیل وارد نمایید</b></h5><center><br>
                                  <input type="text" name="q" class="form-control" placeholder="XXXXXXXXXXXXX" style="height: 50px; border: 2px solid orange;">
                                </div>
                              </div>
                            </div>
                          </div>
                          <br></br>
                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-field">
                                  <button type="submit" name="submit" class="btn  btn-block waves-effect waves-light" style="height: 50px; background-color: orange">
                                      جستجوی اصالت دارو
                                      &nbsp &nbsp<i class="icon-search float-xs-right"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>




                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  <br></br>
@endsection
