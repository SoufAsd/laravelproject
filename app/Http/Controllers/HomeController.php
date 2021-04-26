<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $total_agency = \DB::table('agency')->count();
       $total_promotos = \DB::table('promotors')->count();
       $total_projet = \DB::table('projects')->count();


        return view('home', compact('total_agency'),compact('total_promotos','total_projet'));
    }
    public function deconnexion()
{
    auth()->logout();

    return redirect('/');
}
}
