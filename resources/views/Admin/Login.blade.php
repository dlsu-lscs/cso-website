
@extends('Layouts.necessity')
@section('header')
    <title>Login | CSOADMIN</title>
    <link rel="stylesheet" href="{{asset('css/Admin/Login.css')}}">
@endsection

@section('content')
    <div>
        <div class = "logincontainer">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}  
                <div class = "logincontainer__form">
                    <div class = "logincontainer__form__errors">

                        @if ($errors->has('email'))
                            <div>{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div class = "logincontainer__form__label">Username:</div>
                    <input name = "email" type = "text" placeholder = "username" class = "logincontainer__form__input" required>

                    <div class = "logincontainer__form__label">Password:</div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input name = "password" type = "password" placeholder = "username" class = "logincontainer__form__input" required>
                </div>
                <div class = "logincontainer__bottom">
                    <button type = "submit" class = "logincontainer__bottom__button"> Login </button>
                </div>
            </form>
        </div>
    </div>
@endsection