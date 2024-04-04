@extends('layouts.app')
@section('title', '| Add Project')

@section('content')
  
<div class="container">
    <h1 class="fs-2 fw-bold py-4">Aggiungi progetto</h1>
    <form class="d-flex flex-column gap-3" action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <label for="title">Nome Progetto</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $project->title }}" required>
        </div>
        <div>
            <label for="thumb">Anteprima Progetto</label>
            <input class="form-control" type="file" name="thumb" id="thumb"value="{{ $project->thumb }}" >
        </div>
        <div>
            <label for="description">Descrizione Progetto</label>
            <textarea class="form-control" type="text" name="description" id="description" rows="4">{{ $project->description }}</textarea>
        </div>
        <div>
            <button class="btn btn-success">Save Project</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
    </form>
</div>

@endsection