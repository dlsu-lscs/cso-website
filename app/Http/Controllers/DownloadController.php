<?php

/*
    |--------------------------------------------------------------------------
    | Download Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the requests to download
    | files. Normal Users can only download files.
    |
    | Routes - Function - KYSONN follow adminblogcontroller
*/

namespace App\Http\Controllers;

class DownloadController extends Controller {

    /**
     * Show the view for downloading files
     *
     * @return \Illuminate\Http\Response
     */
    public function get() {
        return view('home.download');
    }

    /**
     * Prepares the file to be downloaded
     * 
     * @return \Illuminate\Http\Response
     */
    public function getFile($file) {
        // concatenate the filename to the path where it keeps the files
        $filePath = './downloads/' . $file;

        // check if the file exists
        if (file_exists($filePath)) {
            $file_parts = pathinfo($filepath);

            //check extension and make header
            if ($file_parts['extension'] == 'pdf') {
                $headers = array(
                'Content-Type: application/pdf',
                );
            }
            else if ($file_parts['extension'] == 'docx' || $file_parts['extension'] == 'doc') {
                $headers = array(
                    'Content-Type: application/octet-stream',
                );
            }

            return response()->download($filePath, $file, $headers);
        } 
        else {
            // file not found
            abort(404);
        }
    }
}