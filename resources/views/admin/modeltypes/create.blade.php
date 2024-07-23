@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="fs-3 fw-medium">Новая модель</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('modeltype.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                </div>
                @error('title')
                    <div class="form-text text-danger fs-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="article" class="col-sm-2 col-form-label">Артикул</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('article') is-invalid @enderror" id="article" name="article">
                </div>
                @error('article')
                    <div class="form-text text-danger fs-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="version" class="col-sm-2 col-form-label">Версия</label>
                <div class="col-sm-10">
                    <input type="number" min="0" step="1" class="form-control @error('version') is-invalid @enderror" id="version" name="version">
                </div>
                @error('version')
                    <div class="form-text text-danger fs-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
            <a href="{{ route('modeltype.index') }}" type="submit" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
