<?php

/*
    |--------------------------------------------------------------------------
    | Admin Download Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles uploading and deletion of new
    | files. Only admins can upload and delete files.
    |
    | Routes - Function - KYSONN follow adminblogcontroller
    */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminDownloadController extends Controller {

    /** Create a new controller instance.
     *
     *  @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => 'login']);
    }

    /**
     * Show the form for creating a new download
     *
     * @return \Illuminate\Http\Response
     */
    public function getcreate() {
        return view('admin.createdownload');
    }

    /**
     * Handles the post request of file uploads
     *
     * @return void
     */
    public function create(Request $request) {
        $file = $request->file('file');

        // check if file is null
        if (is_null($file)) {
            echo "<script type='text/javascript'>alert('File upload can not be empty');</script>";
        }
        else if ($file->isValid()) {
            $fileName = $file->getClientOriginalName();
            $filePath = './downloads/' . $fileName;

            // move the uploaded file to public/downloads
            $file->move('./downloads/', $fileName);
            echo "<script type='text/javascript'>alert('File uploaded successfully');</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
    }

    /**
     * Show the form for deleting files
     *
     * @return \Illuminate\Http\Response
     */
    public function getdelete() {
        // gets the name of all files in public/downnloads
        $files = collect(File::files('./downloads/'))
            ->map(function($path) {
                return basename($path);
            }
        );

        return view('admin.deletedownload')->withFiles($files);
    }

    /**
     * Handles the delete request of files
     *
     * @return void
     */
    public function delete($file) {
        $filepath = './downloads/' . $file;

        // checks if file exists
        if (file_exists($filepath)) {
            File::delete($filepath);

            echo "<script type='text/javascript'>alert('File successfully deleted');</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('File not found');</script>";
        }
    }
}
