@extends('layouts.app')

@section('content')
<!--ログイン画面を作る-->
<div class="signIn">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="wrap">
                <p class="form-title">Taskun</p>
                <p class="form-title">-毎日のこと、きっちり管理-</p>
                <p class="form-subtitle">Please Login</p>
                <form class="login" action="{{ route('login')}}" accept-charset="UTF-8" method="POST">
                {{ csrf_field() }}
                
                <input type="text" placeholder="Mailadress" name="email" id="email" type="email" required autofocus/>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <input type="password" placeholder="Password" name="password" required/>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                
                <input name="commit" type="submit" value="Sign In" class="btn btn-success btn-sm" />
                <a href="{{ route('register') }}" class="make-account">MAKE ACCOUNT</a>
                
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
