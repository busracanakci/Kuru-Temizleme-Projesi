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
                            <h4 class="title">Slider Düzenle</h4>

                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route('admin.slider.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            @if($data[0]['image']!="")
                                                <img src="{{asset($data[0]['image'])}}" style="..." alt="">
                                            @endif
                                            <input style="..." type="file" name="image">
                                            <span class="material-input"></span>


                                        </div>
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary pull-right">Slider Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
