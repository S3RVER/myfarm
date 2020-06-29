@extends('layouts.app', ['title' => 'اضافه کردن محصول فروشگاه', 'heading' => 'محصولات فروشگاه'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافه کردن محصول فروشگاه</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => 'market-products.store','method' => 'post', 'class' => 'form-horizontal'])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>عنوان<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('title', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-3 control-label">
                                        <span>قیمت</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('price', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">
                                        <span>توضیحات</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::textarea('description', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="external_link" class="col-sm-3 control-label">
                                        <span>لینک خارجی</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('external_link', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category_id" class="col-sm-3 control-label">
                                        <span>دسته بندی<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::select('category_id', $select, null, ['placeholder' => 'انتخاب ...'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{Form::submit('ذخیره', ['class' => 'btn btn-success'])}}
                                </div>
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
