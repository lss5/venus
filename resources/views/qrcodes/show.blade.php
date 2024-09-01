@extends('layouts.app')

@section('content')
    <div class="container my-3 my-lg-5">
        <h1 class="fs-4 fw-medium">{{ $qrcode->modeltype->title }}</h1>
        <div class="row my-3">
            <div class="col-12 fs-5 text-justify">
                @guest
                    @if (! $qrcode->users()->get())
                        <a href="{{ route('product.qrcode.create', $qrcode) }}" class="btn btn-primary my-3">Зарегистрировать</a>
                    @endif
                @endguest
                @auth
                    @if (! $qrcode->users()->get())
                        <a href="{{ route('product.qrcode.create', $qrcode) }}" class="btn btn-primary my-3">Зарегистрировать</a>
                    @else
                        @foreach (Auth::user()->qrcodes()->get() as $item)
                            @if ($item->id == $qrcode->id)
                                Вы активировали дополнительный гарантийный период для этой вытяжки
                            @endif
                        @endforeach
                    @endif
                @endauth
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <img src="{{ asset('storage/'.$qrcode->modeltype->product->images->first()->link) }}" class="img-fluid" alt="{{ $qrcode->modeltype->product->title }}">
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <ul class="fs-5 list-group list-group-flush">
                    <li class="list-group-item">Артикул: <span class="fw-semibold">{{ $qrcode->modeltype->article }}</span></li>
                    <li class="list-group-item">Серийный номер: <span class="fw-semibold">{{ $qrcode->serial_number }}</span></li>
                    @foreach (json_decode($qrcode->modeltype->product->characteristics) as $key => $value)
                        <li class="list-group-item">{{ $key }}: <span class="fw-semibold">{{ $value }}</span></li>
                    @endforeach
                  </ul>
            </div>
        </div>
    </div>
@endsection
