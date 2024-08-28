@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium my-2">Категории</h1>
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary my-3">Создать</a>
                <div class="list-group list-group-flush">
                    @foreach ($categories as $category)
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="list-group-item list-group-item-action d-flex flex-row justify-content-between align-items-center flex-wrap">
                            <span class="fw-medium">{{ $category->title }}</span>
                            <span class="fw-light">{{ $category->description }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection