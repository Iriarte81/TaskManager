<!doctype html>
<html>
	<head
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<style>
		.error { color: red; font-size: .8em; font-style: italic;}
		li img { margin-right: 1em;}
		.completed { background: #D9EDF7;}
		.task-update-form { position: absolute; top: 1em; right: 1em;}
        .highlighted81 { background-color: #DCDCDC;}
        .background81 {
        background: rgba(235,233,249,1);
        background: -moz-linear-gradient(-45deg, rgba(235,233,249,1) 0%, rgba(206,199,236,1) 51%, rgba(216,208,239,1) 77%, rgba(193,191,234,1) 100%);
        background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(235,233,249,1)), color-stop(51%, rgba(206,199,236,1)), color-stop(77%, rgba(216,208,239,1)), color-stop(100%, rgba(193,191,234,1)));
        background: -webkit-linear-gradient(-45deg, rgba(235,233,249,1) 0%, rgba(206,199,236,1) 51%, rgba(216,208,239,1) 77%, rgba(193,191,234,1) 100%);
        background: -o-linear-gradient(-45deg, rgba(235,233,249,1) 0%, rgba(206,199,236,1) 51%, rgba(216,208,239,1) 77%, rgba(193,191,234,1) 100%);
        background: -ms-linear-gradient(-45deg, rgba(235,233,249,1) 0%, rgba(206,199,236,1) 51%, rgba(216,208,239,1) 77%, rgba(193,191,234,1) 100%);
        background: linear-gradient(135deg, rgba(235,233,249,1) 0%, rgba(206,199,236,1) 51%, rgba(216,208,239,1) 77%, rgba(193,191,234,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebe9f9', endColorstr='#c1bfea', GradientType=1 );
        }
        .centertitle81 {
        text-align: center;
        color: #3A2961;
        }

	    </style>
		<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

	</head>
	<body>
		<div class="container col-md-6 col-md-offset-3 background81">
			@yield('content')
		</div>
	</body>
</html>