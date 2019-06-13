<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog; // Blog model uses namespace App;
use App\client;
use App\clusters;
use App\clientinfo;
use App\clientlogos;
use App\officer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'login']);
    }

    public function index(){
        return view('Admin.Home');
    }

    public function login(){
        return view('Admin.Login');
    }

    public function editblog($id)
    {
        //
        $blog = Blog::find($id);
        return view('Admin.Edit')->with('blog', $blog);
    }
    public function updatedraft(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if($request->input('img') != ''){
            $blog->img = $request->input('img');
        }
        if($request->input('author') != ''){
            $blog->author = $request->input('author');
        }
        $blog->type_id = 1;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Updated');;
    }

    public function viewblogs(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(6);

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
        return view('Admin.ViewBlogs')->with('blogs', $blogs);
    }
    //
    public function preview(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->img = $request->input('img');
        $blog->author = $request->input('author');
        $blog->type_id = 1;
        $blog->updated_at = Carbon::now();
        return view('Admin.preview')->with('blog', $blog);
        //
    }
    public function draft(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if($request->input('img') != ''){
            $blog->img = $request->input('img');
        }
        if($request->input('author') != ''){
            $blog->author = $request->input('author');
        }
        $blog->type_id = 1;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Created');
    }
    public function publish(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if($request->input('img') != ''){
            $blog->img = $request->input('img');
        }
        if($request->input('author') != ''){
            $blog->author = $request->input('author');
        }
        $blog->type_id = 2;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Created');
    }
    public function delete(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if($request->input('img') != ''){
            $blog->img = $request->input('img');
        }
        if($request->input('author') != ''){
            $blog->author = $request->input('author');
        }
        $blog->type_id = 3;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Created');
    }


    public function createclusters(Request $request){
        $clients = client::all();
        $clusters = clusters::all();
        $data = array(
            'clients' => $clients,
            'clusters' => $clusters
        );
        return view('Admin.createcluster')->with($data);
    }

    public function handlecreateclusters(Request $request){
        
        // Create Blog
        // $clientinfo = new clientinfo;
        // $clientinfo->client_id = $request->input('client');
        // $clientinfo->cluster_id = $request->input('cluster');

        // $clientinfo->aboutus = "";
        // $clientinfo->vision = "";
        // $clientinfo->mission = "";
        // $clientinfo->save();

        for($i=21; $i<44; $i++){
            $clientinfo = new clientinfo;
            $clientinfo->client_id = $i;
            if($i <= 28){
                $clientinfo->cluster_id = 3;
            }
            elseif($i <= 35){
                $clientinfo->cluster_id = 4;
            }
            else{

                $clientinfo->cluster_id = 5;
            }

            $clientinfo->aboutus = "";
            $clientinfo->vision = "";
            $clientinfo->mission = "";
            $clientinfo->save();
        }

        return redirect('/csoadmin/makeclusters')->with('success', 'cluster info Created');
    }

    public function updateinfo(Request $request){
        $clients = client::all();
        // $clusters = clusters::all();
        // // $infos = $clients->clientinfos;
        // $data = array(
        //     'clients' => $clients,
        // );
        return view('Admin.updateinfo')->with('clients', $clients);
    }
    public function handleupdateinfo(Request $request){

        $clientid = $request->input('client');
        $clientinfo = clientinfo::where('client_id', $clientid)->first();
        if($request->input('color1') != ''){
            $clientinfo->color1 = $request->input('color1');
        }
        else{
            $clientinfo->color1 = '';
        }
        if($request->input('color2') != ''){
            $clientinfo->color2 = $request->input('color2');
        }
        else{
            $clientinfo->color2 = '';
        }
        if($request->input('color3') != ''){
            $clientinfo->color3 = $request->input('color3');
            
        }
        else{
            $clientinfo->color3 = '';
        }
        if($request->input('color4') != ''){        
            $clientinfo->color4 = $request->input('color4');
            
        }
        else{
            $clientinfo->color4 = '';
        }
        if($request->input('aboutus') != ''){
            $clientinfo->aboutus = $request->input('aboutus');
            
        }
        else{
            $clientinfo->aboutus = '';
        }
        if($request->input('vision') != ''){
            $clientinfo->vision = $request->input('vision');
            
        }
        else{
            $clientinfo->vision = '';
        }
        if($request->input('mission') != ''){
            $clientinfo->mission = $request->input('mission');
            
        }
        else{
            $clientinfo->mission = '';
        }
        if($request->input('weburl') != ''){
            $clientinfo->weburl = $request->input('weburl');
            
        }
        else{
            $clientinfo->weburl = '';
        }
        if($request->input('email') != ''){
            $clientinfo->email = $request->input('email');
            
        }
        else{
            $clientinfo->email = '';
        }
        if($request->input('fburl') != ''){
            $clientinfo->fburl = $request->input('fburl');
            
        }
        else{
            $clientinfo->fburl = '';
        }
        if($request->input('twitterurl') != ''){
            $clientinfo->twitterurl = $request->input('twitterurl');
            
        }
        else{
            $clientinfo->twitterurl = '';
        }
        $clientinfo->save();
        return redirect('/csoadmin/updateinfo')->with('success', 'cluster info '.$clientinfo->color1.' '.$request->input('color2'));
    }

    public function handleupdatemaininfo(Request $request){
        $list = array('about', 'vision', 'mission');
        // $arr_vclist = array('amt_vc', 'orgres_vc', 'hrd_vc', 'mnl_vc', 'pmt_vc', 'pnp_vc', 'adm_vc', 'aps_vc', 'fin_vc');
        // $arr_mlist = array('amt_m', 'orgres_m', 'hrd_m', 'mnl_m', 'pmt_m', 'pnp_m', 'adm_m', 'aps_m', 'fin_m');
        Log::error('HEY');
        Log::error($request->input());
        Log::error('HEY');
        Log::error($request->input('teams'));
        echo 'Hey';
        $config = include base_path() .'/config/constants.php';

        for ($i = 0; $i < count($list); $i++) {
            $config[$list[$i]] = $request->input($list[$i], '');
        } 
        foreach($request->input('core.*') as $key => $core) {
            $config['core'][$key]->name = $core['name'];
            $config['core'][$key]->description = $core['description'];
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
            // $config['eb'][$key]->name = $name;
        }
        $config['teams'] = $tmp;
        // for ($i = 0; $i < count($arr_vclist); $i++) {
        //     $config[$arr_vclist[$i]] = $request->input($arr_vclist[$i], '') ?: '';
        // } 
        
        // for ($i = 0; $i < count($arr_mlist); $i++) {
        //     $config[$arr_mlist[$i]] = preg_split('/([\ ]*[\,][\ ]*)+/', $request->input($arr_mlist[$i], ''));
        // } 
        // $config['about']= $about;
        // $config['vision']= $vision;
        // $config['mission']= $mission;
        // $config['chairperson']= $chairperson;
        // $config['internals']= $internals;
        // $config['externals']= $externals;
        // $config['finance']= $finance;
        // $config['activities']= $activities;
        // $data['about'] = $config['about'];
        file_put_contents(base_path() .'/config/constants.php', '<?php return ' . var_export($config, true) . ';');
        return redirect('/csoadmin/editmaininfo')->with('success', 'Changed Successfully!');
    }

    public function createofficers(Request $request){
        $clients = client::all();
        // $clusters = clusters::all();
        $data = array(
            'clients' => $clients,
        );
        return view('Admin.createofficers')->with($data);
    }

    public function handlecreateofficers(Request $request){

        $officer = new officer;
        $officer->name = $request->input('name');
        $officer->position = $request->input('position');
        $officer->client_id = $request->input('client');
        $officer->save();
        return redirect('/csoadmin/makeofficers')->with('success', 'cluster info Created');
    }

    public function manageorgs(Request $request){

        $clusters = clusters::all();
        $data = array();
        $data['clusters'] = array();
        $data['meaning'] = array();
        foreach ($clusters as $cluster) {
            $data['clusters'][$cluster->name] = array();
            $data['meaning'][$cluster->name] = $cluster->meaning;
            $clientinfos = clientinfo::where('cluster_id', $cluster->id)->get();
            foreach ($clientinfos as $key => $clientinfo){
                $client = client::where('id', $clientinfo->client_id)->first();
                $clientlogo = clientlogos::where('client_id', $client->id)->first();
                $data['clusters'][$cluster->name][$key] = array();
                $data['clusters'][$cluster->name][$key]['info'] = $clientinfo;
                $data['clusters'][$cluster->name][$key]['basic'] = $client;
                $data['clusters'][$cluster->name][$key]['logos'] = $clientlogo;
            }
        }
        // return view('Home.Orgs')->with($data);
        return view('Admin.manageorgs')->with($data);
    }

    public function maininfoeditor(){
        // $clientinfo = clientinfo::find($id);
        // if($clientinfo){
        //     $data = array();
        //     $data['clientinfo'] = $clientinfo;
            
        //     $client = client::where('id', $clientinfo->client_id)->first();
        //     $data['client'] = $client;

        //     return view('Admin.orgeditor')->with($data);
        // }
        // else{
        //     return redirect('/csoadmin/manageorgs');
        // }
        $data = array();
        $config = include base_path() .'/config/constants.php';
        // $data['about'] = $config['about'];
        // $data['vision'] = $config['vision'];
        // $data['mission'] = $config['mission'];
        // $data['chairperson'] = $config['chairperson'];
        // $data['internals'] = $config['internals'];
        // $data['externals'] = $config['externals'];
        // $data['finance'] = $config['finance'];
        // $data['activities'] = $config['activities'];
        $data = $config;
        // join array of strings to a single string
        // $data['amt_m'] = implode(", ", $data['amt_m']);
        // $data['orgres_m'] = implode(", ", $data['orgres_m']);
        // $data['hrd_m'] = implode(", ", $data['hrd_m']);
        // $data['mnl_m'] = implode(", ", $data['mnl_m']);
        // $data['pmt_m'] = implode(", ", $data['pmt_m']);
        // $data['pnp_m'] = implode(", ", $data['pnp_m']);
        // $data['adm_m'] = implode(", ", $data['adm_m']);
        // $data['aps_m'] = implode(", ", $data['aps_m']);
        // $data['fin_m'] = implode(", ", $data['fin_m']);
        return view('Admin.EditMainInfo')->with($data);
    }

    public function orgeditor($id){
        $clientinfo = clientinfo::find($id);
        if($clientinfo){
            $data = array();
            $data['clientinfo'] = $clientinfo;
            
            $client = client::where('id', $clientinfo->client_id)->first();
            $data['client'] = $client;

            return view('Admin.orgeditor')->with($data);
        }
        else{
            return redirect('/csoadmin/manageorgs');
        }
    }
    
}
