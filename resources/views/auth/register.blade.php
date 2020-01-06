@extends('layouts.app')

@section('content')
<!--ログイン画面を作る-->
<div class="signUp">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="wrap">
                <p class="form-title">Taskun</p>
                <p class="form-title">-毎日のこと、きっちり管理-</p>
                <p class="form-subtitle">Create Your Account</p>
                <form class="login" action="{{ route('register')}}" accept-charset="UTF-8" method="POST">
                {{ csrf_field() }}
                
                <div class="{{ $errors->has('name') ? ' has-error' : '' }}"></div>
                <input id="new_user" type="text" placeholder="Username" name="name" value="{{ old('name' )}}" reqiured autofocus/>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                
                <input type="text" placeholder="Mailadress" name="email" id="email" type="email" required autofocus/>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                <input type="password" placeholder="Password (6文字以上)" name="password" autocomplete="off" required/>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                </div>
                
                <div class="form-group">
                <input type="password" placeholder="Passwordを再度入力" name="password_confirmation" autocomplete="off" required/>
                </div>
                
                <input data-disable-with="アカウントを作成" name="commit" type="submit" value="Create Account" class="btn btn-success btn-sm" />
                <a href="{{ route('login') }}" data-disable-with="ログイン画面" value="Login Form" class="btn-login btn-info btn-sm">
                    LOGIN FORM
                </a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
