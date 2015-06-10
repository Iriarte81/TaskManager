@extends('layouts.master')

@section('content')
		<h1>All Tasks</h1>
		<ul class ="list-group">
		@foreach($tasks as $task)
		<li class="list-group-item">
			<img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->email }}">
		<!--	<img src="http://www.gravatar.com/avatar/{{ md5($task->user->email) }}" alt="{{ $task->user->email }}"> !-->
			<a href = "{{ url("tasks/$task->id")}}"> {{$task['title']}} </li>
		@endforeach
		</ul>

@stop
