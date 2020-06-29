@extends('layouts.app', ['title' => 'سفارشات فروشگاه', 'heading' => 'سفارشات فروشگاه'])
@section('content')
    @include('layouts.message')
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
                                        <th>نام کاربر</th>
                                        <th>استان - شهر</th>
                                        <th>تعداد محصولات</th>
                                        <th>مبلغ سفارش</th>
                                        <th>وضعیت پرداخت</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ ثبت</th>
                                        <th>تاریخ آخرین تغییر</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
{{--                                                <a href="{{route('invoices.edit', $value->id)}}">ویرایش</a>--}}
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
