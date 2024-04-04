@extends('layouts.app')
@section('title', '| Add Type')

@section('content')
  
<div class="container">
    <h1 class="fs-2 fw-bold py-4">Modifica tipologia</h1>
    <form class="row" action="{{ route('admin.types.update', $type) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="col-10">
            <label for="label">Nome Tipologia</label>
            <input class="form-control" type="text" name="label" id="label"  value="{{ $type->label }}">
        </div>
        <div class="col-2">
            <label for="color">Colore Tipologia</label>
            <input class="form-control my-2" type="color" name="color" id="color" value="{{ $type->color }}">
        </div>
        <div>
            <button class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
    </form>
</div>

@endsection