@extends('layouts.app', ['title' => 'مقادیر توصیه های محاسباتی زراعی', 'heading' => 'مقادیر توصیه های محاسباتی زراعی'])
@section('content')
    @include('layouts.message')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">اضافه کردن مقادیر توصیه های محاسباتی زراعی - {{$data['crop']->title}}</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                        {{Form::open(['route' => ['crops.recommendations.store', $data['crop']->id], 'method' => 'post', 'class' => 'form-horizontal'])}}
                            <div class="col-sm-12">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table data-table table-hover display pb-30">
                                            <thead>
                                            <tr>
                                                <th>ماده</th>
                                                <th>از</th>
                                                <th>تا</th>
                                                <th>مقدار</th>
                                                <th>مقدار<br>(کشاورزی زیستی)</th>
                                                <th>تعداد بسته ها<br>(کشاورزی زیستی)</th>
                                                <th>متن<br>(کشاورزی زیستی)</th>
                                                @if($data['crop']->has_clay)
                                                    <th>رس ۳۰٪</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{Form::select('kind', $select , null , ['class' => 'form-control','placeholder' => 'انتخاب...'])}}</td>
                                                    <td>{{Form::text('from', null, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('to', null, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('value', null, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('value_bio', null, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('fee_bio', null, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('bio_text', null, ['class' => 'form-control'])}}</td>
                                                    @if($data['crop']->has_clay)
                                                        <td>{{Form::checkbox('clay', true)}}</td>
                                                    @endif
                                                </tr>
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

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">ویرایش مقادیر توصیه های محاسباتی زراعی - {{$data['crop']->title}}</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper">
                    <div class="panel-body">
                        <div class="form-wrap">
                            {{Form::open(['route' => ['crops.recommendations.store', $data['crop']->id], 'method' => 'put', 'class' => 'form-horizontal'])}}
                            <div class="col-sm-12">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table data-table table-hover display pb-30">
                                            <thead>
                                            <tr>
                                                <th>ماده</th>
                                                <th>از</th>
                                                <th>تا</th>
                                                <th>مقدار</th>
                                                <th>مقدار<br>(کشاورزی زیستی)</th>
                                                <th>تعداد بسته ها<br>(کشاورزی زیستی)</th>
                                                <th>متن<br>(کشاورزی زیستی)</th>
                                                @if($data['crop']->has_clay)
                                                    <th>رس ۳۰٪</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < count($data['recommendation']); $i++)
                                                <tr>
                                                    <td>{{Form::select('data['.$data['recommendation'][$i]->id.'][kind]', $select , $data['recommendation'][$i]->kind , ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data['recommendation'][$i]->id.'][from]', $data['recommendation'][$i]->from, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data['recommendation'][$i]->id.'][to]', $data['recommendation'][$i]->to, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data['recommendation'][$i]->id.'][value]', $data['recommendation'][$i]->value, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data['recommendation'][$i]->id.'][value_bio]', $data['recommendation'][$i]->value_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data['recommendation'][$i]->id.'][fee_bio]', $data['recommendation'][$i]->fee_bio, ['class' => 'form-control'])}}</td>
                                                    <td>{{Form::text('data['.$data['recommendation'][$i]->id.'][bio_text]', $data['recommendation'][$i]->bio_text, ['class' => 'form-control'])}}</td>
                                                    @if($data['crop']->has_clay)
                                                        <td>{{Form::checkbox('data['.$data['recommendation'][$i]->id.'][clay]', true, $data['recommendation'][$i]->clay)}}</td>
                                                    @endif
                                                    <td>
                                                        {{Form::open(['route' => ['crops.recommendations.destroy', $data['recommendation'][$i]->id], 'method' => 'post'])}}
                                                            <button class="btn btn-danger btn-xs">حذف</button>
                                                        {{Form::close()}}
                                                    </td>
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
