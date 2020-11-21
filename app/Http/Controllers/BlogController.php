<?php

/*
    |--------------------------------------------------------------------------
    | Blog Controller
    |--------------------------------------------------------------------------
    |
    | Author:   Dalan, Gerald F.
    | Description:
    |   This controller handles the communication to the
    | blogs db. Normal Users can only view blogs.
    |
    | Date/Ver: December 23, 2019 V 1.00
    | Routes - Function
    | *GET
    |   /blogs - index
    |   /blogs/create - create
    |   /blogs/{blog} - show
    |   /blogs/{blog}/edit - edit
    | *POST
    |   /blogs - store
    | *PUT/PATCH
    |   /blogs/{blog} - update
    | *DELETE
    |   /blogs/{blog} - destroy
*/

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog; // Blog model uses namespace App;
use Carbon\Carbon; // use DB;

class BlogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        include(app_path() . '/Functions/BlogFunctions.php');

        $data = array();

        $data['search'] = "";
        \Log::info('Entered');
        $blogs = Blog::orderBy('id', 'desc')->take(5)->get();

        if($request->input('search')){
            $searchval = $request->input('search');
            $data['search'] = $searchval;
            $blogs = DB::table('blogs')
                ->where('type_id', '=', 2)
                ->where('body', 'like', '%'.$searchval.'%')
                ->orWhere('title', 'like', '%'.$searchval.'%')
                ->orWhere('author', 'like', '%'.$searchval.'%')
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();
        } else {
            $blogs = DB::table('blogs')
                ->where('type_id', '=', 2)
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();
        }

        $data['blogs'] = longAgo($blogs);
        return view('Blogs.Blogs')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Blogs.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->img = $request->input('img');
        $blog->author = $request->input('author');
        $blog->type_id = 1;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $blog = Blog::find($id);
        return view('Blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $blog = Blog::find($id);
        return view('Blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Updated');
    }
}
