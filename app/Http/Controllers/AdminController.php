<?php

/*
    |--------------------------------------------------------------------------
    | Admin Controller
    |--------------------------------------------------------------------------
    |
    | Author:   Dalan, Gerald F.
    | Description:
    |   Admin Page Functions
    |
    | Date/Ver: January 3, 2020 V 1.01
    | Routes - Function: 
    | *GET
    |   /csoadmin - index
    |   /csoadmin/login - login
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Blog; // Blog model uses namespace App;
// use App\client;
// use App\clusters;
// use App\clientinfo;
// use App\clientlogos;
// use App\officer;
// use Carbon\Carbon;
// use Illuminate\Support\Facades\Log;

class AdminController extends Controller {

    /** Check whether the admin user is login.
     *
     *  @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => 'login']);
    }

    // Redirects to csoadmin/login
    public function index() {
        return redirect('csoadmin/login');
    }

    // Returns a view of the login page
    public function login() {
        return view('Admin.Login');
    }

    // Loads about us data from /config/constants.php and returns Edit CSO Info page
    public function maininfoeditor(){
        $data = array();
        $config = include base_path() .'/config/constants.php';
        $data = $config;
        return view('Admin.EditMainInfo')->with($data);
    }

    public function handleupdatemaininfo(Request $request){
        $list = array('about', 'aboutquote', 'aboutphoto', 'vision', 'mission', 'whoarewe', 'whoarewephoto', 'bannerphoto', 'ebdesc');
        $config = include base_path() .'/config/constants.php';

        for ($i = 0; $i < count($list); $i++) {
            $config[$list[$i]] = $request->input($list[$i], '');
        } 
        foreach($request->input('core.*') as $key => $core) {
            $config['core'][$key]->name = $core['name'];
            $config['core'][$key]->description = $core['description'];
            $config['core'][$key]->img = $core['img'];
        }
        foreach($request->input('eb') as $key => $name) {
            $config['eb'][$key]->name = $name;
        }
        foreach($request->input('ebimg') as $key => $name) {
            $config['eb'][$key]->img = $name;
        }
        $tmp = array();
        foreach($request->input('teams.*') as $key=>$team) {
            $tmp[$key] = (object) array(
                'name' => $team['name'],
                'alias' => strtoupper($team['alias']),
                'vc' => $team['vc'],
                'members' => preg_split('/([\ ]*[\,][\ ]*)+/', $team['members']),
            );
        }
        foreach($request->input('teamsimg.*') as $key=>$teamimg) {
            $tmp[$key]->img = $teamimg;
        }
        $config['teams'] = $tmp;
        file_put_contents(base_path() .'/config/constants.php', '<?php return ' . var_export($config, true) . ';');
        return redirect('/csoadmin/editmaininfo')->with('success', 'Changed Successfully!');
    }
}
