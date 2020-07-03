@extends('layouts.app', ['title' => 'کاربران', 'heading' => 'کاربران'])
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
                        <a href="{{route($url.'.create')}}" class="btn btn-success btn-outline btn-icon right-icon"><i class="fa fa-plus" aria-hidden="true"></i><span>اضافه کردن</span></a>
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
                                        <th>نام کاربری</th>
                                        <th>نقش ها</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->mobile}}</td>
                                            <td>
                                                @foreach($value->roles as $_key => $_value)
                                                    {!! $_value->linked_title !!} {{(!$loop->last) ? '-':''}}
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="{{route($url.'.edit', $value->id)}}">ویرایش</a>
                                                @if(config('abilities')['users.destroy'] and auth()->id() !== $value->id)
                                                    {{Form::open(['route' => [$url.'.destroy', $value->id], 'method' => 'delete'])}}
                                                        <button class="btn btn-danger btn-xs">حذف</button>
                                                    {{Form::close()}}
                                                @endif
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
