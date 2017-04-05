	@extends('layouts.app')
	@section('title','Thuê Nhà')

	@section('content')
		<input id="pac-input" type="text" placeholder="Search Box"/>
		<div id="showmap"></div>

{{----}}
	@stop
	@section('scripts.footer')
		{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>--}}

	@endsection