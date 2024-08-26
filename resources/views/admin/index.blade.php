@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3 my-lg-5">
                <h1 class="fs-4 fw-medium">Администрирование</h1>
                <a href="{{ route('modeltype.index') }}" class="btn btn-primary">Модели</a>
                <a href="{{ route('qrcode.index') }}" class="btn btn-primary">QR-коды</a>
            </div>
        </div>
    </div>
@endsection