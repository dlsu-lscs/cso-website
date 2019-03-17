<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // $title = "sample title";
        // return view('Home.Home', compact('title'));
        // return view('Home.Home')->with('title', $title);

        // $data = array(
        //     'title' => 'services',
        //     'body' => ['test', 'me', 'xd']
        // );
        // return view('Home.Home')->with($data);

        return view('Home.Home');
    }
    //
}
