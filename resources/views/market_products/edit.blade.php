@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    {{Form::open(['route' => ['market-products.update', $data->id], 'method' => 'put'])}}
    <div>
        <label for="title">عنوان</label>
        {{Form::text('title', $data->title, ['class' => ''])}}
    </div>
    <div>
        <label for="price">قیمت</label>
        {{Form::text('price', $data->price, ['class' => ''])}}
    </div>
    <div>
        <label for="description">توضیحات</label>
        {{Form::textarea('description', $data->description, ['class' => ''])}}
    </div>
    <div>
        <label for="external_link">لینک خارجی</label>
        {{Form::text('external_link', $data->external_link, ['class' => ''])}}
    </div>
    <div>
        <label for="category_id">لینک خارجی</label>
        {{Form::select('category_id', $select, $data->category_id, ['placeholder' => 'انتخاب ...'])}}
    </div>
        <div>
            {{Form::submit('ذخیره')}}
        </div>
    {{Form::close()}}
@endsection
