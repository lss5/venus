@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12 col-lg-6 mx-auto">
            <h1 class="fs-4 mb-3 fw-normal text-center">Регистрация пользователя</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ old('name') ?? '' }}" class="form-control @error('name') is-invalid @enderror" name="name" id="inputName">
                    </div>
                    @error('name')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Почта</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ old('email') ?? '' }}" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" placeholder="email@example.com">
                    </div>
                    @error('email')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="inputPassword">
                    </div>
                    @error('password')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="inputPasswordConfirmation" class="col-sm-2 col-form-label">Еще раз</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="inputPasswordConfirmation" placeholder="Подтвердите пароль">
                    </div>
                    @error('password_confirmation')
                        <div class="form-text text-danger fw-light">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">
                        Зарегистрироваться
                    </button>
                    <button type="submit" class="btn btn-outline-primary mx-3">
                        Войти
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
