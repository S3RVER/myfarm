@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    {{Form::open(['route' => ['market-categories.update', $data->id], 'method' => 'put'])}}
        <div>
            <label for="title">عنوان</label>
            {{Form::text('title', $data->title, ['class' => ''])}}
        </div>
        <div>
            <label for="subtitle">عنوان دوم</label>
            {{Form::text('subtitle', $data->title, ['class' => ''])}}
        </div>
        <div>
            {{Form::submit('ذخیره')}}
        </div>
    {{Form::close()}}
@endsection
