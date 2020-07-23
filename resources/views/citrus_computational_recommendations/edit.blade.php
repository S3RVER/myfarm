@extends('layouts.app', ['title' => 'مقادیر توصیه های محاسباتی مرکبات', 'heading' => 'مقادیر توصیه های محاسباتی مرکبات'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش مقادیر توصیه های محاسباتی مرکبات</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                        {{Form::open(['route' => ['citrus_c_r.update'], 'method' => 'put', 'class' => 'form-horizontal'])}}
                            <div class="col-sm-12">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <h5 class="panel-title txt-dark">میزان مصرف کود اوره در مرکبات</h5>
                                        <table class="table data-table table-hover display pb-30">
                                            <thead>
                                            <tr>
                                                <th>سن درخت</th>
                                                <th>مواد آلی زیر ۱</th>
                                                <th>مواد آلی بین ۱ و ۲</th>
                                                <th>مواد آلی بالای ۳</th>

                                                <th>مواد آلی زیر ۱  <br>(کشاورزی زیستی)</th>
                                                <th>مواد آلی بین ۱ و ۲  <br>(کشاورزی زیستی)</th>
                                                <th>مواد آلی بالای ۳  <br>(کشاورزی زیستی)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < count($data); $i++)
                                                <tr>
                                                    <td>{{$data[$i]->tree_age}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][nitrogen_less_than_1]', $data[$i]->nitrogen_less_than_1, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][nitrogen_between_1_and_2]', $data[$i]->nitrogen_between_1_and_2, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][nitrogen_more_than_2]', $data[$i]->nitrogen_more_than_2, ['class' => 'form-control'])}}</td>

                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][nitrogen_less_than_1_bio]', $data[$i]->nitrogen_less_than_1_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][nitrogen_between_1_and_2_bio]', $data[$i]->nitrogen_between_1_and_2_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][nitrogen_more_than_2_bio]', $data[$i]->nitrogen_more_than_2_bio, ['class' => 'form-control'])}}</td>
                                                </tr>
                                            @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <h5 class="panel-title txt-dark">میزان مصرف سوپرفسفات تریپل در مرکبات</h5>
                                        <table class="table data-table table-hover display pb-30">
                                            <thead>
                                            <tr>
                                                <th>سن درخت</th>
                                                <th>زیر ۵ پی پی ام</th>
                                                <th>بین ۵ تا ۱۰ پی پی ام</th>
                                                <th>بین ۱۰ تا ۱۵ پی پی ام</th>

                                                <th>زیر ۵ پی پی ام  <br>(کشاورزی زیستی)</th>
                                                <th>بین ۵ تا ۱۰ پی پی ام  <br>(کشاورزی زیستی)</th>
                                                <th>بین ۱۰ تا ۱۵ پی پی ام  <br>(کشاورزی زیستی)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < count($data); $i++)
                                                <tr>
                                                    <td>{{$data[$i]->tree_age}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][phosphorus_less_than_5]', $data[$i]->phosphorus_less_than_5, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][phosphorus_between_5_and_10]', $data[$i]->phosphorus_between_5_and_10, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][phosphorus_between_10_and_15]', $data[$i]->phosphorus_between_10_and_15, ['class' => 'form-control'])}}</td>

                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][phosphorus_less_than_5_bio]', $data[$i]->phosphorus_less_than_5_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][phosphorus_between_5_and_10_bio]', $data[$i]->phosphorus_between_5_and_10_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][phosphorus_between_10_and_15_bio]', $data[$i]->phosphorus_between_10_and_15_bio, ['class' => 'form-control'])}}</td>
                                                </tr>
                                            @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <h5 class="panel-title txt-dark">میزان مصرف سولفات پتاسیم در مرکبات</h5>
                                        <table class="table data-table table-hover display pb-30">
                                            <thead>
                                            <tr>
                                                <th>سن درخت</th>
                                                <th>زیر ۱۵۰</th>
                                                <th>بین ۱۵۰ تا ۲۵۰</th>
                                                <th>بین ۲۵۰ تا ۳۰۰</th>

                                                <th>زیر ۱۵۰  <br>(کشاورزی زیستی)</th>
                                                <th>بین ۱۵۰ تا ۲۵۰  <br>(کشاورزی زیستی)</th>
                                                <th>بین ۲۵۰ تا ۳۰۰  <br>(کشاورزی زیستی)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < count($data); $i++)
                                                <tr>
                                                    <td>{{$data[$i]->tree_age}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][potash_less_than_150]', $data[$i]->potash_less_than_150, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][potash_between_150_and_250]', $data[$i]->potash_between_150_and_250, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][potash_between_250_and_300]', $data[$i]->potash_between_250_and_300, ['class' => 'form-control'])}}</td>

                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][potash_less_than_150_bio]', $data[$i]->potash_less_than_150_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][potash_between_150_and_250_bio]', $data[$i]->potash_between_150_and_250_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data[$i]->tree_age.'][potash_between_250_and_300_bio]', $data[$i]->potash_between_250_and_300_bio, ['class' => 'form-control'])}}</td>
                                                </tr>
                                            @endfor
                                            </tbody>
                                        </table>
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
