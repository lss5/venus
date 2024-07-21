@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                Добро пожаловать
                <a href="{{ route('main') }}" class="btn btn-primary"></a>
            </div>
        </div>
    </div>
@endsection