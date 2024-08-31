@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Редактирование модели товара</h1>
                <form method="POST" action="{{ route('admin.modeltype.update', $modeltype->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Название</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $modeltype->title }}">
                        </div>
                        @error('title')
                            <div class="form-text text-danger fs-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="article" class="col-sm-2 col-form-label">Артикул</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('article') is-invalid @enderror" id="article" name="article" value="{{ old('article') ?? $modeltype->article }}">
                        </div>
                        @error('article')
                            <div class="form-text text-danger fs-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="version" class="col-sm-2 col-form-label">Версия</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="1" class="form-control @error('version') is-invalid @enderror" id="version" name="version" value="{{ old('version') ?? $modeltype->version }}">
                        </div>
                        @error('version')
                            <div class="form-text text-danger fs-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Описание</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ?? $modeltype->description }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <a href="{{ route('admin.modeltype.index') }}" class="btn btn-secondary">Назад</a>
                    <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                        Удалить</button>
                </form>
                <form action="{{ route('admin.modeltype.destroy', $modeltype->id) }}" method="POST" id="delete-form" class="form-inline">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection