@extends('layouts.main')

@section('content')
    <div class="m-lg-3">
        <div class="row">
            <form action="{{ route('update', ['id' => $product->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="col-md-6">
                    <div class="font-weight-bold fs-3 p-3">Редактировать продукт</div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="article">Артикул</label>
                            <input name="article" type="text" class="form-control" id="article"
                                   value="{{ $product->article }}"
                                   placeholder="Введите артикул">
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Название</label>
                            <input name="name" type="text" class="form-control" id="name"
                                   value="{{ $product->name }}"
                                   placeholder="Введите название товара">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Статус</label>
                            <select name="status" class="form-control" id="status">
                                <option {{ $product->status === 'Доступен' ? 'selected' : '' }}>Доступен</option>
                                <option {{ $product->status === 'Не доступен' ? 'selected' : '' }}>Не доступен</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="form-group">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg" value="Сохранить">
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
