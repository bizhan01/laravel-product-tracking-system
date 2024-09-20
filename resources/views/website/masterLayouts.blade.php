<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>Groupon.af</title>
    		<link rel="shortcat icon" type="image/x-icon" href="{{ asset('../img/logo/logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../website/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('../website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../website/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('../website/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('../website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../website/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../website/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('../website/css/animate.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="{{ asset('../website/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('../website/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('../website/css/style.css') }}">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap js-site-navbar bg-white">

      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <!-- <h2 class="mb-0 site-logo"><a href="index.html">Job<strong class="font-weight-bold">Finder</strong> </a></h2> -->
                <a href="#"><img class="mb-0 site-logo" src="/website/images/logo.png" alt="" /></a>
              </div>
              <div class="col-10" dir="rtl">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="{{route('welcome')}}">خانه</a></li>
                      <li><a href="{{route('services')}}">خدمات</a></li>
                      <li><a href="{{route('partners')}}">همکاران ما</a></li>
                      <li><a href="{{route('products')}}">محصولات</a></li>
                      <li><a href="{{route('about')}}">درباره ما</a></li>
                      <li><a href="{{route('contactUs')}}">تماس باما</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')


    <footer class="site-footer" dir="rtl" style="text-align: right">
      <div class="container">


        <div class="row">
          @foreach($biographies as $bio)
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 " style="color: orange; border-bottom: 1px solid white; line-height: 50px; ">آدرس ما</h3>
            <p><span class="icon-map" style="color: orange"></span> {{$bio->address}}</p>
            <p><span class="icon-phone" style="color: orange"> تلفن</span><br>{{$bio->phone1}} &nbsp {{$bio->phone2}}</p><br>
          </div>

          <div class="col-md-4">
            <h3 class="footer-heading mb-4 " style="color: orange; border-bottom: 1px solid white; line-height: 50px; ">ایمیل آدرس</h3>
            <p><span class="icon-at" style="color: orange"> ایمیل آدرس</span><br><br>{{$bio->email}}</p><br>
          </div>


          <div class="col-md-4">
            <div class="col-md-12"><h3 class="footer-heading mb-4" style="color: orange; border-bottom: 1px solid white; line-height: 50px; ">مارا در شبکه های اجتماعی دنبال کنید</h3></div>
              <p>
                <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook" style="color: orange"> facebook</span></a>
                <a href="#" class="p-2"><span class="icon-whatsapp" style="color: orange"> WhatsApp</span></a>
                <a href="#" class="p-2"><span class="icon-telegram" style="color: orange"> Telegram</span></a>
              </p>
          </div>
          @endforeach
        </div>
        <div class="row pt-12 mt-12 text-center" style="background-color: orange">
          <div class="col-md-12">
            <p style="color: black; padding-top: 15px">
              Copyrights 2021 By Groupon.af All Rights Reserved
            </p>
          </div>
        </div>

      </div>

    </footer>
  </div>

  <script src="{{ asset('../website/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('../website/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('../website/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('../website/js/popper.min.js') }}"></script>
  <script src="{{ asset('../website/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../website/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('../website/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('../website/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('../website/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('../website/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('../website/js/aos.js') }}"></script>


  <script src="{{ asset('../website/js/mediaelement-and-player.min.js') }}"></script>

  <script src="{{ asset('../website/js/main.js') }}"></script>


  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>
