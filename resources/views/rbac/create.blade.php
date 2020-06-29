@extends('layouts.app', ['title' => 'اضافه کردن نقش', 'heading' => 'نقش ها'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافه کردن نقش</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => 'rbac.store', 'method' => 'post'])}}
                                <div class="form-group col-lg-12 mb-30">
                                    {{Form::label('role_title', 'نام نقش',['class' => 'col-lg-4'])}}
                                    {{Form::text('role_title', null, ['class' => 'form-control '])}}
                                </div>
                                @foreach($data as $key => $value)
                                    <div class="form-group mb-30 col-lg-4 col-md-4">
                                        <label class="control-label mb-10 m-t-20"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>{{$value[0]->group}}</span></label>
                                        @foreach($value as $_key => $_value)
                                            <div>
                                                <div class="checkbox checkbox-success">
                                                    {{Form::checkbox("rbac[$_value->id]", true, null, ['id' => "rbac[$_value->id]"])}}
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
@endsection
