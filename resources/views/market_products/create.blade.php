@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    {{Form::open(['route' => 'market-products.store', 'method' => 'post'])}}
        <div>
            <label for="username">نام</label>
            {{Form::text('username', null, ['class' => ''])}}
        </div>
        <div>
            {{Form::submit('ذخیره')}}
        </div>
    {{Form::close()}}
@endsection
