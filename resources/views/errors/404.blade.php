@extends('Layouts.main')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/contact.css')}}">
@endsection

@section('content')
    <!-- NAVBAR -->
    @include('Layouts.navbar')
    <!-- /NAVBAR -->
    <div class="main-container">
        <section class="header">
          <div class="header-details container">
            <div>
              <h1>404</h1>
              <p>Page Not found</p>
            </div>
          </div>
        </section>
    </div>
@endsection