@extends('layouts.app', ['title' => 'ویرایش مطلب پرس و پاسخ', 'heading' => 'مطالب پرسش و پاسخ'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش مطلب پرس و پاسخ</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                        {{Form::open(['route' => ['faq.update', $data->id], 'method' => 'put', 'class' => 'form-horizontal'])}}
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
                                    <label for="content" class="col-sm-3 control-label">
                                        <span>مطلب</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::textarea('content', $data->content, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div>
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
                            {{Form::open(['route' => ['faq.destroy', $data->id], 'method' => 'delete'])}}
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
