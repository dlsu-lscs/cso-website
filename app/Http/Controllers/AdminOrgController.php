<?php

/*
    |--------------------------------------------------------------------------
    | Admin Org Controller
    |--------------------------------------------------------------------------
    |
    | Author:   Dalan, Gerald F.
    | Description:
    |   This controller handles the communication to the
    | orgs db.
    |
    | Date/Ver: January 3, 2020 V 1.00 *
    | Routes - Function: 
    | *GET
    |   /csoadmin/org/add - create
    |   /csoadmin/manageorgs - manageorgs
    |   /csoadmin/manageorgs/{id} - orgeditor
    | POST*
    |   /csoadmin/org/add - store
    | *PUT/PATCH
    |   /csoadmin/handlemanageorgs - handlemanageorgs
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog; // Blog model uses namespace App;
use App\orgphotos;
use App\client;
use App\clusters;
use App\clientinfo;
use App\clientlogos;
use App\officer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AdminOrgController extends Controller {

    /** Check whether the admin user is login.
     *
     *  @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => 'login']);
    }

    /** Show the form for creating a new org.
     *
     *  @return \Illuminate\Http\Response
     */
    public function create() {
        $clusters = clusters::all();
        return view('Orgs.Create')->with(['clusters' => $clusters]);
    }

    // Shows the list of organizations
    public function manageorgs(Request $request) {
        $clusters = clusters::all();
        $data = array();
        $data['clusters'] = array();
        $data['meaning'] = array();
        foreach ($clusters as $cluster) {
            $data['clusters'][$cluster->name] = array();
            $data['meaning'][$cluster->name] = $cluster->meaning;
            $clientinfos = clientinfo::where('cluster_id', $cluster->id)->get();
            
            foreach ($clientinfos as $key => $clientinfo) {
                $client = client::where('id', $clientinfo->client_id)->first();
                $clientlogo = clientlogos::where('client_id', $client->id)->first();
                $data['clusters'][$cluster->name][$key] = array();
                $data['clusters'][$cluster->name][$key]['info'] = $clientinfo;
                $data['clusters'][$cluster->name][$key]['basic'] = $client;
                $data['clusters'][$cluster->name][$key]['logos'] = $clientlogo;
            }
        }
        return view('Admin.manageorgs')->with($data);
    }

    // Edits an organization
    public function orgeditor($id) {
        $clientinfo = clientinfo::find($id);
        // check if client/org exist
        if ($clientinfo) {
            // get data of the client/org
            $data = array();
            
            $client = client::where('id', $clientinfo->client_id)->first();
            $clientlogo = clientlogos::where('client_id', $clientinfo->client_id)->first();
            $officers = officer::where('client_id', $client->id)->get();
            $orgphotos = orgphotos::where([
                    ['client_id', '=', $client->id],
                    ['type', '<', '5']
                ])->orderBy('type', 'ASC')
                ->get();

            $types = array(
                'generalphoto',
                'aboutphoto',
                'visionphoto',
                'missionphoto'
            );

            foreach ($orgphotos as $photo)
                $data[$types[$photo->type - 1]] = $photo->img;

            $data['clientinfo'] = $clientinfo;
            $data['client'] = $client;
            $data['clientlogo'] = $clientlogo;
            $data['officers'] = $officers;
            return view('Admin.orgeditor')->with($data);
        } else {
            return redirect('/csoadmin/manageorgs');
        }
    }

    // Stores the new org on the database
    public function store(Request $request) {
        $this->validate($request, [
            'cname' => 'required|max:200',
            'cacro' => 'required|max:200',
            'img' => 'required',
            'aboutus' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'college' => 'required',
            'generalphoto' => 'required',
            'aboutphoto' => 'required',
            'visionphoto' => 'required',
            'missionphoto' => 'required',
            'email' => 'nullable|email',
            'weburl' => "nullable|regex:/(https:\/\/)?(www.)?[a-zA-z0-9]*\.com/",
            'fburl' => "nullable|regex:/(https:\/\/)?(www.)?[a-zA-z0-9]*\.com/",
            'twitterurl' => "nullable|regex:/(https:\/\/)?(www.)?[a-zA-z0-9]*\.com/"
        ],[
            'cname.required' => 'The organization\'s name is required',
            'cacro.required' => 'The organization\'s acronym is required',
            'img.required' => 'The organization\'s logo is required',
            'aboutus.required' => 'The organization\'s about us field is required',
            'vision.required' => 'The organization\'s vision field is required',
            'mission.required' => 'The organization\'s mission field is required',
            'college.required' => 'The organization\'s cluster field is required',
            'generalphoto.required' => 'The organization\'s general photo is required',
            'aboutphoto.required' => 'The organization\'s about photo is required',
            'visionphoto.required' => 'The organization\'s vision photo is required',
            'missionphoto.required' => 'The organization\'s mission photo is required'
        ]);

        // client
        $client = new client;
        $client->name = $request->input("cname");
        $client->acronym = $request->input("cacro");
        $client->save();

        // clientlogo
        $clientlogo = new clientlogos;
        $clientlogo->img = $request->input("img");
        $clientlogo->client_id = $client->id;
        $clientlogo->save();

        // clientinfo
        $clientinfo = new clientinfo;
        $clientinfo->color1 = $request->input("color1");
        $clientinfo->color2 = $request->input("color2");
        $clientinfo->color3 = $request->input("color3");
        $clientinfo->color4 = $request->input("color4");
        $clientinfo->aboutus = $request->input("aboutus");
        $clientinfo->vision = $request->input("vision");
        $clientinfo->mission = $request->input("mission");
        $clientinfo->weburl = $request->input("weburl");
        $clientinfo->email = $request->input("email");
        $clientinfo->fburl = $request->input("fburl");
        $clientinfo->twitterurl = $request->input("twitterurl");
        $clientinfo->cluster_id = $request->input("college");
        $clientinfo->client_id = $client->id;
        $clientinfo->save();

        // make 4 photos
        $generalimg = new orgphotos;
        $generalimg->img = $request->input("generalphoto");
        $generalimg->client_id = $client->id;
        $generalimg->type = 1; // general image
        $generalimg->save();

        $aboutimg = new orgphotos;
        $aboutimg->img = $request->input("aboutphoto");
        $aboutimg->client_id = $client->id;
        $aboutimg->type = 2; // about image
        $aboutimg->save();

        $visionimg = new orgphotos;
        $visionimg->img = $request->input("visionphoto");
        $visionimg->client_id = $client->id;
        $visionimg->type = 3; // vision image
        $visionimg->save();

        $missionimg = new orgphotos;
        $missionimg->img = $request->input("missionphoto");
        $missionimg->client_id = $client->id;
        $missionimg->type = 4; // mission image
        $missionimg->save();

        // officers
        foreach($request->input() as $key => $value) {
            if($value) {
                if(substr($key, 0, 18) == "officer-name--none") {
                    $inputkey = substr($key, 18);
                    
                    if ($request->input("officer-position--none".$inputkey) == '')
                        continue;

                    $newofficer = new officer;
                    $newofficer->name = $value;
                    $newofficer->position = $request->input("officer-position--none".$inputkey);
                    $newofficer->client_id = $client->id;
                    $newofficer->save();
                }
            }
        }

        return redirect('/csoadmin/org/add');
    }
    
    // Updates the client/org info
    public function update(Request $request) {

        $clientid = $request->input('cid');

        $client = client::find($clientid);
        $clientinfo = clientinfo::where('client_id', $clientid)->first();
        $clientlogo = clientlogos::where('client_id', $clientid)->first();

        $officers = officer::where('client_id', $client->id)->get();

        $orgphotos = orgphotos::where([
                ['client_id', '=', $client->id],
                ['type', '<', '5']
            ])->orderBy('type', 'ASC')
            ->get();

        foreach ($officers as $officer) {
            if ($request->input('officer-name--'.$officer->id)) {
                if($request->input('officer-name--'.$officer->id) != $officer->name || $request->input('officer-position--'.$officer->id) != $officer->position){
                    $officer->name = $request->input('officer-name--'.$officer->id);
                    $officer->position = $request->input('officer-position--'.$officer->id);
                    $officer->save();
                }
            }   
            else {
                $officer->delete();
            }
        }

        if($client){
            $client->name = $request->input("cname");
            $client->acronym = $request->input("cacro");

            foreach($request->input() as $key => $value){
                if($value){
                    if($key == "color1"){
                        $clientinfo->color1 = $value;
                    }
                    elseif($key == "color2"){
                        $clientinfo->color2 = $value;
                    }
                    elseif($key == "color3"){
                        $clientinfo->color3 = $value;
                    }
                    elseif($key == "color4"){
                        $clientinfo->color4 = $value;
                    }
                    elseif($key == "aboutus"){
                        $clientinfo->aboutus = $value;
                    }
                    elseif($key == "vision"){
                        $clientinfo->vision = $value;
                    }
                    elseif($key == "mission"){
                        $clientinfo->mission = $value;
                    }
                    elseif($key == "weburl"){
                        $clientinfo->weburl = $value;
                    }
                    elseif($key == "email"){
                        $clientinfo->email = $value;
                    }
                    elseif($key == "fburl"){
                        $clientinfo->fburl = $value;
                    }
                    elseif($key == "twitterurl"){
                        $clientinfo->twitterurl = $value;
                    }
                    elseif($key == "img"){
                        $clientlogo->img = $value;
                    }

                    elseif(substr($key, 0, 18) == "officer-name--none"){
                        $newofficer = new officer;
                        $inputkey = substr($key, 18);
                        $newofficer->name = $value;
                        $newofficer->position = $request->input("officer-position--none".$inputkey);
                        $newofficer->client_id = $clientid;
                        $newofficer->save();
                    }
                }
            }

            $client->save();
            $clientinfo->save();
            if ($clientlogo)
                $clientlogo->save();

            $photos = array(true, true, true, true);
            $orgpht = array(
                $request->input("generalphoto"),
                $request->input("aboutphoto"),
                $request->input("visionphoto"),
                $request->input("missionphoto")
            );

            // update the photos that are needed to be updated
            foreach ($orgphotos as $photo) {
                $type = $photo->type - 1;
                $photo->img = $orgpht[$type];
                $photos[$type] = false;
                $photo->save();
            }

            // add photos if doesn't exist, some org don't have ones
            for ($i = 0; $i < 4; $i++) {
                // check if the image is not new and the new image is not null
                if ($photos[$i] && $orgpht[$i]) {
                    $photo = new orgphotos;
                    $photo->img = $orgpht[$i];
                    $photo->client_id = $client->id;
                    $photo->type = (int) $i + 1;
                    $photo->save();
                }
            }

            return redirect('/csoadmin/manageorgs/'.$clientinfo->id)->with('success',  $client->acronym.' info edited!');
        }
        return redirect('/csoadmin/manageorgs')->with('fail', 'Error! Client doesnnt exist!');
    }

}