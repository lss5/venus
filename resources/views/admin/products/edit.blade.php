@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Редактирование товара {{ $product->id }}</h1>
                <div class="row">
                    @foreach ($product->images as $image)
                        <div class="col-sm-12 col-lg-4 my-3">
                            <img src="{{ asset('storage/'.$image->link) }}" class="img-thumbnail" alt="{{ $product->title }}">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <span class="fs-sm text-muted">Сортировка: {{ $image->sort }}</span>
                                <form method="POST" action="{{ route('admin.image.destroy', $image) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Удалить?');" role="button" class="btn btn-outline-danger btn-sm my-1">Удалить</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                    <option value="{{ $category->id }}" @if(old('category') == $category->id || $product->category_id == $category->id) selected @endif>{{ $category->title }}</option>
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
                                    <option value="{{ $model->id }}" @if(old('model') == $model->id || $product->modeltype_id == $model->id) selected @endif>{{ $model->title.' ('.$model->article.' v.'.$model->version.')' }}</option>
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
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $product->title }}">
                            @error('title')
                                <div class="form-text text-danger fs-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Цена</label>
                        <div class="col-sm-10">
                            <input type="number" step="1" min="100" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ?? $product->price}}" id="price" name="price">
                            @error('price')
                                <div class="form-text text-danger fs-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Описание</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ?? $product->description }}</textarea>
                            @error('description')
                                <div class="form-text text-danger fs-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="characteristics" class="col-sm-2 col-form-label">Характеристики</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="characteristics" name="characteristics" rows="3">{{ old('characteristics') ?? $product->characteristics }}</textarea>
                            <div id="characteristicsHelpBlock" class="form-text">
                                Характеристики в формате JSON
                            </div>
                            @error('characteristics')
                                <div class="form-text text-danger fs-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Назад</a>
                    <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                        Удалить</button>
                </form>
                <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" id="delete-form" class="form-inline">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection