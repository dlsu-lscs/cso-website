@extends('Layouts.adminmain')
@section('header')
    <title>Admin | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Admin/OrgEditor.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('ManageOrgSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        <br>
        <div class = "editor-container">
            <h1>{{$client->name}}</h1>
            <h2>({{$client->acronym}})</h2><br>
            <div class = "blogform">
                {!! Form::open(['action' => 'AdminController@handleupdateinfo', 'method' => 'POST' ]) !!}
                    {{-- <select name = "client">
                        @foreach ($clients as $key=>$client)
                            <option value="{{$client->id}}">{{$key+1}}.) {{$client->name}}</option>
                        @endforeach
                    </select> --}}
                    <div class = "form-group">
                        {{ Form::label('color1', 'color1')}}
                        {{ Form::text('color1', $clientinfo->color1,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('color2', 'color2')}}
                        {{ Form::text('color2', $clientinfo->color2,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('color3', 'color3')}}
                        {{ Form::text('color3', $clientinfo->color3,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('color4', 'color4')}}
                        {{ Form::text('color4', $clientinfo->color4,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('aboutus', 'About Us')}}
                        {{ Form::textarea('aboutus', $clientinfo->aboutus,['id' => 'article-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('vision', 'Vision')}}
                        {{ Form::textarea('vision', $clientinfo->vision,['id' => 'vission-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('mission', 'Mission')}}
                        {{ Form::textarea('mission', $clientinfo->mission,['id' => 'mission-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('weburl', 'weburl')}}
                        {{ Form::text('weburl', $clientinfo->weburl,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('email', 'email')}}
                        {{ Form::text('email', $clientinfo->email,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('fburl', 'fburl')}}
                        {{ Form::text('fburl', $clientinfo->fburl,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('twitterurl', 'twitterurl')}}
                        {{ Form::text('twitterurl', $clientinfo->twitterurl,['class' => 'input-text', 'placeholder'=> 'Title'])}}
                    </div>
                    <br>
                    {{Form::submit('Update', ['class' => 'urmom'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
    <script>

    </script>
    
@endsection