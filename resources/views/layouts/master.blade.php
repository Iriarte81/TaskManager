<!doctype html>
<html>
	<head
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<style>
		.error { color: red; font-size: .8em; font-style: italic;}
		li img { margin-right: 1em;}
		.completed { background: #90D4AA;}
		.task-update-form { position: absolute; top: 1em; right: 1em;}
        .highlighted81 { background-color: #DCDCDC;}
	    </style>
		<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

	</head>
	<body>
		<div class="container col-md-6 col-md-offset-3">
			@yield('content')
		</div>
	</body>
</html>