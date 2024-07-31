@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="fs-3 fw-medium">Создание партии</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('manufacture.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="model" class="col-sm-2 col-form-label">Модель</label>
                <div class="col-sm-10">
                    <select class="form-select @error('model') is-invalid @enderror" name="model" id="model">
                        <option selected>Выберите модель</option>
                        @foreach ($models as $model)
                            <option value="{{ $model->id }}" @if(old('model') == $model->id) selected @endif>{{ $model->title.' ('.$model->article.' v.'.$model->version.')' }}</option>
                        @endforeach
                    </select>
                    @error('model')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="serial_number" class="col-sm-2 col-form-label">Серийный номер</label>
                <div class="col-sm-10">
                    <input type="number" min="0" step="1" value="{{ old('serial_number') }}" class="form-control @error('serial_number') is-invalid @enderror" id="serial_number" name="serial_number">
                    <div class="form-text text-muted fs-sm">Начальный серийный номер</div>
                    @error('serial_number')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="count" class="col-sm-2 col-form-label">Количество</label>
                <div class="col-sm-10">
                    <input type="number" min="0" step="1" value="{{ old('count') }}" class="form-control @error('count') is-invalid @enderror" id="count" name="count">
                    @error('count')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ?? ''}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
            <a href="{{ route('manufacture.index') }}" type="submit" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
