@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Заявка {{ $lead->id }}</h1>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label fw-medium fs-sm">Арктикул</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $lead->name }}">
                    </div>
                </div>
                <div class="mb-3 row d-flex align-items-center">
                    <label for="phone" class="col-sm-2 col-form-label fw-medium fs-sm">Телефон</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="phone" value="{{ $lead->phone }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label fw-medium fs-sm">Описание</label>
                    <div class="col-sm-10">
                        <textarea class="form-control-plaintext" id="description" rows="3"></textarea>
                    </div>
                </div>
                <a href="{{ route('lead.edit', $lead->id) }}" class="btn btn-warning">Редактировать</a>
                <a href="{{ route('lead.index') }}" class="btn btn-secondary">Назад</a>
            </div>
        </div>
    </div>
@endsection