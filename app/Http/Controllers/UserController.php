<?php

namespace App\Http\Controllers;

use App\UserList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store()
    {
        if(UserList::all()->isEmpty()){
            UserList::create();
        }
        $user = Auth::user();
        $user['user_list_id'] = UserList::first()->id;
        $user->save();
        return redirect('home');
    }
}
