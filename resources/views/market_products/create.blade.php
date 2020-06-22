@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    {{Form::open(['route' => 'market-products.store', 'method' => 'post'])}}
        <div>
            <label for="title">عنوان</label>
            {{Form::text('title', null, ['class' => ''])}}
        </div>
        <div>
            <label for="price">قیمت</label>
            {{Form::text('price', null, ['class' => ''])}}
        </div>
        <div>
            <label for="description">توضیحات</label>
            {{Form::textarea('description', null, ['class' => ''])}}
        </div>
        <div>
            <label for="external_link">لینک خارجی</label>
            {{Form::text('external_link', null, ['class' => ''])}}
        </div>
        <div>
            <label for="category_id">دسته بندی</label>
            {{Form::select('category_id', $select, null, ['placeholder' => 'انتخاب ...'])}}
        </div>
        <div>
            {{Form::submit('ذخیره')}}
        </div>
    {{Form::close()}}
@endsection
