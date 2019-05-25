<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    //
    public function email(Request $request) {
		$validatedData = $request->validate([
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required',
			'name' => 'required'
		]);
		
		if ($request->has('email_add') && $request->get('email_add') != "") {
		    return back()->with('error', 'There was an error processing your request.');
		}
		
        if(config('app.env') === 'production') {
            $emails = array("lscs@dlsu.edu.ph");
            $cc = array($request->get('email'));
            $bcc = array("jonal_ticug@dlsu.edu.ph");
            $data = array("name" => $request->get('name'), "body" => $request->get('message'), 'email' => $request->get('email'));
            Mail::send('mail.mail', $data, function($message) use ($emails, $cc, $bcc) {
                $message->to($emails)
                        ->bcc($bcc)
                        ->subject('Inquiries | La Salle Computer Society');
                $message->from('admin@dlsu-lscs.org','La Salle Computer Society');
            });
            return back()->with('success', 'Thanks for contacting us!'); 
        } else {
            return back()->with('success', 'You are in development mode!');
        }
	}
}
