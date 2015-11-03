@extends('main')

@section('content')
    <div class="container">
        <div class=" col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1> {{$userUrl->nickname}}</h1>
                </div>
                <div class="panel-body">
                    <div class="text-center">
                        <img src="{{$userUrl->imgSorce}}" class="img-rounded" style="width:150px;">
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <hr>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3 control-label">Name:</label>
                            <label class="col-lg-10 col-md-9 col-sm-9 col-xs-9">{{$userUrl->name}}</label>

                            <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3 control-label">Email:</label>
                            <label class="col-lg-10 col-md-9 col-sm-9 col-xs-9">{{$userUrl->email}}</label>

                            <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3 control-l abel">youtube:</label>
                            <label class="col-lg-10 col-md-9 col-sm-9 col-xs-9">@if(isset($userUrl->youtube)){{$userUrl->youtube}}@else No youtube channel @endif</label>

                            <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3 control-label">otherlink:</label>
                            <label class="col-lg-10 col-md-9 col-sm-9 col-xs-9">@if(isset($userUrl->twitch)){{$userUrl->twitch}}@else No twitch channel @endif</label>

                            <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3 control-label">Joined:</label>
                            <label class="col-lg-10 col-md-9 col-sm-9 col-xs-9">{{$userUrl->created_at}}</label>
                            <hr class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if($userUrl->id === $user->id)
                            <div class="text-center">
                                <a class="btn btn-default" href="../userinfo/{{$user->id}}/edituser">Edit user info</a>
                            </div>@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop