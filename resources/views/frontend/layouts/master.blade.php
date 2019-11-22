<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="{{url('frontend/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{url('frontend/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('frontend/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/asset/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/asset/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/asset/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('frontend/asset/css/responsive.css')}}">
    @yield('style')
    <title>Sell-quicker @yield('front-page-title')</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 shadow-sm brand-color-bg">
        <div class="container px-8">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('frontend/logo_net.png')}}" alt="" style="height: 30px;transform: scale(1.9);">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: #fff;">
          <i class="fas fa-indent" style="color: #19aaf8;font-size: 21px;padding: 3px;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-center">
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('ads')}}">All Ads</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="bn">Bangla</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-warning" href="{{url('banner/post')}}">Post Your Banner</a>
              </li>
            </ul>
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="{{url('chat')}}"><i class="far fa-comments"></i> Chat</a>
              </li>
              @if(Auth::user())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  My Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('profile')}}">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
                </div>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}"> <i class="far fa-user"></i> Login / Register</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link btn btn-warning" href="{{url('post-ads')}}">POST YOUR AD</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('frontend-content')
    <section class="post pt-5 pb-5">
        <div class="container px-8">
          <div class="text-center">
            <p class="display-4">Do you have something to sell?</p>
            <p  class="post-subtitle">Post your ad on sellquiceker.om</p>
            <a href="{{url('post-ads')}}" class="butn btn-info">Post Now !!</a>
          </div>
        </div>
      </section>
    <section class="post-for-mobile mt-5 mb-5">
      <div class="container px-8">
        <div class="text-center">
          <p class="h6">Do you have something to sell?</p>
          <p>Post your ad on sellquiceker.om</p>
          <br><br>
          <a href="{{url('post-ads')}}" class="butn">Post Now !!</a>
        </div>
      </div>
    </section>
    <section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <h5>Learn More</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="{{url('sellfast')}}"><i class="fa fa-angle-double-right"></i>How to sell fast</a></li>
                <li><a href="{{url('membership')}}"><i class="fa fa-angle-double-right"></i>Membarship</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Banar Advertising</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Promote Your Add</a></li>

              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <h5>About us</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="{{url('/aboutus')}}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                <li><a href="{{url('/condition')}}"><i class="fa fa-angle-double-right"></i>Terms & Conditions</a></li>
                <li><a href="{{url('/privacy')}}"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                <li><a href="{{url('/sitemap')}}"><i class="fa fa-angle-double-right"></i>Sitemap</a></li>
                <li><a href="{{url('/contact')}}"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <h5>Social</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Facbook</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Twitter</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Instragram</a></li>
                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Linkedin</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
              <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
            </hr>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
              <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.devcitybd.com" target="_blank">Dev City Bangladesh</a></p>
            </div>
            </hr>
          </div>
        </div>
      </section>
    <div class="mobile-footer">
      <div class="media text-center">
        <div class="media-body">
          <h5 class="mt-0"> <a href=""><i class="fab fa-facebook-square ml-1"></i> Like as on Facebook </a></h5>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('frontend/asset/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('frontend/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/asset/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/asset/js/owl.carousel.min.js')}}"></script>

    <script src="{{url('frontend/asset/js/main.js')}}"></script>
    <script>
      
    $(document).ready(function() {
        $('select[name=category_id]').change(function() {

            var url = '{{ url('category') }}' + '/' + $(this).val() + '/sub_category/';

            $.get(url, function(data) {
                var select = $('form select[name= sub_category_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.category_name + '</option>');
                });
            });
        });
    });

     $(document).ready(function() {
        $('select[name=devesion_id]').change(function() {

            var url = '{{ url('devesion') }}' + '/' + $(this).val() + '/city/';

            $.get(url, function(data) {
                var select = $('form select[name= city_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });

     $(document).ready(function(){
      $('#category').change(function(){
        var category = $(this).val();
        $.ajax({
            url:"{{ url('/getBrand/') }}"+ "/" + category,
            method:"get",
            data:{category:category},
             success:function(result)
            {
             $('#brand').html(result);
            }

        });
      })
     })

     $(document).ready(function(){
      $('#brand').change(function(){
        var brand = $(this).val();
        $.ajax({
            url:"{{ url('/getModel/') }}"+ "/" + brand,
            method:"get",
            data:{brand:brand},
             success:function(result)
            {
             $('#model').html(result);
            }

        });
      })
     })
    </script>
    @yield('scripts')

  </body>
</html>
