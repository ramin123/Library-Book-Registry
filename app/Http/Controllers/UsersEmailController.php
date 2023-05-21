<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Sentinel;

class UsersEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $existing_emails = User::get(['email']);

        return view('user_emails.compose', compact('existing_emails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Sentinel::getUser()->id;
        $request->merge(['user_id' => $user_id]);
        $request->merge(['status' => '1']);
        $email = trim($request->email_id, '"');
        $request->merge(['email_id' => $email]);
        $existing_emails = User::get(['email']);

        $email = Email::create($request->except('_token'));
        $success = 'Message Sent Successfully.';
        return view('user_emails/compose', compact('success', 'existing_emails'));
    }
    public function inbox()
    {
        $inbox_emails = Email::where('email_id', Sentinel::getUser()->email)->get();
        $ids = [];
        foreach ($inbox_emails as $email) {
            if ((User::where('email', $email->email_id)->exists()) && (User::where('id', $email->user_id)->exists())) {
                $ids[] = $email->id;
            }
        }
        $emails = Email::whereIn('id', $ids)->paginate(10);
        return view('user_emails/inbox', compact('emails'));
    }
    public function sent()
    {
        $sent_emails = Email::where('user_id', Sentinel::getUser()->id)->get();
        $ids = [];
        foreach ($sent_emails as $email) {
            if (User::where('email', $email->email_id)->exists()) {
                $ids[] = $email->id;
            }
        }
        $emails = Email::whereIn('id', $ids)->paginate(10);
        return view('user_emails/sent', compact('emails'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        if (Sentinel::getUser()->email === $email->email_id) {
            $email->update(['status' => '0']);
        }

        return view('user_emails/show', compact('email'));
    }

    public function reply(Email $email)
    {
        return view('user_emails/reply', compact('email'));
    }
    public function forward(Email $email)
    {
        $existing_emails = User::get(['email']);
        return view('user_emails/forward', compact('email', 'existing_emails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
}
