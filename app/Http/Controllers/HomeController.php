<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\UserList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_lists = UserList::first();
        $date = Carbon::now()->format('d/m/Y');
        return view('home', compact('date', 'user_lists'));
    }
}
