@extends('layouts.app')

@section('title', 'Balde Directive')

@section('content')
    
    @forelse ($tasks as $task)
        <div>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->titles }}</a>
            
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
@endsection