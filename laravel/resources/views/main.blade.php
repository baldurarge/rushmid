<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>RushMid.is</title>

</head>
<body>
<div class="col-lg-12">
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../home">Project Name</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="./home">Home</a></li>
					<li><a href="">Whatch</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(isset($user))<li><a href="../userinfo/{{$user->id}}"><b>User info</b></a></li>
					<li class="dropdown">
						<a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Friends list <span class="caret"></span></a>
						<ul class="dropdown-menu">
							@foreach($friends as $friend)
							<li><a href="../userinfo/{{$friend->id}}">{{$friend->name}}</a></li>
							@endforeach
							<li><a href="">Find friends</a></li>
						</ul>
					</li>
					<li><a href="../logout">Logout</a></li>@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
</div>
<div class="col-lg-12">
	@yield('content')
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
<script src="js/app.js"></script>
</html>