@extends('layouts.master')

@section('head')
	@parent

	<title>Login</title>

@stop
@section('content')
	<div class="container">
		<h1>Login</h1>
		
		<form role="form" method="post" action={{URL::route('postLogin')}}>
			<div class="form-group{{($errors->has('username'))? 'has-error':''}}">
				<label for="username">Username</label>
				<input id="username" name="username" type="text" class="form-control">
				
			</div
			<div class="form-group{{($errors->has('pass1'))? 'has-error':''}}">
				<label for="pass1">Password</label>
				<input id="pass1" name="pass1" type="password" class="form-control">
				
			</div>
			<div class="form-group">
				<label for="remember">
					<input type="submit" value="login" class="bth bth-default">
				</label>
			</div>
			{{Form::token()}}
			<div class="form-group">
				<input  type="submit" value="Register" class="bth bth-default">
			</div>
		</form>
	</div>

@stop