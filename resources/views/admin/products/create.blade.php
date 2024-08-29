@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-3 fw-medium">Новый товар</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Изображение</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                        <input type="number" step="1" min="1" class="form-control" placeholder="Сортировка" name="image_sort">
                    </div>
                    @error('image')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Категория</label>
                <div class="col-sm-10">
                    <select class="form-select @error('category') is-invalid @enderror" name="category" id="category">
                        <option selected>Выберите категорию</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
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
                <label for="title" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title">
                    @error('title')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Цена</label>
                <div class="col-sm-10">
                    <input type="number" step="1" min="100" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" id="price" name="price">
                    @error('price')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="form-text text-danger fs-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="characteristics" class="col-sm-2 col-form-label">Характеристики</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="characteristics" name="characteristics" rows="3">{{ old('characteristics') }}</textarea>
                    <div id="characteristicsHelpBlock" class="form-text">
                        Характеристики в формате JSON
                    </div>
                    @error('characteristics')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
            <a href="{{ route('admin.product.index') }}" type="submit" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
