<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $route = \Route::currentRouteName();

        if (!isset($_COOKIE['section_id']) && !isset($_COOKIE['address_name']) && $route != "set-location") {
            \Redirect::to('set-location')->send();
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ecommerce.index');
    }

    public function setLocation()
    {
        return view('layer');
    }
}
