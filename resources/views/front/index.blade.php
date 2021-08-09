@extends('layouts.app')
@section('content')



    <!-- Carousel Start -->

    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <ul>
                        @foreach(\App\Models\Slider::all() as $key => $value)
                      <li>
                    <img class="w-100 d-block"  src="{{asset(App\Helper\mHelper::largeImage($value['image']))}}" >
                      </li>
                        @endforeach
                    </ul>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">ÇAMAŞIR YIKAMA, KURUTMA, KURU TEMİZLEME VE ÜTÜ HİZMETLERİ</h4>
                            <h1 class="display-3 text-white mb-md-4">Sizin İçin En İyi Hizmet Kalitesi</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
    </div>


    <!-- Carousel End -->




    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 200px;">
                    <div class="d-inline-flex">
                        <img itemprop="image" style="" src="{{asset('img/washer.png')}}" weight="55" height="55" alt="">
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Yıkama Hizmeti</h5>
                            <p class="m-0 text-white">Çamaşırlarınız son teknoloji makinelerde, özel üretim deterjanlar kullanılarak yıkanır.Yıkamadan sonra çamaşırlarınızın yumuşak, hijyenik ve uzun ömürlü olması hedeflenmiştir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 200px;">
                    <div class="d-inline-flex text-left">
                        <img itemprop="image" style="" src="{{asset('img/tshirt.png')}}" weight="55" height="55" alt="">
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Kuru Temizleme</h5>
                            <p class="m-0 text-white">Kuru temizleme, ıslak temizlemeyle zarar gören kumaş dokularını yıpratmayarak uzun ömürlü olmalarını sağlamaktır. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 200px;">
                    <div class="d-inline-flex text-left">
                        <img itemprop="image" style="" src="{{asset('img/ironing.png')}}" weight="55" height="55" alt="">
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Ütü Hzimeti</h5>
                            <p class="m-0 text-white">Profesyonel ütü makinelerimiz ve deneyimli elemanlarımız sayesinde hızlı ve kusursuz ütü hizmeti veriyoruz. Ütü işinizi bize bırakın zamanınız sizin olsun.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">BİZ KİMİZ ?</h6>
                    <h1 class="mb-4">Eskişehir Kirli Yıkama Hakkında Her Şey</h1>
                    <h5 class="font-weight-medium font-italic mb-4"></h5>
                    <p class="mb-2">İşletmemiz, otel, restaurant, güzellik salonu, spor merkezi, çalışan bayanlara, bekarlara ve öğrencilere yardımcı olmak ve işlerini kolaylaştırmak amacıyla başlattığı ev tipi yıkama ve ütü faaliyetlerine titiz ve uygun fiyatlarla kaliteli hizmet vermektedir. Temiz, güvenilir hijyenik ortamda çamaşır yıkama, kurutma ve ütü servisi yapılmaktadır. Çamaşırlarınızı yıkarken ve ya ütülerken yıpranmaması için özen gösterir. Ütünün daha kalıcı olması için yüksek basınçlı buhar ve vakumlu soğutma sistemi kullanılmaktadır. Çamaşır yıkarken en kaliteli ilaçlar ve yumuşatıcılar kullanılmaktadır.</p>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Kaliteli Çamaşırhane Hizmeti</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Hızlı Teslimat</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Profesyonel Ekip</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Yüksek Memnuniyet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3"></h6>
            <h1 class="display-4 text-center mb-5">Hizmetlerimiz</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Kurutma Hizmeti</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-3x fa-soap text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Yıkama Hizmeti</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-burn text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Kuru Temizleme</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-tshirt text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Ütüleme Hizmeti</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">

                    <h2 class="mb-4">Neden Eskişehir Kirli Yıkama ?</h2>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">5</h1>
                            <h5 class="font-weight-bold">Yılık Deneyim</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">50</h1>

                            <h5 class="font-weight-bold">Profesyonel Personel</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">900</h1>
                            <h5 class="font-weight-bold">Müşteri Memnuniyeti</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">9550</h1>
                            <h5 class="font-weight-bold">Dry Cleaning</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                        <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                        <h1 class="display-1 text-white mb-3">5+</h1>
                        <h1 class="text-white m-0">Yıllık Deneyim</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Working Process Start -->
    <div class="container-fluid pt-5">
        <div class="container">

            <h1 class="display-4 text-center mb-5">NE , NASIL YIKANIR ?</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">1</h2>
                        </div>
                        <h6 class="font-weight-bold m-0 mt-2">Renge ve Türe Göre Sınıflandırma</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">2</h2>
                        </div>
                        <h6 class="font-weight-bold m-0 mt-2">Beyazlar ve Renkliler için Ayrı Deterjanlar</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">3</h2>
                        </div>
                        <h6 class="font-weight-bold m-0 mt-2">İç Çamaşırı ve Normal Kıyafetler için Ayrı Kirli Sepeti</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">4</h2>
                        </div>
                        <h6 class="font-weight-bold m-0 mt-2">Doğru Yıkama Programı</h6>
                    </div>
                </div>
                <p class="mb-2">Çamaşır yıkarken dikkat edilmesi gereken bazı püf noktalar bulunmaktadır. Bunlara dikkat edilmediği taktirde çamaşırlarımızın kısa sürede yıpranmasına, renginin solmasına veya küçülmesine / sünmesine neden olabiliriz. Bu nedenle çamaşırlarımızı, rengine ve türüne göre sınıflandırarak yıkamak, kullanacağımız deterjanın özelliklerinden çamaşır makinesinin program seçimine kadar birçok özelliği göz önünde bulundurmamız gerekir.
                    Kıyafetlerimizi kullanırken olduğu kadar, yıkayıp muhafaza ederken de oldukça dikkatli davranmamız gerekmektedir. Aksi hâlde yukarıda da bahsettiğimiz gibi giysiler çok kısa bir süre içinde tekrar giyilmeyecek kadar yıpranabilirler. Bu nedenle çamaşır yıkarken dikkat etmemiz gereken belli başlı noktalar aşağıda maddeler hâlinde sıralanmıştır.<br>
                    <br>   • Beyaz ve renkli kıyafetlerinizi ayrı ayrı makineye atmanız gerekir.<br> •Kullanacağınız deterjan da beyazlar için ayrı, renkliler için ayrı olmalıdır. Bu beyazlarınızın daha parlak bir beyaz olmasını sağlayacak, renklilerinizin de renk atmasına neden olmayacaktır. Hatta eğer kirlileriniz çoksa, renklileri de iki kısma ayırabilirsiniz. Bunların içinden siyah, koyu mavi gibi mat tonlarda ve renk verme ihtimali yüksek olan kıyafetleri ayrı; pembe, sarı vb. gibi daha açık renklerde olup, renk verme ihtimali düşük olan kıyafetlerinizi ayrı olarak yıkayabilirsiniz.
                    <br>•Kirli sepetiniz mümkünse iç çamaşırlarınız ve normal kıyafetleriniz için ayrı olmalıdır. Çünkü kıyafetlerinizdeki lekeler, siz farkında olmasanız da birbirine geçebilmektedir.
                    <br>•Eğer çok sayıda kirli giysiniz var ve bunları ayrı ayrı yıkamanız gerekiyorsa, kesinlikle renklerine ve kumaş türlerine göre sınıflandırma yapın. Bu yünlü ve ipek kıyafetler, beyaz ve lekeli kıyafetler, kot pantolonlar şeklinde olmalıdır.</p>
            </div>
        </div>
    </div>
    <!-- Working Process End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">

            <h2 class="display-4 text-center mb-5">Fiyatlandırma</h2>

            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Kuru<br> Temizleme</h3>


                        </div>

                        <div class="d-flex flex-column align-items-center py-3">

                            @foreach(\App\Kurutemizleme::all()->chunk(1) as $chunk)
                            @foreach($chunk as $key => $value)
                            <p>{{$value['name']}} {{$value['fiyat']}} ₺</p>
                            @endforeach
                            @endforeach
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-primary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Yıkama <br>ve<br> Kurutma</h3>

                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            @foreach(\App\Yikama::all()->chunk(1) as $chunk)
                                @foreach($chunk as $key => $value)
                            <p>{{$value['name']}} {{$value['fiyat']}} ₺</p>
                                @endforeach
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Ütü<br> Hizmeti</h3>

                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            @foreach(\App\Utu::all()->chunk(1) as $chunk)
                                @foreach($chunk as $key => $value)
                                    <p>{{$value['name']}} {{$value['fiyat']}} ₺</p>
                                @endforeach
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!--
    <div class="container-fluid py-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3"></h6>
            <h1 class="display-4 text-center mb-5">Müşterilerimiz Ne Diyor ?</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/man.png" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Hakan</h5>

                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/woman.png" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Eda</h5>

                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/woman.png" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Tuğçe</h5>

                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/man.png" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Berkay</h5>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/man.png" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Barış</h5>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/woman.png" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Sevim</h5>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->





@endsection
