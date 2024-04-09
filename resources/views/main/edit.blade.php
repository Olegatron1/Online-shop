@extends('layouts.main')

@section('content')
    <div class="m-lg-3">
        <div class="row">
            <form action="{{ route('update', [$product->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <!-- Ваши поля формы -->
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
