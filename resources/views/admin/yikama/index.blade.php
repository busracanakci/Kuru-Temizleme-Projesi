@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.yikama.create')}}" class="btn btn-success ">Yeni Hizmet Ekle</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yıkama Hizmeti</h4>
                            <p class="category">Yıkama ve Kurutma Hizmetleri</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>Hizmet Adı</th>
                                <th>Hizmet Fiyatı</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['fiyat']}}</td>
                                        <td><a href="{{route('admin.yikama.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                        <td><a href="{{route('admin.yikama.delete',['id'=>$value['id']])}}">Sil</a></td>
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
