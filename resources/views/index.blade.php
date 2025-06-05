@extends('layouts.app')

@section('title', 'Lista de tareas')

@section('content')

    <div>
        <a href="{{ route('tasks.create') }}">Agregar tarea</a>
    </div>

    @forelse($tasks as $task)
        <div>
             <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> {{ $task-> title }} </a>
        </div>
    @empty
        <div>No hay tareas</div>
    @endforelse

    @if ($tasks -> count())
        <div>
            {{ $tasks -> links() }}
        </div>
    @endif

@endsection

