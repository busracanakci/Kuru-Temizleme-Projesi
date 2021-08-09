<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Eskişehir Yıkama | Kuru Temizleme</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>

<!-- Topbar Start -->
<div class="container-fluid bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="drop">
                <!--  @auth
                        <div class="box">
                            <a href="" style="color:white">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        </div>
                        <div class="box">
                            <a style="color: white" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}">Çıkış Yap</a>
                            <form action="{{route('logout')}}" method="POST" id="logout-form">
                                {{csrf_field()}}
                            </form>
                        </div>
                    @endauth-->


                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="m-0 text-secondary"><span class="text-primary">Eskişehir</span>Yıkama</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Anasayfa</a>
                    <a href="about.html" class="nav-item nav-link">Hakkımızda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hizmetlerimiz</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="" class="dropdown-item">Yıkama Hizmeti</a>
                            <a href="" class="dropdown-item">Kurutma Hizmeti</a>
                            <a href="" class="dropdown-item">Ütüleme Hizmeti</a>
                            <a href="" class="dropdown-item">Ücretsiz Servis</a>
                            <a href="" class="dropdown-item">Kuru Temizleme</a>
                        </div>
                    </div>
                    <!--  <a href="service.html" class="nav-item nav-link">Hizmetlerimiz</a> -->
                    <a href="pricing.html" class="nav-item nav-link">Fiyatlandırma</a>
                    <!--  <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                          <div class="dropdown-menu border-0 rounded-0 m-0">
                              <a href="blog.html" class="dropdown-item">Blog Grid</a>
                              <a href="single.html" class="dropdown-item">Blog Detail</a>
                          </div>
                      </div> -->
                    <a href="contact.html" class="nav-item nav-link">İletişim</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

@yield('content')
<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href=""><h1 class="text-secondary mb-3"><span class="text-white">Eskişehir</span><br>Yıkama</h1></a>
            <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sit no, sed kasd et ipsum dolor duo dolor</p>
            <div class="d-flex justify-content-start mt-4">

                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">İletişim</h4>

            <p><i class="fa fa-map-marker-alt mr-2"></i>Büyükdere Mahallesi, Gençlik Bulvarı, Kezbandere Sokak, No:9/A, Odunpazarı</p>
            <p><i class="fa fa-phone-alt mr-2"></i>0222 222 22 22</p>
            <p><i class="fa fa-envelope mr-2"></i>info@eskisehiryikama.com</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Hızlı Menü</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Anasayfa</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hakkımızda</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hizmetlerimiz</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Fiyat Listesi</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>İletişim</a>
                @guest
                    <div class="box">
                        <i class="fa fa-angle-right mr-2"></i> <a href="{{route('login')}}" style="color:white">Giriş Yap</a>
                    </div>

                @endguest
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Çalışma Saatleri</h4>
            <p>Hafta İçi - Cumartesi<br>07:00 - 19:00</p>
            <p>Pazar <br>12:00 - 17:00</p>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-white">
        &copy; <a class="text-white font-weight-medium" href="#">Eskişehir Kirli Yıkama</a>. 2021

    </p>
</div>
<!-- Footer End -->

</body>
</html>
