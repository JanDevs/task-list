@extends('layouts.app')

@section('title', 'Lista de tareas')

@section('content')
    @forelse($tasks as $task)
        <div> 
             <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> {{ $task-> title }} </a>    
        </div>
    @empty
        <div>No hay tareas</div>
    @endforelse
@endsection

