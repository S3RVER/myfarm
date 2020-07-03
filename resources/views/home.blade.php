@extends('layouts.app',['title' => 'صفحه اول'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">نمودار سفارشات ۳۰ روز اخیر</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div id="morris_line_chart" class="morris-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">تعداد ثبت نام های جدید ۳۰ روز اخیر</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div id="karbar" class="morris-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
