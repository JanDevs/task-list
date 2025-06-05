@extends('layouts.app')

@section('title', $task -> title)

@section('content')

<p> {{ $task -> description }} </p>

@if($task -> long_description)
    <p> {{ $task -> long_description }} </p>
@endif

<p> {{ $task -> created_at }} </p>
<p> {{ $task -> updated_at }} </p>

<p>
    @if($task -> completed)
        Completado
    @else
        No completado
    @endif
</p>

<div>
    <a href="{{ route('tasks.edit', ['task' => $task ]) }}">Editar</a>
</div>

<div>
    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task] )}}">
        @csrf
        @method('PUT')
        <button type="submit">
            Marcar como {{ $task -> completed ? 'No completado' : 'Completado' }}
        </button>
    </form>
</div>

<div>
    <form action="{{ route('tasks.destroy', ['task' => $task -> id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
</div>
@endsection
