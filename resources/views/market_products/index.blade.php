@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    <a href="{{route('market-products.create')}}">افزودن</a>
    <table>
        <thead>
            <tr>
                <th>شناسه</th>
                <th>عنوان</th>
                <th>قیمت</th>
                <th>دسته بندی</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->category->title}}</td>
                <td>
                    <a href="{{route('market-products.edit', $value->id)}}">ویرایش</a>
                    {{Form::open(['route' => ['market-products.destroy', $value->id], 'method' => 'delete'])}}
                        {{Form::submit('حذف')}}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
