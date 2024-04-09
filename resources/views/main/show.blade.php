@extends('layouts.main')

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">Артикул</th>
                        <td>{{ $product->article }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Название</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Статус</th>
                        <td>{{ $product->status }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Атрибуты</th>
                        <td>{{ json_decode(json_encode($product->data)) }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-2">
                <a href="{{ route('edit', $product->id) }}" class="btn btn-primary mr-3">Редактировать</a>
        </div>
    </div>

@endsection
