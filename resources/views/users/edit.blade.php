@extends('layouts.app', ['title' => 'ویرایش کردن کاربر', 'heading' => 'کاربران'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش کردن کاربر : {{$user['data']->username}}</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => [$url.'.update', $user['data']->id],'method' => 'put', 'class' => 'form-horizontal'])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-3 control-label">
                                        <span>نام کاربری<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('mobile',$user['data']->mobile,['class' => 'form-control', 'disabled' => 'disabled'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">
                                        <span>رمز عبور</span>
                                        <br>
                                        <span class="text-muted font-11">(فقط در صورت نیاز به تغییر پر شود)</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::password('password',['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="col-sm-3 control-label">
                                        <span>نام</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('first_name', $user['data']->first_name, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="col-sm-3 control-label">
                                        <span>نام خانوادگی</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('last_name', $user['data']->last_name, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <span>نقش ها<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        @foreach($data as $key => $value)
                                            <div class="checkbox checkbox-success">
                                                {{Form::checkbox('role[]', $value->id, (in_array($value->id, $user['roles'])), ['id' => 'role'.$value->id])}}
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
    @if(config('abilities')['users.destroy'] and auth()->id() !== $user['data']->id)
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title text-danger">حذف کردن کاربر : {{$user['data']->username}}</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper">
                        <div class="panel-body">
                            <div class="form-wrap">
                                {{Form::open(['route' => [$url.'.destroy',$user['data']->id], 'method' => 'delete'])}}
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
    @endif
@endsection
