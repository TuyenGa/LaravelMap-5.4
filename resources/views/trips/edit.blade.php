@extends('layouts/layout')
@section('title','Edit')

@section('content')

    <h1>Sửa dịch vụ </h1>
    <hr>
    <form method="POST" action="{{ url('trip').'/'.$trip->id }}" enctype="multipart/form-data" >
        {{method_field('PUT')}}
        @include('trips.formEdit')

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
