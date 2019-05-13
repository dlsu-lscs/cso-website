@extends('Layouts.adminmain')
@section('header')
    <title>Orgs</title>
    <link rel="stylesheet" href="{{asset('css/Admin/ManageOrgs.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('ManageOrgSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
       <div class = "orgscontainer">
            <div class = "--title">Select and Org</div>
            @foreach ($clusters as $key => $cluster)
            <div class = "orgscontainer__section">
                <div class = "--title --org">{{$key}}</div>
                <div class = "--subtitle">{{$meaning[$key]}}</div>
                <div class = "orgscontainer__section__frame">
                    <div class = "orgscontainer__section__frame__left">
                    @foreach ($cluster as $ckey => $item)
                        <div class = "orgscontainer__section__frame__cardcontainer left">
                            <a href = "/csoadmin/manageorgs/{{$item['info']['id']}}">
                                <div class = "orgscontainer__section__frame_card">
                                        <img src = "{{$item['logos']['img']}}" alt = "" class = "clustersection__orgcard--img">
                                </div>
                            </a>
                            <p class = "orgscontainer__section__frame_name"> {{$item['basic']['acronym']}}</p>
                        </div>
                    @endforeach
                    </div> 
                </div>
               
            </div>
            @endforeach
       </div>

    </div>
@endsection
