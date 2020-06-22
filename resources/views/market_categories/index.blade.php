@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    <a href="{{route('market-categories.create')}}">افزودن</a>
    <table>
        <thead>
            <tr>
                <th>شناسه</th>
                <th>عنوان</th>
                <th>عنوان دوم</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->subtitle}}</td>
                <td>
                    <a href="{{route('market-categories.edit', $value->id)}}">ویرایش</a>
                    {{Form::open(['route' => ['market-categories.destroy', $value->id], 'method' => 'delete'])}}
                        {{Form::submit('حذف')}}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
