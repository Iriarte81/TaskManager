@extends('layouts.master')

@section('content')
</br>
	<div style="float:left;" >
		<h1>All Tasks</h1>
		<ul class ="list-group">
		@foreach($tasks as $task)
		<li class="list-group-item {!! $task->completed ? 'completed' : '' !!}">
			<a href ="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->username }}"></a>
			<a href = "{{ route('user.tasks.show', $task->title, [$task->user->username, $task->id]) }}">
			<a href = "{{ url("{$task->user->username}/tasks/{$task->id}")}}"> {{$task['title']}} </a>
				{!! Form::model($task, ['id' => 'task-update-form', 'method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) !!}
					{!! Form::checkbox('completed') !!}
					{!! Form::submit('update') !!}
				{!! Form::close() !!}
			</li>
		@endforeach
		</ul>
	</div>
</br>
@if (isset($users))
<div style="float:right">
<h3 style="float:right">Add New Task</h3>
{!! Form::open( ['url' => '/tasks', 'class' => 'form']) !!}

	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<span class=error>:message</span>') !!}
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		{!! $errors->first('body', '<span class=error>:message</span>') !!}
	</div>

	<div class="form-group">
		{!! Form::label('user_id', 'Assign To:') !!}
		{!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Create Task', ['class' => 'btn btn-primary']) !!}
	</div>
</div>
{!! Form::close() !!}
@endif
@stop
