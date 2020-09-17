<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSH | @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/news.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/intro.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/product_details.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101947048311801"
  logged_in_greeting="Chào bạn, chúng tôi có thể giúp gì được cho  bạn?"
  logged_out_greeting="Chào bạn, chúng tôi có thể giúp gì được cho  bạn?">
      </div>
    <div class="web">
        <div class="wrap__header pt-1 pb-1 sticky__pined">
          <div class="container header__section1">
              <a  href="{{URL::to('/')}}" class="logo__link"><img src="{{ asset('images/logo.jpg') }}" class="logo" alt=""></a>
              <ul class="list__header hidden-on-tablet-mobi">
                  <li><i class="fas fa-user-tie"></i> Chuyên nghiệp</li>
                  <li><i class="fas fa-award"></i> Chất lượng</li>
                  <li><i class="fab fa-black-tie"></i> Tin tưởng</li>
              </ul>
              <form class="form__search" action="">
                  <input placeholder="Nhập từ khóa để tìm kiếm" class="form__input" type="text" name="" id="">
                  <button class="form__submit"><i class="fas fa-search"></i></button>
			        </form>
			  <div class="header-mobile d-flex aligns-items-center">
					<div class="header__search">
						<div class="header__icon-wrap">
							<label for="check-search" class="search-icon-wrap">
								<i class="fas fa-search header__icon header__icon-search"></i>
							</label>
							<input type="checkbox" id="check-search" hidden="" class="check-to-open-search">
							<label for="check-search" class="overlay-search"></label>
							<form class="mobile-input-search-wrap">
								<input type="text" class="mobile-input-search" placeholder="Nhập nội dung tìm kiếm">
							</form>
						</div>
					</div>
					<div class="mobile-bar-icon">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
        </div>

          </div>
          <div class="navbar-mobile">
              <div class="navbar-mobile-wrap">
                <ul class="navbar-mobile-list">
                  <li class="navbar-mobile-item">
                    <a href="{{ URL::to('/') }}" class="navbar-mobile-item__link">
                      Trang chủ
                    </a>
                  </li>
                  <li class="navbar-mobile-item">
                    <a href="javascript:avoid(0)" class="navbar-mobile-item__link">
                      Sản phẩm
                    </a>
                    <ul class="navbar-mobile-submenu">
                      
                      @foreach($all_cate_pro->where('type_cate',0) as $k=>$v)
                        <li>
                          <a href="{{URL::to('product/danh-muc/'.$v->slug_cate)}}" class="mobile-submenu__link">{{$v->name_cate}}</a>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="navbar-mobile-item">
                    <a href="javascript:avoid(0)" class="navbar-mobile-item__link">
                      Các lĩnh vực
                    </a>
                    <ul class="navbar-mobile-submenu">
                      <li>
                        <a href="" class="mobile-submenu__link">Nội thất văn phòng, trường học</a>
                      </li>
                      <li>
                        <a href="" class="mobile-submenu__link">Mặt hàng điện tử, điện lạnh</a>
                      </li>
                      <li>
                        <a href="" class="mobile-submenu__link">Dịch vụ phát triển thị trường</a>
                      </li>
                      <li>
                        <a href="" class="mobile-submenu__link">Phân phối bất động sản</a>
                      </li>
                      <li>
                        <a href="" class="mobile-submenu__link">Phát triển thương hiệu, tư vấn chiến lược</a>
                      </li>
                      <li>
                        <a href="" class="mobile-submenu__link">Giáo dục và đào tạo</a>
                      </li>
                    </ul>
                  </li>
                  <li class="navbar-mobile-item">
                    <a href="{{ URL::to('/news') }}" class="navbar-mobile-item__link">
                      Tin tức
                    </a>
                  </li>
                  <li class="navbar-mobile-item">
                    <a href="{{ URL::to('/contact') }}" class="navbar-mobile-item__link">
                      Tư vấn khách hàng
                    </a>
                  </li>
                  <li class="navbar-mobile-item">
                    <a href="javascript:avoid(0)" class="navbar-mobile-item__link">
                      Về KSH
                    </a>
                    <ul class="navbar-mobile-submenu">
                      <li>
                        <a href="{{ URL::to('introduce') }}" class="mobile-submenu__link">Giới thiệu chung</a>
                      </li>
                      <li>
                        <a href="{{ URL::to('system-company')}}" class="mobile-submenu__link">Hệ thống công ty</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
          </div>
      </div>
        <div class="header">
            <!-- Đưa section 1 ra để dùng sticky :v cơ mà hình như sai r, để tui sửa lại -->
            <div class="wrap__header header__bg">
                <div class="container header__section2">
                    <ul class="list__menu p-0 m-0">
                        <li class="item__menu hidden-on-tablet-mobi">
                          <a href="{{URL::to('/')}}" class="item__menu-link">Trang chủ</a>
                        </li>
                        <li class="item__menu">
                          <a href="{{URL::to('product')}}" class="item__menu-link">
                            Sản phẩm<i class="fas fa-chevron-down" style="margin-left: 4px"></i>
                          </a>
                          <ul class="p-0 product-submenu">
                            @foreach($all_cate_pro->where('type_cate',0) as $k=>$v)
                            <li class="product-menu-wrap">
                              <h3 style="color: red" class="text-left">{{$v->name_cate}}</h3>
                              @foreach($all_cate_pro->where('parent_id',$v->id_cate) as $k1=>$v1)
                                <ul class="product-submenu-item">
                                  <li>
                                    <a href="{{URL::to('product/danh-muc/'.$v1->slug_cate)}}" target="_blank" class="header-major--link-product">{{$v1->name_cate}}</a>
                                  </li>
                                </ul>
                                @endforeach
                            </li>
                            @endforeach
                          </ul>
                        </li>
                        <li class="item__menu">
                            <a href="javascript:avoid(0)" class="item__menu-link">
                                Các lĩnh vực <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="submenu p-0">
                                <li>
                                    <a href="https://www.xuanhoa.vn/" target="_blank" class="header-major__link">Nội thất văn phòng, trường học</a>
                                </li>
                                <li>
                                    <a href="https://www.xuanhoa.vn/" target="_blank" class="header-major__link">Mặt hàng điện tử, điện lạnh</a>
                                </li>
                                <li>
                                    <a href="https://www.xuanhoa.vn/" target="_blank" class="header-major__link">Dịch vụ phát triển thị trường</a>
                                </li>
                                <li>
                                    <a href="https://www.xuanhoa.vn/" target="_blank" class="header-major__link">Phân phối bất động sản</a>
                                </li>
                                <li>
                                    <a href="https://www.xuanhoa.vn/" target="_blank" class="header-major__link">Phát triển thương hiệu, tư vấn chiến lược</a>
                                </li>
                                <li>
                                    <a href="https://www.xuanhoa.vn/" target="_blank" class="header-major__link">Giáo dục và đào tạo</a>
                                </li>
                            </ul>
                        </li>
                        <li class="item__menu">
                            <a href="{{URL::to('/news')}}" class="item__menu-link">Tin tức</a>
                        </li>
                        <li class="item__menu hidden-on-tablet-mobi">
                            <a href="{{ URL::to('contact') }}" class="item__menu-link">Tư vấn khách hàng</a>
                        </li>
                        <li class="item__menu hidden-on-tablet-mobi">
                            <a href="javascript:avoid(0)" class="item__menu-link">Về KSH <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu p-0" style="width: 100%;">
                                <li>
                                    <a href="{{ URL::to('introduce') }}" class="header-major__link">Giới thiệu chung</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('system-company') }}" class="header-major__link">Hệ thống công ty</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">KSH Company</h6>
        <p>Công ty TNHH Tư vấn & Đầu tư KSH.</p>
        <p>KSH consulting and invesment Company Limited.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Sản phẩm</h6>
        <p>
          <a href="https://www.xuanhoa.vn/" class="footer-item" target="_blank">Nội thất</a>
        </p>
        <p>
          <a href="#!" class="footer-item">Kinh doanh</a>
        </p>
        <p>
          <a href="#!" class="footer-item">Giáo dục</a>
        </p>
        <p>
          <a href="#!" class="footer-item">Bất động sản</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Liên kết</h6>
        <p>
          <a href="#!" class="footer-item">Tài khoản</a>
        </p>
        <p>
          <a href="#!" class="footer-item">Trở thành đối tác</a>
        </p>
        <p>
          <a href="#!" class="footer-item">Take me</a>
        </p>
        <p>
          <a href="#!" class="footer-item">Trợ giúp</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 col-sm mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Liên hệ</h6>
        <p>
          <i class="fas fa-home mr-1 icon__home"></i> Số 5 Xô Viết Nghệ Tĩnh, Hoà Cường Nam, Hải Châu, Đà Nẵng</p>
        <p>
          <i class="fas fa-envelope mr-1 icon__mail"></i> ksh@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-1 icon__phone"></i> Tel + 0236.3680666</p>
        <p>
          <i class="fas fa-print mr-1 icon__fax"></i> Fax + 0236.3680799</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">
            <strong>ksh.vn</strong>
          </a> | Design by N2P
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">
        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/C%C3%B4ng-ty-TNHH-T%C6%B0-v%E1%BA%A5n-%C4%90%E1%BA%A7u-t%C6%B0-KSH-101947048311801" class="btn-floating btn-sm rgba-white-slight mx-1" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
<div style="" class="wrapper">
  <div class="ring">
      <a href="tel:+84367663090">
          <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
          <div class="coccoc-alo-ph-circle"></div>
          <div class="coccoc-alo-ph-circle-fill"></div>
          <div class="coccoc-alo-ph-img-circle"></div>
      </div>
      </a>
  </div>
</div>
<!-- top page -->

<a href="javascript:void(0)"><div class="page"><i class="fas fa-chevron-up"></i></div></a>
        </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="{{asset('frontend/js/js.js')}}">
</script>
<script>
   AOS.init({
    easing: 'ease-out-back',
    duration: 2000,
    delay: 0,
    once: true,
    disable: 'mobile'
 });
   
  </script>
</html>