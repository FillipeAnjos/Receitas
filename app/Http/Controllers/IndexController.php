<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // serve para pegar o id, email e nome do login
use Illuminate\Support\Facades\DB;//Import DB usado para fazer query's DB's ... Ex: DB::table('produtos')->where('categoria', 'biblia')
use App\ReceitaModel;

class IndexController extends Controller
{
    
	public function __construct()
    {
        //$this->middleware('auth');
    }

	public function pageInitial(){

        $receita = array();
        /* 
            Query responsavel por pegar as 4 primeiras receitas com maior numero de favoritos!
        */
        $receitas = DB::table('receita')->orderBy('favorito', 'desc')->limit(4)->get();
            foreach ($receitas as $res) {
                $receita[] = $res;
            }

        return view('index', compact('receita')); 
    }

    public function contato(){
        
        return view('contato');
    }


}
