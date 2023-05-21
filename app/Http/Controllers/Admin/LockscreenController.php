<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\JoshController;
use Hash;
use Illuminate\Http\Request;
use Sentinel;

class LockscreenController extends JoshController
{
    public function show($id)
    {
        if (Sentinel::check()) {
            $user = Sentinel::findUserById($id);
            //logout user so he can't go back
            Sentinel::logout();
            return view('admin.lockscreen', compact('user'));
        }
        return view('admin.login');
    }

    public function check($id, Request $request)
    {
        $password = Sentinel::findById($id)->password;
        if (Hash::check($request->password, $password)) {
            // since we already logged out user, we can't send them back
            //so we manually login the same user and send back to same page
            $user = Sentinel::findById($id);
            Sentinel::login($user);
            return 'success';
        }
        return 'error';

    
    }
}
