<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public $pageTitle, $componentName;       
    public $selected_id;                                            //VALIDADOR DE EDITAR O AGREGAR

    public function index()
    {
        $data = User::orderBy('id', 'asc')->get();
        return view('pages.home', compact('data'));
    }
}
