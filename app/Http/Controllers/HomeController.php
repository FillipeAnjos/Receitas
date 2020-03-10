<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // serve para pegar o id, email e nome do login
use Illuminate\Support\Facades\DB;//Import DB usado para fazer query's DB's ... Ex: DB::table('produtos')->where('categoria', 'biblia')

use App\Services\FolderService;

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

        $conditionPage = "index";
        $folder = FolderService::checkDateFolder($conditionPage);

        return view('home', compact('folder'));
    }


}
