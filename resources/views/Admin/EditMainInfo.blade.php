@extends('Layouts.adminmain')
@section('header')
    <title>Edit info | CSO</title>
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
                        {{ Form::label('aboutquote', 'About Quote')}}
                        {{ Form::textarea('aboutquote', $aboutquote,['rows' => '1', 'class' => 'input-textarea', 'placeholder'=> 'Quote'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('about', 'About Us')}}
                        {{ Form::textarea('about', $about,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'About'])}}
                    </div>
                    <div class = "img-uploader" onclick = "uploadThumbnail(this, 'aboutphoto')" onmouseover="oe_uploadImageHover('aboutphotosnack')" onmouseout="oe_uploadImageRemove('aboutphotosnack')">
                        {{ Form::label('aboutphoto', 'About Us Photo')}}
                        <div class = "img-uploader__snack" id="aboutphotosnack"> Upload About Photo </div>
                        {{ Form::text('aboutphoto', $aboutphoto, ['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> 'aboutphoto'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('vision', 'Vision')}}
                        {{ Form::textarea('vision', $vision,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'Vision'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('mission', 'Mission')}}
                        {{ Form::textarea('mission', $mission,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'Mission'])}}
                    </div>
                    <div class = "form-group">
                        {{ Form::label('whoarewe', 'Who Are We?')}}
                        {{ Form::textarea('whoarewe', $whoarewe,['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'Who Are We?'])}}
                    </div>
                    <div class = "form-group">
                        <div class = "img-uploader" onclick = "uploadThumbnail(this, 'whoarewephoto')" onmouseover="oe_uploadImageHover('whoarewephotosnack')" onmouseout="oe_uploadImageRemove('whoarewephotosnack')">
                            {{ Form::label('whoarewephoto', 'Who Are We Photo')}}
                            <div class = "img-uploader__snack" id="whoarewephotosnack"> Upload Who Are We Photo </div>
                            {{ Form::text('whoarewephoto', $whoarewephoto, ['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> 'whoarewephoto'])}}
                        </div>
                    </div>
                    <div class = "form-group">
                        <div class = "img-uploader" onclick = "uploadThumbnail(this, 'bannerphoto')" onmouseover="oe_uploadImageHover('bannerphotosnack')" onmouseout="oe_uploadImageRemove('bannerphotosnack')">
                            {{ Form::label('bannerphoto', 'Banner Photo')}}
                            <div class = "img-uploader__snack" id="bannerphotosnack"> Upload Banner Photo </div>
                            {{ Form::text('bannerphoto', $bannerphoto, ['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> 'bannerphoto'])}}
                        </div>
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
                    <div class = "img-uploader" onclick = "uploadThumbnail(this, '{{$core[0]->name}}')" onmouseover="oe_uploadImageHover('core1')" onmouseout="oe_uploadImageRemove('core1')">
                        {{ Form::label('core[0][img]', $core[0]->name . ' Photo')}}
                        <div class = "img-uploader__snack" id="core1"> Upload Photo </div>
                        {{ Form::text('core[0][img]', $core[0]->img, ['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> '$core[0]->name'])}}
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
                    <div class = "img-uploader" onclick = "uploadThumbnail(this, '{{$core[1]->name}}')" onmouseover="oe_uploadImageHover('core2')" onmouseout="oe_uploadImageRemove('core2')">
                        {{ Form::label('core[1][img]', $core[1]->name . ' Photo')}}
                        <div class = "img-uploader__snack" id="core2"> Upload Photo </div>
                        {{ Form::text('core[1][img]', $core[1]->img,['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> '$core[1]->name'])}}
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
                    <div class = "img-uploader" onclick = "uploadThumbnail(this, '{{$core[2]->name}}')" onmouseover="oe_uploadImageHover('core3')" onmouseout="oe_uploadImageRemove('core3')">
                        {{ Form::label('core[2][img]', $core[2]->name . ' Photo')}}
                        <div class = "img-uploader__snack" id="core3"> Upload Photo </div>
                        {{ Form::text('core[2][img]', $core[2]->img,['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> '$core[2]->name'])}}
                    </div>
                    <br>
                    <br><hr><br>

                    <h1>Executive Board</h1>
                    <div class = "form-group">
                        {{ Form::label('ebdesc', 'EB Description')}}
                        {{ Form::textarea('ebdesc', $ebdesc, ['rows' => '5', 'class' => 'input-textarea', 'placeholder'=> 'The Executive Board'])}}
                    </div>
                    @foreach ($eb as $key=>$officer)
                        <div class = "form-group">
                            {{ Form::label('eb['.$key.']', $officer->position)}}
                            <div class = "img-uploader" onclick = "uploadThumbnail(this, '{{$officer->position}}')" onmouseover="oe_uploadImageHover('{{$officer->position}}')" onmouseout="oe_uploadImageRemove('{{$officer->position}}')">
                                {{ Form::label('ebimg['.$key.']', $officer->position . ' Photo')}}
                                <div class = "img-uploader__snack" id="{{$officer->position}}"> Upload Photo </div>
                                {{ Form::text('ebimg['.$key.']', $officer->img,['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> '$officer->position'])}}
                            </div>
                            {{ Form::text('eb['.$key.']', $officer->name,['class' => 'input-text', 'placeholder'=> '$officer->position'])}}
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
                            {{ Form::text('teams['.$key.'][members]', implode(", ", $team->members), ['class' => 'input-text', 'placeholder'=> 'firstname1 lastname1, firstname2 lastname2'])}}
                        </div>
                        <div class = "form-group">
                            <div class = "img-uploader" onclick = "uploadThumbnail(this, '{{$team->alias}}')" onmouseover="oe_uploadImageHover('{{$team->alias}}')" onmouseout="oe_uploadImageRemove('{{$team->alias}}')">
                                {{ Form::label('teamsimg['.$key.']', $team->alias . ' Logo')}}
                                <div class = "img-uploader__snack" id="{{$team->alias}}"> Upload Team Logo </div>
                                {{ Form::text('teamsimg['.$key.']', $team->img,['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> '$team->alias'])}}
                            </div>
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

        function uploadThumbnail(elem, inputid){
            lfm({type: 'image'}, function(url, path) {
                var uploader = elem;
                uploader.style.backgroundImage = "url("+path+")";
                var inputter = document.getElementById(inputid);
                inputter.value = path;
            });
        }

        function oe_uploadImageHover(id){
            var snack = document.getElementById(id);
            snack.classList.add("img-uploader__hovered");
        }

        function oe_uploadImageRemove(id){
            var snack = document.getElementById(id);
            snack.classList.remove("img-uploader__hovered");
        }
    </script>
    
@endsection