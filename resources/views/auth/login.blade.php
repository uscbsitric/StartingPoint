@extends('app')

@section('content')
	<form method="POST" action="/auth/login">
	{!! csrf_field() !!}
		<div class="form-group">
			<label for="email">Email Address: </label>
			<input type="email" name="email" class="form-control" id="emailID" placeholder="email">
		</div>
		<div class="form-group">
			<label for="password">Password: </label>
			<input type="password" class="form-control" name="password" id="passwordID" placeholder="password">
		</div>
		<div>
			<label for="remember">Remember Me: </label>
			<input type="checkbox" name="remember" id="rememberID">
		</div>
		<div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>

	@include('common.errors')
@stop()