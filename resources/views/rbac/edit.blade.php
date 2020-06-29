@extends('layouts.app', ['title' => 'ویرایش کردن نقش', 'heading' => 'نقش ها'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش کردن نقش : {{$data['role']->title}}</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => ['rbac.update', $data['role']->id], 'method' => 'put'])}}
                            <div class="form-group col-lg-12 mb-30">
                                {{Form::label('role_title', 'نام نقش',['class' => 'col-lg-4'])}}
                                {{Form::text('role_title', $data['role']->title, ['class' => 'form-control '])}}
                            </div>
                            @foreach($data['abilities'] as $key => $value)
                                <div class="form-group mb-30 col-lg-4 col-md-4">
                                    <label class="control-label mb-10 m-t-20"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>{{$value[0]->group}}</span></label>
                                    @foreach($value as $_key => $_value)
                                        <div>
                                            <div class="checkbox checkbox-success">
                                                {{Form::checkbox("rbac[$_value->id]", true, (isset($data['role_ability'][$_value->id]) ? true : false), ['id' => "rbac[$_value->id]"])}}
                                                <label for="{{"rbac[$_value->id]"}}">  {{$_value->title}} </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                            <div class="form-group col-lg-12 mb-30">
                                {{Form::submit('ذخیره',['class' => 'btn btn-success'])}}
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($data['role']->system_default !== 1 and config('abilities')['rbac.destroy'])
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title text-danger">حذف کردن نقش : {{$data['role']->title}}</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper">
                        <div class="panel-body">
                            <div class="form-wrap">
                                {{Form::open(['route' => ['rbac.destroy',$data['role']->id], 'method' => 'delete'])}}
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
