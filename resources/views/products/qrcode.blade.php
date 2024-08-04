@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3 my-lg-5">
                <h1 class="fs-4 fw-medium">{{ $qrcode->modeltype->title }}</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Артикул: {{ $qrcode->modeltype->article }}</li>
                    <li class="list-group-item">Версия: {{ $qrcode->modeltype->version }}</li>
                    <li class="list-group-item">Серийный номер: {{ $qrcode->serial_number }}</li>
                  </ul>
            </div>
        </div>
    </div>
@endsection