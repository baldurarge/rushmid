@extends('main')

@section('content')
	<div class="col-lg-9">
		<div class="col-lg-3 col-lg-offset-2 gameStarter">
			<a class="thumbnail text-center" href="">
				<h3>Start Searching</h3>
				<span class="glyphicon glyphicon-search"></span>
			</a>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="panel panel-default">
			<div class="panel-heading">

			</div>
			<div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item list-group-item-success">
						<b>{{$user->nickname}}</b>
					</li>
					<li class="list-group-item">
						Player<b class="pull-right"><a href="">Remove</a></b>
					</li>
				</ul>
			</div>
			<div class="panel-footer">
				<a class="btn btn-default" href="">invite friends</a>
			</div>
		</div>
	</div>


@stop

