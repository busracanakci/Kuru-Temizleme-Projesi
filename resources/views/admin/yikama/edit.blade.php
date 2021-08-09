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
                            <h4 class="title">Ütü Hizmeti Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route('admin.yikama.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <input type="text" value="{{$data[0]['name']}}" name="name" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">

                                            <input type="text" value="{{$data[0]['fiyat']}}" name="fiyat" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection