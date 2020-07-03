@extends('layouts.app', ['title' => 'ویرایش مطلب به محصول - بیماری های عمومی', 'heading' => 'مطالب عمومی بیماری ها'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش مطلب - بیماری های عمومی - {{$data['self']->title}}</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                        {{Form::open(['route' => ['diseases.items.update',[$data['self']->id,$data['item']->id]],'method' => 'put','class' => 'form-horizontal','files'=>true])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>عنوان<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('title',$data['item']->title,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category_id" class="col-sm-3 control-label">
                                        <span>مجموعه<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::select('category_id',$select, $data['item']->category_id,['placeholder' => 'انتخاب...','class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="col-sm-3 control-label">
                                        <span>عکس</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::file('image')}}
                                    </div>
                                </div>
                                @if ($data->image_path)
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            <span>عکس</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <img style="max-height: 200px" src="{{asset('storage/'.$data->image_path)}}">
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="content" class="col-sm-3 control-label">
                                        <span>مطلب</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::textarea('content',$data['item']->content, ['class' => 'form-control'])}}
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
                            {{Form::open(['route' => ['diseases.items.destroy',[$data['self']->id,$data['item']->id]], 'method' => 'delete'])}}
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
