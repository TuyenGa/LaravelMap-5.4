@extends('layouts.app')
@section('title' ,'All List')
@section('content')

    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Địa chỉ</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Người đăng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                @foreach($trip as $item)

                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['street']}} - {{$item['state']}} - {{$item['city']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>{{ $item['description'] }}</td>

                        <td>
                            <a href="{{ route('details',[ $item['id']]) }}">Chi tiết</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>

    @endsection