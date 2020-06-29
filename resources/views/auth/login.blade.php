@extends('layouts.nomenu')
@section('content')
    <div class="table-struct full-width full-height">
        <div class="table-cell vertical-align-middle auth-form-wrap">
            <div class="auth-form  ml-auto mr-auto no-float">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="mb-30">
                            <h3 class="text-center txt-dark mb-10">ورود به پنل</h3>
                        </div>
                        <div class="form-wrap">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-10" for="exampleInputEmail_2">نام کاربری</label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left control-label mb-10" for="exampleInputpwd_2">رمز عبور</label>
                                    <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">فراموشی رمز عبور؟</a>
                                    <div class="clearfix"></div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>

                                <div class="form-group">
                                    <div class="checkbox checkbox-primary pr-10 pull-left">
                                        <input id="checkbox_2" type="checkbox">
                                        <label for="checkbox_2">مرا به یاد بیار</label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary  btn-rounded">ورود</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
