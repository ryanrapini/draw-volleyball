<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Team;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        $teams = Team::all()->load('league');
        return view('admin', ['teams' => $teams]);
    }
}
