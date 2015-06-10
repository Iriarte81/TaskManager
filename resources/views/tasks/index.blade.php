@extends('layouts.master')

@section('content')
		<h1>All Tasks</h1>
		<ul class ="list-group">
		@foreach($tasks as $task)
		<li class="list-group-item">
			<a href ="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}"></a>
			<a href = "{{ route('user.tasks.show', $task->title, [$task->user->username, $task->id]) }}">
			<a href = "{{ url("{$task->user->username}/tasks/{$task->id}")}}"> {{$task['title']}} </li>
		@endforeach
		</ul>

@stop
