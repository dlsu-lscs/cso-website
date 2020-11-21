<?php

/*
    |--------------------------------------------------------------------------
    | Admin Blog Controller
    |--------------------------------------------------------------------------
    | 
    | Author:   Dalan, Gerald F.
    | Description:
    |   This controller handles the communication to the blogs db.
    | The admin can also update/delete/view the blogs that will be
    | seen on the site.
    |
    | Date/Ver: January , 2019 V 1.00 *
    | Routes - Function:
    | *GET
    |   /csoadmin/blogs - index
    |   /csoadmin/blogs/create - create
    |   /csoadmin/blogs/{blog} - show
    |   /csoadmin/blogs/{edit}/edit - edit
    | *POST
    |   /csoadmin/blogs - store
    |   /csoadmin/preview - preview
    | *PUT/PATCH
    |   /csoadmin/blogs/{blog} - update
    | *DELETE
    |   /csoadmin/blogs/{blog} - destroy
*/

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog; // Blog model uses namespace App;
use App\client; // Blog model uses namespace App;
use App\clientlogos; // Blog model uses namespace App;
use Carbon\Carbon; // use DB;

class AdminBlogController extends Controller {
    
    /** Check whether the admin user is login.
     *
     *  @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => 'login']);
    }

    /** Display a listing of the resource.
     *
     *  @return \Illuminate\Http\Response
     */
    public function index() {
        include(app_path() . '/Functions/BlogFunctions.php');

        // change this when trash bin is created
        $blogs = Blog::where('type_id', '!=', 3)
            ->orderBy('id', 'desc')
            ->paginate(6);
        
        return view('Admin.ViewBlogs')->with('blogs', longAgo($blogs));
    }


    /** Creates a new blog
     *
     *  @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Admin.Create');
    }

    /** Stores the new user
     *
     *  @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // validates if title and body has text
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');

        if ($request->input('img') != '')
            $blog->img = $request->input('img');
        // else
        // TODO: put a default picture here

        if ($request->input('author') != '')
            $blog->author = $request->input('author');
        else
            $blog->author = "Anonymous";

        switch ($request->submit) {
            case 'draft':
                $blog->type_id = 1;
                break;
            case 'publish':
                $blog->type_id = 2;
                break;
            default:
                $blog->type_id = 1;
        }
        $blog->save();

        return redirect('/csoadmin/blogs');
    }

    // Previews the blog that is being created > Move to adminblogcontroller
    public function preview(Request $request) {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->img = $request->input('img');
        $blog->author = $request->input('author');
        $blog->type_id = 1;
        $blog->updated_at = Carbon::now();
        return view('Admin.preview')->with('blog', $blog);
    }

    /** Show the form for editing the specified resource.
     *
     *  @param  int  $id
     *  @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $blog = Blog::find($id);
        return view('Admin.Edit')->with('blog', $blog);
    }

    /** Updates the specified resource in storage.
     *
     *  @param  \Illuminate\Http\Request  $request
     *  @param  int  $id
     *  @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        // validates if title and body has text
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        // Create Blog
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');

        if ($request->input('img') != '')
            $blog->img = $request->input('img');
        // else
        // TODO: add a default

        if ($request->input('author') != '')
            $blog->author = $request->input('author');
        else
            $blog->author = "Anonymous";

        switch ($request->submit) {
            case 'draft':
                $blog->type_id = 1;
                break;
            case 'publish':
                $blog->type_id = 2;
                break;
            case 'trash':
                $blog->type_id = 3;
                break;
            default:
                $blog->type_id = 1;
        }
        $blog->save();

        return redirect('/csoadmin/blogs');
    }

    // Change to put to trash
    /** Removes the specified resource from storage.
     *
     *  @param  int  $id
     *  @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('csoadmin/blogs')->with('success', 'Blog Deleted');
    }

}
