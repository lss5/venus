@extends('layouts.admin')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="fs-4 fw-medium">QR codes</h1>
                <a href="{{ route('admin.qrcode.create') }}" class="btn btn-primary mt-3">Создать QR-коды</a>
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
                        @foreach ($qrcodes as $qrcode)
                            <tr onclick="window.location='{{ route('admin.qrcode.edit', $qrcode->id) }}';">
                                <td>{{ $qrcode->modeltype->title }}</td>
                                <td>{{ $qrcode->modeltype->article }}</td>
                                <td>{{ $qrcode->modeltype->version }}</td>
                                <td>{{ $qrcode->serial_number }}</td>
                                <td>{{ $qrcode->id }}</td>
                                <td>{{ $qrcode->created_at->format('d.m.Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection