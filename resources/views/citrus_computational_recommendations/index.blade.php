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
                                        <th>سن درخت</th>
                                        <th>میزان مصرف کود نیتروژن خالص</th>
                                        <th>میزان مصرف کود کشاورزی زیستی</th>
                                        <th>میزان مصرف فسفر خالص</th>
                                        <th>میزان مصرف پتاس خالص</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{(session('data')['tree_age']) ? session('data')['tree_age'].' سال' : null}}</td>
                                            <td>{{(session('data')['nitrogen_fertilizer']) ? session('data')['nitrogen_fertilizer'].' کیلوگرم' : null}}</td>
                                            <td>{{(session('data')['nitrogen_fertilizer_bio']) ? session('data')['nitrogen_fertilizer_bio'].' کیلوگرم + یک بسته ازتوبارور' : null}}</td>
                                            <td>{{(session('data')['phosphorus']) ? session('data')['phosphorus'].' کیلوگرم' : null}}</td>
                                            <td>{{(session('data')['potash']) ? session('data')['potash'].' کیلوگرم' : null}}</td>
                                        </tr>
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
                        <a href="" class="btn btn-success btn-outline btn-icon right-icon"><span>فرمول توصیه محاسباتی</span></a>
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
                                    <label for="organic_material" class="col-sm-3 control-label">
                                        <span>مواد آلی</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('organic_material', null, ['class' => 'form-control'])}}
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
