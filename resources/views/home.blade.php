@extends('layouts.layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <div class="col-md-offset-4">
                <p><a class="btn btn-primary btn-lg col-md-2" href="/trip/create" role="button">Cho Thuê</a></p>
                <div class="col-md-1"></div>
                <p><a class="btn btn-primary btn-lg col-md-2 " href="/showMap" role="button">Thuê Nhà</a></p>
            </div>
        </div>
    </div>
@endsection
