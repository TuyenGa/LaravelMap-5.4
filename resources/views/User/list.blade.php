@extends('layouts.app')
@section('title' ,'List')
@section('content')

    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <table class="table table-responsive ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>address</th>
                    <th>price</th>
                    <th>Description</th>
                    <th>Người đăng</th>
                    <th></th>
                    <th></th>
                    <th></th>


                </tr>
                </thead>
                <tbody>
                @foreach($user as $user_item)
                    @foreach($trips as $item)
                    <tr>
                        <td>{{$item->id }}</td>
                        <td>{{$item->street}} - {{$item->state}} - {{$item->city}}</td>
                        <td>{{number_format($item->price,0,",",".")." VND"}}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{$user_item->name}} SDT: {{$user_item->phoneNumber}}</td>
                        <td class="center text-middle">
                            <a  class="btn btn-primary"  href="{{ route('details',[ $item->id]) }}">Details</a>


                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i>
                            <a class="btn btn-primary " href="{{route('trip.edit',[ $item->id])}}"> Edit</a>
                        </td>
                        <td class="center ">
                                <form action="{{route('trip.destroy',[$item->id]) }}" method="post">
                                    <i class="fa fa-trash-o fa-fw"></i>
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger" > Delete </button>
                                </form>

                        </td>

                    </tr>
                </tbody>
                @endforeach
                @endforeach
            </table>
        </div>
    </div>

@endsection