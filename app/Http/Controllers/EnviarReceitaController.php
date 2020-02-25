<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//Import DB usado para fazer query's DB's
use Illuminate\Support\Facades\Auth; // serve para pegar o id, email e nome do login

use Session;
use App\ReceitaEnviarModel;

class EnviarReceitaController extends Controller
{
    
    private $enviarReceitaModel;

    public function __construct(ReceitaEnviarModel $receitaEnviarModel)
    {
    	//Verificar se o usuário está logado!
    	$this->middleware('auth');

    	$this->enviarReceitaModel = $receitaEnviarModel;
    }

    public function sendRecipePage(){

    	return view('recipe/sendRecipePage');
    }

    public function sendRecipe(Request $request){

    	//Validação dos campos!!
    	$this->validate($request, $this->enviarReceitaModel->validateSendRecipe);

    	$insert = $this->enviarReceitaModel->create([
    		'nome' 	   	   => Auth::user()->name,
    		'email' 	   => Auth::user()->email,
    		'titulo' 	   => $request->title,
    		'categoria'    => $request->category,
    		'tempoPreparo' => $request->tempPreparation,
    		'quantidade'   => $request->amount,
    		'microondas'   => $request->microondas,
    		'ingredientes' => $request->ingredients,
    		'preparo' 	   => $request->preparation,
    	]);

    	if($insert){
    		Session::flash('RecipeSuccess', 'Receita enviada com sucesso. Obrigado !!!');
    	}else{
    		Session::flash('RecipeError', 'Ocorreu um erro ao enviar a receita. Contate o Administrador!');
    	}

    	return view('recipe/sendRecipePage');

    	//Auth::id()
    	//Auth::user()->id
    	//dd(Auth::user()->id);

    }


}
