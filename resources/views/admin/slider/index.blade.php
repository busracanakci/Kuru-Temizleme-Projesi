@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.slider.create')}}" class="btn btn-success ">Yeni Slider Ekle</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Slider</h4>
                            <p class="category">Slider Listesi</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>Önizleme</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td><img src="{{asset($value['image'])}}" style="width:120px;height:120px;" alt=""></td>
                                        <td><a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                        <td><a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
