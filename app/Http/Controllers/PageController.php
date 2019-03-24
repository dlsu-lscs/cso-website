<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\clusters;
use App\clientinfo;
use App\clientlogos;
use App\orgphotos;

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
            $data = array();
            $data['clientinfo'] = $clientinfo;
            $data['client'] = $client;
            $data['clientlogo'] = $clientlogo;
            $data['orgphoto1'] = $orgphoto1;

            return view('Home.Orgpage')->with($data);
        }
        else{
            return view('Home.About');
        }
    }
    public function about(){
        return view('Home.About');
    }
    //
}
