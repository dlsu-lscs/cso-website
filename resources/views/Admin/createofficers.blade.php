@extends('Layouts.adminmain')
@section('header')
    <title>Admin | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Admin/Home.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('EditBlogSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">

        <form class="form-horizontal" method="POST" action="{{ route('makeofficers') }}">
        {{ csrf_field() }}  
            <select name = "client">
                @foreach ($clients as $key=>$client)
                    <option value="{{$client->id}}">{{$key+1}}.) {{$client->name}}</option>
                @endforeach
            </select>
            <div class = "form-group">
                {{ Form::label('name', 'name')}}
                {{ Form::text('name', '',['class' => 'input-text', 'placeholder'=> 'Title'])}}
            </div>
            <div class = "form-group">
                {{ Form::label('position', 'position')}}
                {{ Form::text('position', '',['class' => 'input-text', 'placeholder'=> 'Title'])}}
            </div>
            <input type = "submit" value = "submit"/>
        </form>
    </div>
    
@endsection