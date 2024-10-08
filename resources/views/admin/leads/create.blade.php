@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Создание новой заявки</h1>
                <form method="POST" action="{{ route('admin.lead.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="form-text text-danger fs-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Телефон</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <div class="form-text text-danger fs-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Описание</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <a href="{{ route('admin.lead.index') }}" class="btn btn-secondary">Назад</a>
                </form>
            </div>
        </div>
    </div>
@endsection