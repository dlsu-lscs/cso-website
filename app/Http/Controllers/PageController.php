<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\clusters;
use App\clientinfo;
use App\clientlogos;
use App\orgphotos;
use App\officer;
use Mail;

class PageController extends Controller
{
    public function index(){
        $clusters = clusters::all();
        $data = array();
        $data['clusters'] = array();
        foreach ($clusters as $cluster) {
            $data['clusters'][$cluster->name] = array();
            $clientinfos = clientinfo::where('cluster_id', $cluster->id)->get();
            foreach ($clientinfos as $key => $clientinfo){
                $client = client::where('id', $clientinfo->client_id)->first();
                $clientlogo = clientlogos::where('client_id', $client->id)->first();
                $data['clusters'][$cluster->name][$key] = $clientlogo;
            }
        }
        // $title = "sample title";
        // return view('Home.Home', compact('title'));
        // return view('Home.Home')->with('title', $title);

        // $data = array(
        //     'title' => 'services',
        //     'body' => ['test', 'me', 'xd']
        // );
        // return view('Home.Home')->with($data);

        return view('Home.Home')->with($data);
    }
    public function organizations(){
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
    public function orgpage($id){
        $clientinfo = clientinfo::find($id);

        if($clientinfo){
            $client = client::where('id', $clientinfo->client_id)->first();

            $clientlogo = clientlogos::where('client_id', $client->id)->first();

            $orgphoto1 = orgphotos::where('client_id', $client->id)->first();

            $orgofficers = officer::where('client_id', $client->id)->get();

            $data = array();
            $data['clientinfo'] = $clientinfo;
            $data['client'] = $client;
            $data['clientlogo'] = $clientlogo;
            $data['orgphoto1'] = $orgphoto1;
            $data['orgofficers'] = $orgofficers;
            return view('Home.Orgpage')->with($data);
        }
        else{
            return view('Home.About');
        }
    }
    public function about(){
        return view('Home.About');
    }
    
    public function contact() {
        return view('Home.Contact');
    }

    public function email(Request $request) {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'subject' => 'required', 'message' => 'required' ]);
        $email = "krizialynn@gmail.com"; // TO email, most likely cso officers
        $cc = array($request->get('email'));
        $bcc = "krizia_chiu@dlsu.edu.ph";
        $type = $request->get('type') ?: "";
        $subject = $request->get('subject') ?: "";
        date_default_timezone_set("Asia/Manila");
        $data = array('type' => $type,"name" => $request->get('name'), "body" => $request->get('message'), 'email' => $request->get('email'), 'date' => date("Y-m-d H:i:s"));
        $name = $request->get('name');
        Mail::send('Home.Mail', $data, function ($message) use ($name, $email, $cc, $bcc, $type, $subject) {
            $message->to($email)
                    ->cc($cc)
                    // ->bcc($bcc)
                    ->subject('['.strtoupper($type).'] '.$subject);
            $message->from('unknown.anony123@gmail.com','KKK');
        });
        return back()->with('success', 'Thanks for contacting us!'); 
    }

}
