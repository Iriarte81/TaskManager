@extends('layouts.master')

@section('content')
		<h1>All Tasks</h1>
		<ul class ="list-group">
		@foreach($tasks as $task)
		<li class="list-group-item">
			<a href ="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}"></a>
			<a href = "{{ route('user.tasks.show', $task->title, [$task->user->username, $task->id]) }}">
			<a href = "{{ url("{$task->user->username}/tasks/{$task->id}")}}"> {{$task['title']}} </li></a>
		@endforeach
		</ul>
<hr>

@if (isset($users))
<h3>Add New Task</h3>
{!! Form::open( ['url' => '/tasks', 'class' => 'form']) !!}

	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('text', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('assign', 'Assign To:') !!}
		{!! Form::select('assign', $users, null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Create Task', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endif
@stop
