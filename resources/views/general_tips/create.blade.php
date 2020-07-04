@extends('layouts.app', ['title' => 'اضافه کردن مطلب توصیه های عمومی', 'heading' => 'مطالب توصیه های عمومی'])
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
                            {{Form::open(['route' => 'general-tips.store', 'method' => 'post','class' => 'form-horizontal','files'=>true])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>نام محصول<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('title', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>مجموعه<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::select('category_id', $select, null,['placeholder' => 'انتخاب...','class' => 'form-control'])}}
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



                                <style>
                                    .child {
                                        background: #f5f5f5;
                                        margin: 15px;
                                        width: 100%;
                                        display: inline-block;
                                        padding: 10px;
                                        border-radius: 7px;
                                    }
                                    .addtitle, .delete-group {
                                        background: #ccc;
                                        padding: 5px;
                                        border: none;
                                        border-radius: 100px;
                                        float: left;
                                        width: 33px;
                                        height: 33px;
                                        font-size: 18px;
                                        display: inline-block;
                                        margin: 5px;
                                    }
                                    .delete-group {
                                        width: 20px;
                                        height: 20px;
                                        font-size: 12px;
                                        background: #ff9292;
                                        color: #fff;
                                        padding: 0;
                                        margin-top: 12px;
                                    }
                                    .addtitle {
                                        display: inline-block;
                                    }
                                    .find-text,.title-two {
                                        margin-top: 15px;
                                        width: 49%;
                                        float: right;
                                        display: inline-block;
                                    }
                                    .find-text {
                                        margin-right: 9px;
                                    }
                                    .find-text {
                                        /*height: 50px !important;*/
                                    }
                                    .addformOne {
                                        width: 40px;
                                        height: 40px;
                                        background: #ccc;
                                        padding: 5px;
                                        border: none;
                                        border-radius: 100px;
                                        font-size: 18px;
                                        display: inline-block;
                                        margin: 5px;
                                    }
                                </style>


                                <div class="duplicatorOne">
                                    <div class="appendOne">
                                        <div class="child">
                                            <div class="duplicatorTwo">
                                                <div class="fixedd">عنوان اول (ثابت){{Form::text('item[1][heading]', null, ['class' => 'form-control'])}}</div>
                                                <div class="appendTwo">
                                                    <div class="childTwo">
                                                        <div class="title-two">عنوان دوم{{Form::text('item[1][sub_heading][]', null, ['class' => 'form-control'])}}</div>
                                                        <div class="find-text">مطلب{{Form::textarea('item[1][content][]', null, ['class' => 'form-control', 'rows' => 4])}}</div>
                                                        <hr>
                                                    </div>
                                                    <button class="addtitle fa fa-plus" type="button" onclick="duplicatorTwo(this)"></button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="fa fa-plus addformOne" onclick="duplicatorOne()"></button>


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
    <script src="{{asset('assets/js/duplicator.js')}}"></script>
@endsection
