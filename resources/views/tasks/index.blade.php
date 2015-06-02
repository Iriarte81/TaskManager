<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>All Tasks</h1>
		@foreach($tasks as $task)
			<li><a href = "{{ url("tasks/$task->id")}}"> {{$task['title']}} </li>
		@endforeach
	</body>
</html>