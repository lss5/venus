@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3 my-lg-5">
                <h1 class="fs-4 fw-medium">Произведенные</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Модель</th>
                            <th scope="col">Артикул</th>
                            <th scope="col">Версия</th>
                            <th scope="col">Серийный номер</th>
                            <th scope="col">ID</th>
                            <th scope="col">Дата создания</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manufacturers as $manufacture)
                            <tr onclick="window.location='{{ route('manufacture.edit', $manufacture->id) }}';">
                                <td>{{ $manufacture->modeltype->title }}</td>
                                <td>{{ $manufacture->modeltype->article }}</td>
                                <td>{{ $manufacture->modeltype->version }}</td>
                                <td>{{ $manufacture->serial_number }}</td>
                                <td>{{ $manufacture->id }}</td>
                                <td>{{ $manufacture->created_at->format('d.m.Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                <a href="{{ route('manufacture.create') }}" class="btn btn-primary mt-3">Создать партию</a>
            </div>
        </div>
    </div>
@endsection