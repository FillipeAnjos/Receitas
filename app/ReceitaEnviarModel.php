<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceitaEnviarModel extends Model
{
    protected $fillable = ['nome', 'email', 'titulo', 'categoria', 'tempoPreparo', 'quantidade', 'microondas', 'ingredientes', 'preparo'];
    
    protected $table = "receitaenviada";

    //Validação dos campos da View 'sendRecipePage.blade.php'
    public $validateSendRecipe = [
    	'title' 		  => 'required|min:3|max:100',
    	'category'		  => 'required',
    	'tempPreparation' => 'required|numeric|max:10',
    	'amount'		  => 'required|numeric|max:10',
    	'microondas'      => 'required',
    	'ingredients'	  => 'required|min:10|max:2000',
    	'preparation'	  => 'required|min:10|max:2000',
    ];
}
