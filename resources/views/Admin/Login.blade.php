
@extends('Layouts.necessity')
@section('header')
    <title>Login | CSOADMIN</title>
    <link rel="stylesheet" href="{{asset('css/Admin/Login.css')}}">
@endsection

@section('content')
    <div>
        <div class = "logincontainer">
            <div class = "logincontainer__form">
                <div class = "logincontainer__form__label">Username:</div>
                <input type = "text" placeholder = "username" class = "logincontainer__form__input">

                <div class = "logincontainer__form__label">Password:</div>
                <input type = "password" placeholder = "username" class = "logincontainer__form__input">
            </div>
            <div class = "logincontainer__bottom">
                <div class = "logincontainer__bottom__button"> Login </div>
            </div>
        </div>
    </div>
@endsection