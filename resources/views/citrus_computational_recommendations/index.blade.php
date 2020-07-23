@extends('layouts.app', ['title' => 'توصیه های محاسباتی مرکبات', 'heading' => 'توصیه های محاسباتی مرکبات'])
@section('content')
    @include('layouts.message')
    @if(session('data'))
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">جواب توصیه ها</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table data-table table-hover display pb-30">
                                    <thead>
                                    <tr>
                                        <th>عنوان</th>
                                        <th>مقدار</th>
                                        <th>قیمت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if (session('data')['tree_age'])
                                            <tr>
                                                <td>سن درخت</td>
                                                <td>{{session('data')['tree_age'].' سال'}}</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['nitrogen'])
                                            <tr>
                                                <td>اوره</td>
                                                <td>{{session('data')['nitrogen']}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['nitrogen_bio'])
                                            <tr>
                                                <td>اوره (کشاورزی زیستی)</td>
                                                <td>{{session('data')['nitrogen_bio']}} کیلوگرم + یک بسته ازتوبارور</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['phosphorus'])
                                            <tr>
                                                <td>سوپر فسفات تریپل</td>
                                                <td>{{session('data')['phosphorus']}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['phosphorus_bio'])
                                            <tr>
                                                <td>سوپر فسفات تریپل (کشاورزی زیستی)</td>
                                                <td>{{session('data')['phosphorus_bio']}} کیلوگرم + یک بسته فسفاته بارور</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['potash'])
                                            <tr>
                                                <td>سولفات پتاسیم</td>
                                                <td>{{session('data')['potash']}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['potash_bio'])
                                            <tr>
                                                <td>سولفات پتاسیم (کشاورزی زیستی)</td>
                                                <td>{{session('data')['potash_bio']}} کیلوگرم + یک بسته پتا بارور</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">عملیات</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <a href="{{route('citrus_c_r.edit')}}" class="btn btn-success btn-outline btn-icon right-icon"><span>ویرایش مقادیر توصیه محاسباتی</span></a>
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
                        <h6 class="panel-title txt-dark">محاسبه</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        {{Form::open(['route' => 'citrus_c_r_.calculate', 'method' => 'post','class' => 'form-horizontal'])}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title" class="col-sm-3 control-label">
                                        <span>سن درخت<span class="text-danger">*</span></span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('tree_age', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nitrogen" class="col-sm-3 control-label">
                                        <span>مواد آلی</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('nitrogen', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phosphorus" class="col-sm-3 control-label">
                                        <span>فسفر</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('phosphorus', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="potash" class="col-sm-3 control-label">
                                        <span>پتاس</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('potash', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{Form::submit('محاسبه', ['class' => 'btn btn-success'])}}
                                </div>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
