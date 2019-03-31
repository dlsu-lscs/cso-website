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

        <form class="form-horizontal" method="POST" action="{{ route('makecluster') }}">
        {{ csrf_field() }}  
            <select name = "client">
                @foreach ($clients as $key=>$client)
                    <option value="{{$client->id}}">{{$key+1}}.) {{$client->name}}</option>
                @endforeach
            </select>
            <select name = "cluster">
                @foreach ($clusters as $cluster)
                    <option value="{{$cluster->id}}">{{$cluster->name}}</option>
                @endforeach
            </select>

            <input type = "submit" value = "submit"/>
        </form>
    </div>
    
@endsection