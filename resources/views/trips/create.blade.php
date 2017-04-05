@extends('layouts/layout')
@section('title','Create Trips')

@section('content')

		<h1>Trips Create: </h1>
		<hr>
		<form method="POST" action="/trip" enctype="multipart/form-data" >
			@include('trips.form')

			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

		</form>


@endsection
