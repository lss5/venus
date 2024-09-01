@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-3 fw-medium">Регистрация оборудования</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('product.qrcode.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="model" class="col-sm-2 col-form-label">Модель</label>
                <div class="col-sm-10">
                    <input type="text" value="{{ $qrcode->modeltype->title }}" class="form-control" disabled readonly>
                    @error('model')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="serial_number" class="col-sm-2 col-form-label">Серийный номер</label>
                <div class="col-sm-10">
                    <input type="number" value="{{ $qrcode->serial_number }}" class="form-control" disabled readonly>
                    @error('serial_number')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="qrcode" class="col-sm-2 col-form-label">QR-код вытяжки</label>
                <div class="col-sm-10">
                    <input type="text" value="{{ $qrcode->id }}" class="form-control" readonly name="qrcode" id="qrcode">
                    @error('qrcode')
                        <div class="form-text text-danger fs-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" value="{{ old('name') ?? '' }}" class="form-control @error('name') is-invalid @enderror" name="name" id="inputName">
                    @error('name')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Почта</label>
                <div class="col-sm-10">
                    <input type="text" value="{{ old('email') ?? '' }}" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" placeholder="email@example.com">
                    @error('email')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="inputPassword">
                    <div class="form-text text-muted fs-sm">Минимум 6 символов</div>
                    @error('password')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPasswordConfirmation" class="col-sm-2 col-form-label">Еще раз</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="inputPasswordConfirmation" placeholder="Подтвердите пароль">
                    @error('password_confirmation')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Регистрация</button>
        </form>
    </div>
@endsection
