@extends('layouts.app')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">Giriş Yap</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2>GİRİŞ YAP</h2>
            </div>

            <div class="account-main">
                <div class="col-md">
                    <h3>Yönetim Paneli</h3>
                    <div class="account-bottom">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           <p> E-Mail <input placeholder="Email" name="email" value="{{ old('email') }}" type="text" tabindex="3" required></p>
                        @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                           <p>Parola <input placeholder="Password" name="password"  type="password" tabindex="4" required></p>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="address">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>



    </div>


@endsection


