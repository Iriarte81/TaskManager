@extends('layouts.master')

@section('content')
</br>
    <h3 class="centertitle81"> Welcome to My Task Manager Application</h3>
	<div class="alert alert-success" role="alert"><b>Instructions: </b>
	<ul>
    <li>Create a task by filling out the form.</li>
    <li>Update a task's status by clicking on the checkbox and then the update button.</li>
    <li>See all tasks associated with one person by clicking on the Gravatar Icon.</li>
    <li>See details about the task by clicking on its title.</li>
    </ul>
    </div>

	<div style="float:left;" >
		<h3 style="padding-top: 20px">All Tasks</h3>
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
<div style="float:right" class="col-lg-7 col-md-7 col-sm-7">
<h3>Add New Task</h3>
{!! Form::open( ['url' => '/tasks', 'class' => 'form']) !!}

	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control f-c1', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Please enter a title for the task']) !!}
		{!! $errors->first('title', '<span class=error>:message</span>') !!}
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control f-c2', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Please describe the task at hand']) !!}
		{!! $errors->first('body', '<span class=error>:message</span>') !!}
	</div>

	<div class="form-group">
		{!! Form::label('user_id', 'Assign To:') !!}
		{!! Form::select('user_id', $users, null, ['class' => 'form-control f-c3', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Please select the person responsible for the task']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Create Task', ['class' => 'btn btn-primary']) !!}
	</div>

    <div class="alert alert-info form-group" role="alert"><b>Welcome!</b> This application allows you to record tasks.
    It has been styled with Bootstrap using the grid system and custom css styles. It includes JQuery functionality like Tooltips and form
    field shading on focusin and focusout events</div>

</div>
{!! Form::close() !!}
@endif
@stop
