<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="" class="simple-text">
            Eskişehir Yıkama
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="material-icons">person</i>
                    <p>ADMiN</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.slider.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Slider Oluştur-Sil</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.kurutemizleme.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Kuru Temizleme Listesi</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.utu.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Ütü Hizmet Listesi</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.yikama.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Yıkama Hizmeti</p>
                </a>
            </li>



            <li class="active-pro">
            @auth
                <!-- <div class="box">
                            <a href="" style="color:white">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        </div> -->
                    <div class="box">
                        <a style="color: black" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}">Çıkış Yap</a>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            {{csrf_field()}}
                        </form>
                    </div>
                @endauth
            </li>
        </ul>
    </div>
</div>
