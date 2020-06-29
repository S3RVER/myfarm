@extends('layouts.app', ['title' => 'دسته بندی مطالب', 'heading' => 'دسته بندی مطالب'])
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
                        <a href="{{route('categories.create')}}" class="btn btn-success btn-outline btn-icon right-icon"><i class="fa fa-plus" aria-hidden="true"></i><span>اضافه کردن</span></a>
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
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->title}}</td>
                                            <td>
                                                <a href="{{route('categories.edit', $value->id)}}" class="btn btn-primary btn-xs">ویرایش</a>
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
