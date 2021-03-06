@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                        </div>
                    @endif




                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Kuru Temizleme Hizmeti Ekle</h4>
                            <p class="category">Hizmet Oluşturun</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route('admin.utu.create.post')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Hizmet Adı</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Hizmet Fiyatı</label>
                                            <input type="text" name="fiyat" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
