@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    {{Form::open(['route' => 'market-categories.store', 'method' => 'post'])}}
        <div>
            <label for="title">عنوان</label>
            {{Form::text('title', null, ['class' => ''])}}
        </div>
        <div>
            <label for="subtitle">عنوان دوم</label>
            {{Form::text('subtitle', null, ['class' => ''])}}
        </div>
        <div>
            {{Form::submit('ذخیره')}}
        </div>
    {{Form::close()}}
@endsection
