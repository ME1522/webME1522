@extends('layouts.master')

@section('head')
	@parent

	<title>Register</title>

@stop
@section('content')
	<div class="container">
		<h1>Register</h1>
		
		<form role="form" method="post" action={{URL::route('postCreate')}}>
			<div class="form-group{{($errors->has('username'))? 'has-error':''}}">
				<label for="username">Username</label>
				<input id="username" name="username" type="text" class="form-control">
				
			</div
			<div class="form-group{{($errors->has('pass1'))? 'has-error':''}}">
				<label for="pass1">Password</label>
				<input id="pass1" name="pass1" type="password" class="form-control">
				
			</div>
			<div class="form-group{{($errors->has('pass2'))? 'has-error':''}}">
				<label for="pass2">Confirm Password</label>
				<input id="pass2" name="pass2" type="password" class="form-control">
				
			</div>
			<div class="form-group{{($errors->has('pass2'))? 'has-error':''}}">
				<label for="email">Email</label>
				<input id="email" name="email" type="text" class="form-control">
				
			</div>
			{{Form::token()}}
			<div class="form-group">
				<input  type="submit" value="Register" class="bth bth-default">
			</div>
		</form>
	</div>

@stop