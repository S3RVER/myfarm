@extends('layouts.app', ['title' => 'اضافه کردن کاربر', 'heading' => 'کاربران'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافه کردن کاربر</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => $url.'.store','method' => 'post', 'class' => 'form-horizontal'])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-3 control-label">
                                        <span>نام کاربری<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('mobile', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">
                                        <span>رمز عبور<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::password('password', ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="col-sm-3 control-label">
                                        <span>نام</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('first_name', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="col-sm-3 control-label">
                                        <span>نام خانوادگی</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('last_name', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <span>نقش ها<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        @foreach($data as $key => $value)
                                            <div class="checkbox checkbox-success">
                                                {{Form::checkbox('role[]', $value->id, null, ['id' => 'role'.$value->id])}}
                                                <label for="role{{$value->id}}">{{$value->title}}</label>
                                            </div>
                                        @endforeach
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
