@extends('app')

@section('content')
<form method="POST" action="/auth/register">
	{!! csrf_field() !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm Password:') !!}
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>
		<div>
			{!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}
		</div>
</form>

@include('errors.list')
@stop()