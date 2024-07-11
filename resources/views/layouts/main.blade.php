<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Concert-ticket</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/slicknav.css">

  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  @include('partials.navbar')

  @yield('container')
  <div class="map_area">
    <div id="map" style="height: 600px; position: relative; overflow: hidden;">

    </div>
    <script>
      function initMap() {
        var uluru = {
          lat: -25.363,
          lng: 131.044
        };
        var grayStyles = [{
          featureType: "all",
          stylers: [{
            saturation: -90
          },
          {
            lightness: 50
          }
          ]
        },
        {
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#ccdee9'
          }]
        }
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {
            lat: -31.197,
            lng: 150.744
          },
          zoom: 9,
          styles: grayStyles,
          scrollwheel: false
        });
      }
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
      </script>
    <div class="location_information black_bg wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
      <h3>Concert 2020</h3>
      <div class="info_wrap">
        <div class="single_info">
          <span>Vanue:</span>
          <p>26/A, Coontum Avenu
            New York-2783</p>
        </div>
        <div class="single_info">
          <span>Phone:</span>
          <p>+10 (88) 267 368 283</p>
        </div>
        <div class="single_info">
          <span>Email:</span>
          <p>contact@concert20.com</p>
        </div>
      </div>
    </div>
  </div>
  <!-- map_area_end  -->

  <!-- brand_area_start  -->
  <div class="brand_area black_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section_title text-center mb-80">
            <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Sponsor Logos</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="brand_wrap">
            <div class="brand_active owl-carousel">
              <div class="single_brand text-center">
                <img src="img/brand/1.png" alt="">
              </div>
              <div class="single_brand text-center">
                <img src="img/brand/2.png" alt="">
              </div>
              <div class="single_brand text-center">
                <img src="img/brand/3.png" alt="">
              </div>
              <div class="single_brand text-center">
                <img src="img/brand/4.png" alt="">
              </div>
              <div class="single_brand text-center">
                <img src="img/brand/5.png" alt="">
              </div>
              <div class="single_brand text-center">
                <img src="img/brand/1.png" alt="">
              </div>
              <div class="single_brand text-center">
                <img src="img/brand/2.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- brand_area_end  -->
  <!-- footer_start  -->
  <footer class="footer">
    <div class="footer_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="footer_widget">
              <div class="address_details text-center">
                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">12 Feb, 2020</h4>
                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Green Avenue, New York
                </h3>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">The event regularly
                  attracts a diverse range of attendees from around the world.</p>
                <a href="#" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Buy
                  Tickets</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right_text">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <p class="copy_right text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
              is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer_end  -->

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/gijgo.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/tilt.jquery.js"></script>
  <script src="js/plugins.js"></script>



  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>


  <script src="js/main.js"></script>
</body>

</html>