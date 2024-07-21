@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12 col-lg-6 mx-auto">
            <h1 class="fs-4 mb-3 fw-normal text-center">Авторизуйтесь для входа в личный кабинет</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Почта</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail" placeholder="email@example.com">
                    </div>
                    @error('email')
                        <div class="form-text text-danger">
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
                        <div class="form-text text-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">
                        Войти
                    </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                            Забыли пароль?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
