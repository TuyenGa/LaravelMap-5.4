@extends('layouts.layout')
@section('title','Home Page')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <div class="col-md-offset-4">
                <p><a class="btn btn-primary  col-md-2 text-center" href="/trip/create" role="button">Cho thuê </a></p>
                <div class="col-md-1"></div>
                <p><a class="btn btn-primary col-md-2 text-center " href="/showMap" role="button">Thuê nhà </a></p>
            </div>
        </div>
    </div>
@endsection
