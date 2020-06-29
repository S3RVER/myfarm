@extends('layouts.app', ['title' => 'اضافه کردن دسته بندی فروشگاه', 'heading' => 'دسته بندی فروشگاه'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافه کردن دسته بندی فروشگاه</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => 'market-categories.store','method' => 'post', 'class' => 'form-horizontal', 'files' => true])}}
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
                                    <label for="subtitle" class="col-sm-3 control-label">
                                        <span>عنوان دوم</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('subtitle', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subtitle" class="col-sm-3 control-label">
                                        <span>عکس</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::file('image')}}
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
