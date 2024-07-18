@section('title')
Trang chủ
@endsection
@extends('layout.main')

@section('content')

    <div class="container text-center">
        <h1>Trang chủ</h1>
        <p>Chào mừng bạn đến với trang chủ của website của chúng tôi!</p>
    </div>

    <div class="container-fluid ">
        <div class="row m-4">
            @foreach ( $products as $sp )

            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{$sp->thumbnail}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$sp->title}}</h5>
                        <p class="card-text">Price:{{$sp->price}}</p>
                        <p class="card-tittle">Name:{{$sp->name}}</p>
                        <p class="card-text">Machineline:{{$sp->machineline}}</p>
                        <a href="{{route('detail',['id'=>$sp->id ])}}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            
         
        </div>
        
    </div>

@endsection
