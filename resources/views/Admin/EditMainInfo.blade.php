@extends('Layouts.adminmain')
@section('header')
    <title>Admin | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Admin/OrgEditor.css')}}">
    <script>
        var ctr = {{count($teams)}};
        function deleteTeam(team){ 
            // alert(team.getAttribute("data-id")); 
            var element = document.getElementById('teams-container').querySelectorAll('[data-team-id="'+team.getAttribute("data-id")+'"]')[0]; 
            console.log(element);
            document.getElementById('teams-container').removeChild(element);
        };

        function addTeam() {
            var div = document.createElement('div');

            div.className = 'team-container';
            div.setAttribute('data-team-id' , '' + ctr);
            div.innerHTML =
                '<div class="team-container" data-team-id="0">\
                        <div class="form-group">\
                            <label for="teams['+ctr+'][name]">Team Name</label><br>\
                            <input class="input-text input-team-name" placeholder="Team Name" name="teams['+ctr+'][name]" type="text" id="teams['+ctr+'][name]">\
                            <input class="input-text input-team-alias" placeholder="Alias" name="teams['+ctr+'][alias]" type="text">\
                        <i class="fa fa-trash" aria-hidden="true" onclick="deleteTeam(this)" data-id="'+ctr+'"></i>\
                        </div>\
                        <div class="form-group">\
                            <label for="teams['+ctr+'][vc]">Vice Chairperson</label>\
                            <input class="input-text" placeholder="Vice Chairperson" name="teams['+ctr+'][vc]" type="text" id="teams['+ctr+'][vc]">\
                        </div>\
                        <div class="form-group">\
                            <label for="teams['+ctr+'][members]">Members [separate with comma (,) | eg. firstname1 lastname1, firstname2 lastname2]</label>\
                            <input class="input-text" placeholder="firstname1 lastname1, firstname2 lastname2" name="teams['+ctr+'][members]" type="text" id="teams['+ctr+'][members]">\
                        </div>\
                        <br><br>\
                    </div>';

            document.getElementById('teams-container').appendChild(div);
            ctr++;
        }
    </script>
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('EditMainInfoSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        <br>
        <div class = "editor-container">
            <div class = "blogform">
                {!! Form::open(['action' => 'AdminController@handleupdatemaininfo', 'method' => 'POST' ]) !!}
                    
                    <h1>Main Information</h1>
                    <div class = "form-group">
                        {{ Form::label('about', 'About Us')}}
                        {{ Form::textarea('about', $about,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'About'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('vision', 'Vision')}}
                        {{ Form::textarea('vision', $vision,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'Vision'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('mission', 'Mission')}}
                        {{ Form::textarea('mission', $mission,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'Mission'])}}
                    </div>
                    <br>
                    <h2>Core Values</h2>
                    <div class = "form-group">
                        {{ Form::label('core[0][name]', 'Core Value #1')}}
                        {{ Form::text('core[0][name]', $core[0]->name,['class' => 'input-text', 'placeholder'=> 'Core Value #1'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('core[0][description]', 'Description')}}
                        {{ Form::textarea('core[0][description]', $core[0]->description,['rows' => '3', 'class' => 'input-textarea', 'placeholder'=> 'Description #1'])}}
                    </div>
                    <br>
                    <div class = "form-group">
                        {{ Form::label('core[1][name]', 'Core Value #2')}}
                        {{ Form::text('core[1][name]', $core[1]->name,['class' => 'input-text', 'placeholder'=> 'Core Value #2'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('core[1][description]', 'Description')}}
                        {{ Form::textarea('core[1][description]', $core[1]->description,['rows' => '3', 'class' => 'input-textarea', 'placeholder'=> 'Description #2'])}}
                    </div>
                    <br>
                    <div class = "form-group">
                        {{ Form::label('core[2][name]', 'Core Value #3')}}
                        {{ Form::text('core[2][name]', $core[2]->name,['class' => 'input-text', 'placeholder'=> 'Core Value #3'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('core[2][description]', 'Description')}}
                        {{ Form::textarea('core[2][description]', $core[2]->description,['rows' => '3', 'class' => 'input-textarea', 'placeholder'=> 'Description #3'])}}
                    </div>
                    <br>
                    <br><hr><br>

                    <h1>Executive Board</h1>
                    @foreach ($eb as $key=>$officer)
                        <div class = "form-group">
                            {{ Form::label('eb['.$key.']', $officer->position)}}
                            <div id = "img-uploader" onclick = "uploadThumbnail()" onmouseover="uploadImageHover()" onmouseout="uploadImageRemove()">
                                <div id = "img-uploader__snack"> Upload Thumbnail </div>
                                {{ Form::text('ebimg['.$key.']', $officer->img,['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> 'invi-img'])}}
                            </div>
                            {{ Form::text('eb['.$key.']', $officer->name,['class' => 'input-text', 'placeholder'=> $officer->position])}}
                        </div>
                        {{-- <div class = "form-group uploadform">
                            
                        </div> --}}
                    @endforeach
                    <br><hr><br>

                    <h1>Executive Teams &nbsp; <i class="fas fa-plus" onclick="addTeam()"></i></h1>
                    <div id="teams-container">
                    @foreach ($teams as $key=>$team)
                    <div class="team-container" data-team-id="{{$key}}">
                        <div class = "form-group">
                            {{ Form::label('teams['.$key.'][name]', 'Team Name')}}<br>
                            {{ Form::text('teams['.$key.'][name]', $team->name,['class' => 'input-text input-team-name', 'placeholder'=> 'Team Name'])}}
                            {{ Form::text('teams['.$key.'][alias]', $team->alias,['class' => 'input-text input-team-alias', 'placeholder'=> 'Alias'])}}
                        <i class="fa fa-trash" aria-hidden="true" onclick="deleteTeam(this)" data-id="{{$key}}"></i>
                        </div>
                        {{-- <div class = "form-group">
                            {{ Form::label('team['.$key.'][alias]', 'Alias')}}
                            {{ Form::text('team['.$key.'][alias]', $team->alias,['class' => 'input-text input-team-alias', 'placeholder'=> 'Alias'])}}
                        </div> --}}
                        <div class = "form-group">
                            {{ Form::label('teams['.$key.'][vc]', 'Vice Chairperson')}}
                            {{ Form::text('teams['.$key.'][vc]', $team->vc,['class' => 'input-text', 'placeholder'=> 'Vice Chairperson'])}}
                        </div>
                        <div class = "form-group">
                            {{ Form::label('teams['.$key.'][members]', 'Members [separate with comma (,) | eg. firstname1 lastname1, firstname2 lastname2]')}}
                            {{ Form::text('teams['.$key.'][members]', implode(", ", $team->members),['class' => 'input-text', 'placeholder'=> 'firstname1 lastname1, firstname2 lastname2'])}}
                        </div>
                        <br>
                    </div>
                    @endforeach
                    </div>
                    
                    {{Form::submit('Update', ['class' => 'button'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
    <script>
        var lfm = function(options, cb) {

        var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';

        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
        }

        function uploadThumbnail(){
            lfm({type: 'image'}, function(url, path) {
                var uploader = document.getElementById("img-uploader");
                uploader.style.backgroundImage = "url("+path+")";
                var inputter = document.getElementById("invi-img");
                inputter.value = path;
            });
        }
    </script>
    
@endsection