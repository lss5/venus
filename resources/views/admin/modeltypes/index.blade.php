@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Модели товаров</h1>
                <a href="{{ route('admin.modeltype.create') }}" class="btn btn-primary mt-3">Создать модель</a>
                <div class="list-group list-group-flush">
                    @foreach ($modeltypes as $modeltype)
                        <a href="{{ route('admin.modeltype.show', $modeltype->id) }}" class="list-group-item list-group-item-action d-flex flex-row justify-content-between align-items-center flex-wrap">
                            <span class="fw-medium">{{ $modeltype->title }}</span>
                            <span class="fw-light">{{ $modeltype->article }}</span>
                            <span class="fw-light">Версия: {{ $modeltype->version }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection