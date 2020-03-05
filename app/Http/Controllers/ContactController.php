<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//Import DB usado para fazer query's DB's
use Illuminate\Support\Facades\Auth; // serve para pegar o id, email e nome do login

use Session;
use App\ContactModel;

class ContactController extends Controller
{

	private $contactModel;

	public function __construct(ContactModel $contactModel){

		$this->contactModel = $contactModel;
	}

    public function contact(Request $request){

    	$this->validate($request, $this->contactModel->validateContact);

    	$insert = ContactModel::create([
    		'nome'  => $request->nome,
    		'email' => $request->email,
    		'msg'   => $request->msg,
    	]);

    	if($insert){
    		Session::flash('ContactSuccess', 'Contato enviado com sucesso. Obrigado !!!');
    	}else{
    		Session::flash('ContactError', 'Desculpe. Ocorreu um erro ao enviar o seu contato. Contate o Administrador!');
    	}

    	return view('contato');
    }


}
