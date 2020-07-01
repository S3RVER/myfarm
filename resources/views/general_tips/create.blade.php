@extends('layouts.app', ['title' => '', 'heading' => ''])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافه کردن مطلب توصیه عمومی</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => 'general-tips.store', 'method' => 'post','class' => 'form-horizontal'])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>نام محصول<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('title', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <div>عنوان اول (ثابت){{Form::text('item[1][heading]', null, ['class' => 'form-control'])}}</div>
                                        <div>
                                            <div>عنوان دوم{{Form::text('item[1][sub_heading][]', null, ['class' => 'form-control'])}}</div>
                                            <div>مطلب{{Form::textarea('item[1][content][]', null, ['class' => 'form-control'])}}</div>
                                        </div>
                                        <div>
                                            <div>عنوان دوم{{Form::text('item[1][sub_heading][]', null, ['class' => 'form-control'])}}</div>
                                            <div>مطلب{{Form::textarea('item[1][content][]', null, ['class' => 'form-control'])}}</div>
                                        </div>
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
@endsection
