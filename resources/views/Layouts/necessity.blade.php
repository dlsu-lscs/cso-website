<html>

<head>
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{!! asset('assets/CSO Logo.png') !!}"/>
    @yield('header')
    <title>{{config('app.name', 'Council of Student Organizations')}}</title>
</head>
<body>
    @include('Layouts.errorsnackbar')
    @yield('content')
    
</body>
</html>