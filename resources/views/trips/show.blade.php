@extends('layouts.layout')
@section('title','Add Photo')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$trip->street}}</h1>

            <h1>{{$trip->state}}</h1>

            <h1>{{$trip->city}}</h1>

            <h2> Giá :{!!$trip->price!!}</h2>

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
                <hr>
                <h2>Add Your Photos</h2>

                <form id="addPhotosForm" action="/{{$trip->zip}}/{{$trip->street}}/photos" method="POST" class="dropzone">

                    {{csrf_field()}}

                </form>
        </div>
    </div>
    <hr>

@endsection
@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotosForm ={
            paramName: 'photo',
            maxFilesize : 3,
            acceptedFiles:'.jpg , .jpeg, .png, .bmp'
        }
    </script>
@stop
