<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<style>
		.error { color: red; font-size: 0.8em; font-style: italic;}
		li img { margin-right: 1em;}
		.completed { background: #8acc6e;}
		#task-update-form { position: absolute; top: 1em; right: 1em;}
	</style>
</head>
<body>
	<div class="container col-md-6 col-md-offset-3">
		@yield('content')
	</div>
</body>
</html>