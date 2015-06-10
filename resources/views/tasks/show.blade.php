@extends('layouts.master')

@section('content')
	<h1>{{ $task->title }}</h1>
	<article> {{ $task->body }} </article>

	<p><a href= "{{ url("/")}}">Go Back</p> 
@stop