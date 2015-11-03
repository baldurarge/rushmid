@extends('main')

@section('content')
<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="register">
    {!! csrf_field() !!}

    <div>
        Nickname
        <input type="text" name="nickname" value="{{ old('nickname') }}">
    </div>

    <div>
        Full name
        <input type="text" name="name" value="{{old('name') }} ">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
<a href="login"> Login</a>

@stop