@extends('layout')
@section('title')
    Thông Báo
@endsection
@section('body')
    <div class="container">
        <div class="col-6 m-auto">
            <div class="alert alert-info p-3 h2 text-center">
                {{$thongbao}}
            </div>
        </div>
    </div>
    @endsection
