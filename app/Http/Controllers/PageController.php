<?php

/*
    |--------------------------------------------------------------------------
    | Page Controller
    |--------------------------------------------------------------------------
    |
    | Author:   Dalan, Gerald F.
    | Desc:     Home Pages.
    | Date/Ver: December 23, 2019 V 1.00
    | Routes - Function
    | *GET
    |   / - index
    |   /organizations - organizations
    |   /organizations/{id} - orgpage
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\Blog;
use App\clusters;
use App\clientinfo;
use App\clientlogos;
use App\orgphotos;
use App\officer;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Mail;

class PageController extends Controller {

    // Home page
    public function index() {
        include(app_path() . '/Functions/BlogFunctions.php');

        $clusters = clusters::all();
        $data = array();
        $data['clusters'] = array();

        //////////////////UNCOMMENT THIS
        // foreach ($clusters as $cluster) {
        //     $data['clusters'][$cluster->name] = array();
        //     $clientinfos = clientinfo::where('cluster_id', $cluster->id)->get();
        //     foreach ($clientinfos as $key => $clientinfo){
        //         $client = client::where('id', $clientinfo->client_id)->first();
        //         $clientlogo = clientlogos::where('client_id', $client->id)->first();
        //         $data['clusters'][$cluster->name][$key] = $clientlogo;
        //     }
        // }

        $blogs = Blog::orderBy('id', 'desc')
            ->where('type_id', '=', 2)
            ->take(5)
            ->get();

        $data['blogs'] = longAgo($blogs);

        return view('Home.Home')->with($data);
    }

    // Organization Tab
    public function organizations() {
        $clusters = clusters::all();
        $data = array();
        $data['clusters'] = array();
        foreach ($clusters as $cluster) {
            $data['clusters'][$cluster->name] = array();
            $clientinfos = clientinfo::where('cluster_id', $cluster->id)->get();
            foreach ($clientinfos as $key => $clientinfo){
                $client = client::where('id', $clientinfo->client_id)->first();
                $clientlogo = clientlogos::where('client_id', $client->id)->first();
                $data['clusters'][$cluster->name][$key] = array();
                $data['clusters'][$cluster->name][$key]['info'] = $clientinfo;
                $data['clusters'][$cluster->name][$key]['logos'] = $clientlogo;
            }
        }
        return view('Home.Orgs')->with($data);;
    }

    // Specific Organization
    public function orgpage($id) {
        $clientinfo = clientinfo::find($id);

        if ($clientinfo) {
            $client = client::where(
                    'id',
                    $clientinfo->client_id
                )->first();
            $clientlogo = clientlogos::where(
                    'client_id',
                    $client->id
                )->first();
            $orgphotos = orgphotos::where(
                    'client_id',
                    $client->id
                )->orderBy('type', 'ASC')
                ->get();

            $orgofficers = officer::where(
                    'client_id',
                    $client->id
                )->get();

            $data = array();

            // set each picture
            foreach($orgphotos as $photo) {
                \Log::info("Type: " . $photo->type);
                switch($photo->type) {
                    case 1:
                        $data['generalphoto'] = $photo->img;
                    break;
                    case 2:
                        $data['aboutphoto'] = $photo->img;
                    break;
                    case 3:
                        $data['visionphoto'] = $photo->img;
                    break;
                    case 4:
                        $data['missionphoto'] = $photo->img;
                    break;
                }
            }

            $data['clientinfo'] = $clientinfo;
            $data['client'] = $client;
            $data['clientlogo'] = $clientlogo;
            $data['orgofficers'] = $orgofficers;
            return view('Home.Orgpage')->with($data);
        } else {
            return view('Home.About'); // no organization
        }
    }

    public function about() {
        $data = array();
        $config = include base_path() .'/config/constants.php';
        $data = $config;
        return view('Home.About')->with($data);
    }

    public function activities() {
        return view('Home.Activities');
    }
    
    public function contact() {
        return view('Home.Contact');
    }

    public function email(Request $request) {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'subject' => 'required', 'message' => 'required' ]);
        $email = "cso@dlsu.edu.ph"; // TO email, most likely cso officers
        $cc = array($request->get('email'));
        $bcc = "cso@dlsu.edu.ph";
        $type = $request->get('type') ?: "";
        $subject = $request->get('subject') ?: "";
        date_default_timezone_set("Asia/Manila");
        $data = array('type' => $type,"name" => $request->get('name'), "body" => $request->get('message'), 'email' => $request->get('email'), 'date' => date("Y-m-d H:i:s"));
        $name = $request->get('name');
        Mail::send('Home.Mail', $data, function ($message) use ($name, $email, $cc, $bcc, $type, $subject) {
            $message->to($email)
                    ->cc($cc)
                    ->bcc($bcc)
                    ->subject('['.strtoupper($type).'] '.$subject);
            $message->from('cso@dlsu.edu.ph','CSO Website');
        });
        return back()->with('success', 'Thanks for contacting us!'); 
    }

}
