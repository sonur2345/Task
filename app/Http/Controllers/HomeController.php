<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Models\Property;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Broker::all();
        return view('home',['Broker'=>Broker::get()],['Property'=>Property::get()]);
    }
}
