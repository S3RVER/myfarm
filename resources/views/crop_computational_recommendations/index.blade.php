@extends('layouts.app', ['title' => 'توصیه های محاسباتی زراعی - '.$data->title, 'heading' => 'توصیه های محاسباتی زراعی - '.$data->title])
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
                                        @if (session('data')['nitrogen'])
                                            <tr>
                                                <td>اوره</td>
                                                <td>{{session('data')['nitrogen']->value}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>اوره (کشاورزی زیستی)</td>
                                                <td>{{session('data')['nitrogen']->value_bio}} کیلوگرم + {{session('data')['nitrogen']->bio_text}}</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['phosphorus'])
                                            <tr>
                                                <td>فسفر</td>
                                                <td>{{session('data')['phosphorus']->value}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>فسفر (کشاورزی زیستی)</td>
                                                <td>{{session('data')['phosphorus']->value_bio}} کیلوگرم + {{session('data')['phosphorus']->bio_text}}</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['potash'])
                                            <tr>
                                                <td>پتاس</td>
                                                <td>{{session('data')['potash']->value}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>پتاس (کشاورزی زیستی)</td>
                                                <td>{{session('data')['potash']->value_bio}} کیلوگرم + {{session('data')['potash']->bio_text}}</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                        @if (session('data')['ph'])
                                            <tr>
                                                <td>گوگرد</td>
                                                <td>{{session('data')['ph']->value}} کیلوگرم</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>گوگرد (کشاورزی زیستی)</td>
                                                <td>{{session('data')['ph']->value_bio}} کیلوگرم + {{session('data')['ph']->bio_text}}</td>
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
                        <a href="{{route('crops.recommendations.edit', $data->id)}}" class="btn btn-success btn-outline btn-icon right-icon"><span>ویرایش مقادیر توصیه محاسباتی</span></a>
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
                        {{Form::open(['route' => ['crops.recommendations.calculate', $data->id], 'method' => 'post','class' => 'form-horizontal'])}}
                        <div class="col-sm-6">
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
                                <label for="ph" class="col-sm-3 control-label">
                                    <span>ph</span>
                                </label>
                                <div class="col-sm-9">
                                    {{Form::text('ph', null, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            @if ($data->has_clay)
                                <div class="form-group">
                                    <label for="clay" class="col-sm-3 control-label">
                                        <span>درصد رس</span>
                                    </label>
                                    <div class="col-sm-9">
                                        {{Form::text('clay', null, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                            @endif
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
