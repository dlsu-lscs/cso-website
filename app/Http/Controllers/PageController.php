<?php

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
        $blogs = Blog::orderBy('id', 'desc')->take(5)->get();
        foreach ($blogs as $blog){
            $longagoy = Carbon::now()->diffInYears($blog->updated_at);
            $longagomo = Carbon::now()->diffInMonths($blog->updated_at);
            $longagod = Carbon::now()->diffInDays($blog->updated_at);
            $longagoh = Carbon::now()->diffInHours($blog->updated_at);
            $longagom = Carbon::now()->diffInMinutes($blog->updated_at);
            $longagos = Carbon::now()->diffInSeconds($blog->updated_at);
            $longago = "Posted ";
            $iss = "";
            if($longagoy >= 1 ){
                $longago.=$longagoy." year";
                if($longagoy > 1){
                    $longago = $longago."s";
                }
            }
            elseif($longagomo >= 1 ){
                $longago.=$longagomo." month";
                if($longagomo > 1){
                    $longago = $longago."s";
                }
            }
            elseif($longagod >= 1 ){
                $longago.=$longagod." day";
                if($longagod > 1){
                    $longago = $longago."s";
                }
            }
            elseif($longagoh >= 1 ){
                $longago.=$longagoh." hour";
                if($longagoh > 1){
                    $longago = $longago."s";
                }
            }
            elseif($longagom >= 1 ){
                $longago.=$longagom." minute";
                if($longagom > 1){
                    $longago = $longago."s";
                }
            }
            else{
                $longago.="a few seconds";
            }
            $longago.=" ago.";
            $blog->longago = $longago;

        }
        $data['blogs'] = $blogs;
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
    public function activities(){
        return view('Home.Activities');
    }
    //
}
