@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-3 fw-medium">Новая категория</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.category.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title">
                </div>
                @error('title')
                    <div class="form-text text-danger fs-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
            <a href="{{ route('admin.category.index') }}" type="submit" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
