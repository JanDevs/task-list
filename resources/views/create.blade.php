@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">
                Title
            </label>
            <input text="text" name="title" id="title" />
        </div>

        <div>
            <label for="description">Descripcion</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>

        <div>
            <label for="long_description">Descripcion Larga</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Agregar tarea</button>
        </div>
    </form>
@endsection
