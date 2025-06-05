@extends('layouts.app')

@section('title', $task -> title)

@section('content')

<div class="mb-4">
    <a href="{{ route('tasks.index') }}"
        class="link">Regresar a la lista</a>
</div>

<p class="mb-4 text-slate-700 "> {{ $task -> description }} </p>

@if($task -> long_description)
    <p class="mb-4 text-slate-700 "> {{ $task -> long_description }} </p>
@endif

<p class="mb-4 text-sm text-slate-500"> Creado {{ $task -> created_at -> diffForHumans() }}
     - Actualizado {{ $task -> updated_at -> diffForHumans()  }}</p>


<p class="mb-4 ">
    @if($task -> completed)
        <span class="font-medium text-green-500">Completado</span>
    @else
        <span class="font-medium text-red-500">No completado</span>
    @endif
</p>

<div class="flex gap-2 ">
    <a href="{{ route('tasks.edit', ['task' => $task ]) }}"
        class="btn">Editar</a>

    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task] )}}">
        @csrf
        @method('PUT')
        <button type="submit" class="btn">
            Marcar como {{ $task -> completed ? 'No completado' : 'Completado' }}
        </button>
    </form>

    <form action="{{ route('tasks.destroy', ['task' => $task -> id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">Borrar</button>
    </form>
</div>
@endsection
