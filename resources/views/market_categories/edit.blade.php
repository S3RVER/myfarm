@extends('layouts.app', ['title' => 'ویرایش دسته بندی فروشگاه', 'heading' => 'دسته بندی فروشگاه'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش دسته بندی فروشگاه</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => ['market-categories.update', $data->id],'method' => 'put', 'class' => 'form-horizontal', 'files' => true])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>عنوان<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('title', $data->title, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subtitle" class="col-sm-3 control-label">
                                        <span>عنوان دوم</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('subtitle', $data->subtitle, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subtitle" class="col-sm-3 control-label">
                                        <span>اپلود عکس</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::file('image')}}
                                    </div>
                                </div>
                                @if ($data->image_path)
                                <div class="form-group">
                                    <label for="subtitle" class="col-sm-3 control-label">
                                        <span>عکس</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <img style="max-height: 200px" src="{{asset('storage/'.$data->image_path)}}">
                                    </div>
                                </div>
                                @endif
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
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title text-danger">حذف کردن</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => ['users.destroy', $data->id], 'method' => 'delete'])}}
                            <button class="btn btn-danger btn-lable-wrap right-label">
                                <span class="btn-label"><i class="fa fa-exclamation-triangle"></i></span>
                                <span class="btn-text">حذف</span>
                            </button>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
