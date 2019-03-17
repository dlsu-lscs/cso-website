<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog; // Blog model uses namespace App;
use Carbon\Carbon;
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
            $blog->lonago = $longago;

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

}
