@extends('Layouts.adminmain')
@section('header')
    <title>Admin | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Admin/OrgEditor.css')}}">
    <link rel="stylesheet" href="{{asset('js/Admin/addofficers.js')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('ManageOrgSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        <br>
        <div class = "editor-container">
           

            <div class = "blogform">
                
                {!! Form::open(['action' => 'AdminController@handleorgeditor', 'method' => 'POST' ]) !!}
                    {{-- <select name = "client">
                        @foreach ($clients as $key=>$client)
                            <option value="{{$client->id}}">{{$key+1}}.) {{$client->name}}</option>
                        @endforeach
                    </select> --}}

                    <div style = "overflow: hidden; height: auto; width: 100%;">
                        <div class = "left" style = "width: 400px;">
                        <h1>{{$client->name}}</h1>
                        <h2>({{$client->acronym}})</h2><br>
                        </div>
                        <div class = "right">
                            <div class = "imageuploader img-uploader" onclick = "uploadThumbnail(this, 'logoimg')" onmouseover="oe_uploadImageHover('logosnack')" onmouseout="oe_uploadImageRemove('logosnack')" style = "background-image: url('{{$clientlogo->img}}');">
                                    <div class = "img-uploader__snack" id = "logosnack"> Upload Thumbnail </div>
                                    {{ Form::text('img', $clientlogo->img,['class' => 'shadow-text invi-img', 'placeholder'=> 'Thumbnail', 'id'=> 'logoimg'])}}
            
                            </div>
            
                        </div>
                        
                        <div class = "block-container left" style = "overflow: hidden; margin: 5px;">
                            <h2>General</h2>
                            <div class = "divider"></div>
                            <div class = "form-group left --colorgroup">
                                Name<br>
                                <input type = "text" value = "{{$client->name}}" name = "cname" placeholder = 'client name' class = "colortext" style = "width: 300px;">
                            </div>
                            <div class = "form-group left --colorgroup">
                                acronym<br>
                                <input type = "text" value = "{{$client->acronym}}" name = "cacro" placeholder = 'client acronym' class = "colortext">
                            </div>
                            </div>
                    </div>

                    <div class = "block-container" style = "overflow: hidden; background-color: var(--cso-green);">
                        <h2 style = "color: white;">Photos</h2>
                        <div class = "divider" style = "background-color: var(--cso-gold);"></div>
                        <div class = "form-group left --colorgroup photocard">
                            <div style = "width: 100%; text-align: center;">General Photo</div>
                            <div class = "img-uploader"  class = "generalphoto-uploader" onclick = "uploadThumbnail(this, 'generalimg')" onmouseover="oe_uploadImageHover('generalphotosnack')" onmouseout="oe_uploadImageRemove('generalphotosnack')" style = "background-image: url('{{$clientlogo->img}}');">
                                    <div class = "img-uploader__snack" id = "generalphotosnack"> Upload General Photo </div>
                                    {{ Form::text('generalphoto', $clientlogo->img,['class' => 'shadow-text invi-img', 'placeholder'=> 'Thumbnail', 'id'=> 'generalimg'])}}
            
                            </div>
                        </div>
                        <div class = "form-group left --colorgroup photocard">
                            <div style = "width: 100%; text-align: center;">About Photo</div>
                            <div class = "img-uploader"  class = "generalphoto-uploader" onclick = "uploadThumbnail(this, 'aboutimg')" onmouseover="oe_uploadImageHover('aboutphotosnack')" onmouseout="oe_uploadImageRemove('aboutphotosnack')" style = "background-image: url('{{$clientlogo->img}}');">
                                    <div class = "img-uploader__snack" id = "aboutphotosnack"> Upload About Photo </div>
                                    {{ Form::text('aboutphoto', $clientlogo->img,['class' => 'shadow-text invi-img', 'placeholder'=> 'Thumbnail', 'id'=> 'aboutimg'])}}
            
                            </div>
                        </div>
                        <div class = "form-group left --colorgroup photocard">
                            <div style = "width: 100%; text-align: center;">Vision Photo</div>
                            <div class = "img-uploader"  class = "generalphoto-uploader" onclick = "uploadThumbnail(this, 'visionimg')" onmouseover="oe_uploadImageHover('visionphotosnack')" onmouseout="oe_uploadImageRemove('visionphotosnack')" style = "background-image: url('{{$clientlogo->img}}');">
                                    <div class = "img-uploader__snack" id = "visionphotosnack"> Upload Vision Photo </div>
                                    {{ Form::text('visionphoto', $clientlogo->img,['class' => 'shadow-text invi-img', 'placeholder'=> 'Thumbnail', 'id'=> 'visionimg'])}}
            
                            </div>
                        </div>
                        <div class = "form-group left --colorgroup photocard">
                            <div style = "width: 100%; text-align: center;">Mission Photo</div>
                            <div class = "img-uploader"  class = "generalphoto-uploader" onclick = "uploadThumbnail(this, 'missionimg')" onmouseover="oe_uploadImageHover('missionphotosnack')" onmouseout="oe_uploadImageRemove('missionphotosnack')" style = "background-image: url('{{$clientlogo->img}}');">
                                    <div class = "img-uploader__snack" id = "missionphotosnack"> Upload Mission Photo </div>
                                    {{ Form::text('missionphoto', $clientlogo->img,['class' => 'shadow-text invi-img', 'placeholder'=> 'Thumbnail', 'id'=> 'missionimg'])}}
            
                            </div>
                        </div>
                    </div>
                        
                    <div class = "block-container" style = "overflow: hidden;">
                    <h2>Style</h2>
                    <div class = "divider"></div>
                    <div class = "form-group left --colorgroup">
                        color1<br>
                        <input type = "text" value = "{{$clientinfo->color1}}" name = "color1" placeholder = 'color1' class = "colortext">
                    </div>
                    <div class = "form-group left --colorgroup">
                        color2<br>
                        <input type = "text" value = "{{$clientinfo->color2}}" name = "color2" placeholder = 'color2' class = "colortext">
                    </div>
                    <div class = "form-group left --colorgroup">
                        color3<br>
                        <input type = "text" value = "{{$clientinfo->color3}}" name = "color3" placeholder = 'color2' class = "colortext">
                    </div>
                    <div class = "form-group left --colorgroup">
                        color4<br>
                        <input type = "text" value = "{{$clientinfo->color4}}" name = "color4" placeholder = 'color4' class = "colortext">
                    </div>
                    </div>
                    


                    <div class = "block-container">
                        <h2>Content</h2>
                        <div class = "divider"></div>
                        <div class = "form-group">
                            {{ Form::label('aboutus', 'About Us')}}
                            {{ Form::textarea('aboutus', $clientinfo->aboutus,['id' => 'article-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                        </div>
                        <br>
                        <div class = "form-group">
                            {{ Form::label('vision', 'Vision')}}
                            {{ Form::textarea('vision', $clientinfo->vision,['id' => 'vission-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                        </div>
                        <br>
                        <div class = "form-group">
                            {{ Form::label('mission', 'Mission')}}
                            {{ Form::textarea('mission', $clientinfo->mission,['id' => 'mission-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                        </div>
                    </div>
                    
                    <div class = "block-container" style = "overflow: hidden;">
                        <h2>Socials</h2>
                        <div class = "divider"></div>
                        <div class = "form-group left --colorgroup">
                            weburl<br>
                            <input type = "text" value = "{{$clientinfo->weburl}}" name = "weburl" placeholder = 'weburl' class = "colortext">
                        </div>
                        <div class = "form-group left --colorgroup">
                            email<br>
                            <input type = "text" value = "{{$clientinfo->email}}" name = "email" placeholder = 'email' class = "colortext">
                        </div>
                        <div class = "form-group left --colorgroup">
                            fburl<br>
                            <input type = "text" value = "{{$clientinfo->fburl}}" name = "fburl" placeholder = 'fburl' class = "colortext">
                        </div>
                        <div class = "form-group left --colorgroup">
                            twitterurl<br>
                            <input type = "text" value = "{{$clientinfo->twitterurl}}" name = "twitterurl" placeholder = 'twitterurl' class = "colortext">
                        </div>
                    </div>
                    
                    <div class = "form-group"><input name = "cid" value = "{{$client->id}}" style = "display: none;"></div>
                    
                    <script src="{{asset('js/Admin/addofficers.js')}}"></script>
                    <div class = "block-container" style = "overflow: hidden;">
                            <h2>Officers</h2>
                            <div class = "divider"></div>
                            <div class = "officerformgroup">
                                    <div class = "left pluscontainer" onclick = "addofficer()"><div class = "add-officer"><i class = "fa fa-plus"></i></div></div>
                            </div>
                            <div class = "officer-containerpart">
                                @foreach ($officers as $officer)
                                <div class = "officerformgroup --group-{{$officer->id}}">
                                    <div class = "left minuscontainer" onclick = "deleteofficer(this)"><div class = "remove-officer"><i class = "fa fa-minus"></i></div></div>
                                    <div class = "form-group left --colorgroup --officergroup">
                                        Name<br>
                                    <input type = "text" name = "officer-name--{{$officer->id}}" placeholder = 'Name' class = "colortext officertext" value = "{{$officer->name}}">
                                    </div>

                                    <div class = "form-group left --colorgroup --officergroup">
                                        Position<br>
                                        <input type = "text" name = "officer-position--{{$officer->id}}" placeholder = 'Position' class = "colortext officertext" value = "{{$officer->position}}">
                                    </div>
                                </div>
                                @endforeach
                                    

                            </div>

                            

                            
                    </div>
                    <br>
                    {{Form::submit('UPDATE', ['class' => 'UpdateButton'])}}
                    <br><br><br>
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