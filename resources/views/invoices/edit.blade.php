@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    {{Form::open(['route' => ['invoices.update', $data->id], 'method' => 'put'])}}
        <div>
            <label for="username">نام</label>
            {{Form::text('username', $data->username, ['class' => ''])}}
        </div>
        <div>
            {{Form::submit('ذخیره')}}
        </div>
    {{Form::close()}}
@endsection