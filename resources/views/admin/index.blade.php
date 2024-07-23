@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3 my-lg-5">
                <h1 class="fs-4 fw-medium">Администрирование</h1>
                <a href="{{ route('modeltype.create') }}" class="btn btn-primary">Создать модель</a>
                <a href="{{ route('manufacture.create') }}" class="btn btn-primary">Создать товары</a>
            </div>
        </div>
    </div>
@endsection