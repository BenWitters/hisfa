<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;

class UserController extends Controller
{
    public function index(){
        return view('user/account');
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        $newPassword = $request->input('password');
        $user->password = bcrypt($newPassword);
        $user->save();

        return redirect('/account')->with('message', 'Password successfully changed.');

    }
}
