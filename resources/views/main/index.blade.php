@extends('layouts.main')

@section('content')
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="d-flex">
                <table id="example1" class="table dataTable dtr-inline"
                       aria-describedby="example1_info" style="width: 100%;">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            Артикул
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Browser: activate to sort column ascending">Название
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending">Статус
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending">Атрибуты
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr class="odd">
                        <td><a class="text-dark" href="{{ route('show', $product->id) }}">{{ $product->article }}</a></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ json_decode(json_encode($product->data)) }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('create') }}" class="btn btn-primary mr-3">Добавить</a>
            </div>
        </div>
    </div>
@endsection
