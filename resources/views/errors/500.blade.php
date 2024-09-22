@extends('layouts.app')

@section('content')

<div class="container-fluid container-xxl">
    <div class="row mb-3 mb-lg-5">
        <!-- Левая -->
        <div class="col-12 col-lg-6 px-0">
            <img src="{{ Vite::asset('resources/images/product/main.jpg') }}" class="img img-fluid" alt="Вытяжка для маникюра VENUS PROFESSIONAL">
        </div>
        <!-- Правая -->
        <div class="col-12 col-lg-6 px-0 d-flex flex-row justify-content-center align-items-center slider-right-space ">
            <div class="my-3 my-lg-5 text-center text-primary">
                <p class="m-0 fs-1 fw-semibold">500</p>
                <p class="mb-3 fs-3 fw-semibold">Технические неполадки</p>
                <p class="mb-3 fs-4 fw-semibold">Мы уже работаем над их устранением</p>
                <a href="{{ route('pages.index') }}" class="btn btn-primary btn-lg mb-3">
                    На главную
                </a>
            </div>
        </div>
    </div>
</div>

@endsection