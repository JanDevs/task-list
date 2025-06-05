@extends('layouts.app')

@section('title', 'Lista de tareas')

@section('content')

    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}"
        class="font-medium text-gray-700 underline decoration-pink-500">Agregar tarea</a>
    </nav>

    @forelse($tasks as $task)
        <div>
             <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                @class(['line-through' => $task -> completed])> {{ $task-> title }} </a>
        </div>
    @empty
        <div>No hay tareas</div>
    @endforelse

    @if ($tasks -> count())
        <nav class="mt-4">
            {{ $tasks -> links() }}
        </nav>
    @endif

@endsection

