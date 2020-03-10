<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//Import DB usado para fazer query's DB's
use Illuminate\Support\Facades\Auth; // serve para pegar o id, email e nome do login

use Session;

use App\BoloModel;
use App\ReceitaModel;
use App\Services\FolderService;

class FooterController extends Controller
{

	private $receitaModel;
    
    public function __construct(ReceitaModel $receitaModel){

    	$this->receitaModel = $receitaModel;

    }

    public function toViewBolos(){

    	$conditionPage = "bolos";
        $folder = FolderService::checkDateFolder($conditionPage);

    	$bolos = DB::table('receita')->where('categoria','=','Bolo')->paginate(5);

    	return view('category/bolos', compact('bolos', 'folder'));
    }







}
