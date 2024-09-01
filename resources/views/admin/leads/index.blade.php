@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">Заявки</h1>
                <a href="{{ route('admin.lead.create') }}" class="btn btn-primary my-3">Создать заявку</a>
                @empty($leads)
                    <h4>Нет заявок</h4>
                @endempty
                <div class="list-group list-group-flush">
                    @foreach ($leads as $lead)
                        <a href="{{ route('admin.lead.show', $lead->id) }}" class="list-group-item list-group-item-action d-flex flex-row justify-content-between align-items-center flex-wrap">
                            <span class="fw-medium">{{ $lead->name }}</span>
                            <span class="fw-light">{{ $lead->phone }}</span>
                            <span class="fw-light">{{ $lead->created_at->format('d.m.Y H:i:s') }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection