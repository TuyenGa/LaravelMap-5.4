@extends('layouts.layout')
@section('title','Chi tiết Sản phẩm')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$trip->street}}</h1>

            <h1>{{$trip->state}}</h1>

            <h1>{{$trip->city}}</h1>

            <h2>{!!$trip->price!!}</h2>

            <hr>

            <div class="description"> {!! nl2br($trip->description) !!}</div>
        </div>
        <div class="col-md-8 gallery">
            @foreach($trip->photos->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $photo)
                        <div class="col-md-3 gallery__image">
                            <img src="/{{$photo -> thumbnail_path}}" alt="">

                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <hr>



@stop
