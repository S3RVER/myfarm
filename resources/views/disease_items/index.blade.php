@extends('layouts.app', ['title' => 'مطالب بیماری های عمومی','heading' => 'مطالب بیماری های عمومی - '.$data['self']->title])
@section('content')
    @include('layouts.message')
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
                        <a href="{{route('diseases.items.create',$data['self']->id)}}" class="btn btn-success btn-outline btn-icon right-icon"><i class="fa fa-plus" aria-hidden="true"></i><span>اضافه کردن</span></a>
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
                        <h6 class="panel-title txt-dark">لیست</h6>
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
                                        <th>شناسه</th>
                                        <th>عنوان</th>
                                        <th>دسته بندی</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['items'] as $key => $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->title}}</td>
                                            <td>{{$value->category->title}}</td>
                                            <td>
                                                <a href="{{route('diseases.items.edit',[$data['self']->id,$value->id])}}" class="btn btn-xs btn-primary">ویرایش</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
