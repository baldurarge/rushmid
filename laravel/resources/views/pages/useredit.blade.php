@extends('main')

@section('content')
    <div class="container">
        <div class=" col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">
            <form action="edituser" method="POST">
                {!! csrf_field() !!}
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h1>{{$user->name}}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <div class="col-lg-12">
                                <img src="{{$user->imgSorce}}" class="img-rounded" style="width: 150px;">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <hr>
                                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Image Link:</label>
                                <input class="col-lg-6 col-md-9 col-sm-9 col-xs-9" name="imgSorce" type="text"value="{{$user->imgSorce}}">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <hr>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Nick name:</label>
                                    <input class="col-lg-6 col-md-9 col-sm-9 col-xs-9" name="nickname" type="text"value="{{$user->nickname}}">
                                </div>

                                <div class="col-lg-12">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">youtube:</label>
                                    <input class="col-lg-6 col-md-9 col-sm-9 col-xs-9" name="youtube" type="text" value="{{$user->youtube}}">

                                </div>

                                <div class="col-lg-12">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">otherlink:</label>
                                    <input class="col-lg-6 col-md-9 col-sm-9 col-xs-9" name="twitch" type="text" value="{{$user->twitch}}">
                                </div>
                                <hr class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Submit changes</button>
                    </div>
                </div>

            </form>
        </div>
    </div>





@stop