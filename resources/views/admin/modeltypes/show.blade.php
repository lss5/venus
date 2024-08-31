@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Модель товара</h1>
                <div class="mb-3 row d-flex align-items-center">
                    <label for="title" class="col-sm-2 col-form-label fw-medium fs-sm">Название</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="title" value="{{ $modeltype->title }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="article" class="col-sm-2 col-form-label fw-medium fs-sm">Арктикул</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="article" value="{{ $modeltype->article }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="version" class="col-sm-2 col-form-label fw-medium fs-sm">Версия</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="version" value="{{ $modeltype->version }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label fw-medium fs-sm">Описание</label>
                    <div class="col-sm-10">
                        <textarea class="form-control-plaintext" id="description" rows="3">{{ $modeltype->description }}</textarea>
                    </div>
                </div>
                <a href="{{ route('admin.qrcode.create') }}" class="btn btn-primary">Создать QR-коды</a>
                <a href="{{ route('admin.modeltype.edit', $modeltype->id) }}" class="btn btn-warning">Редактировать</a>
                <a href="{{ route('admin.modeltype.index') }}" class="btn btn-secondary">Назад</a>
            </div>
        </div>
    </div>
@endsection