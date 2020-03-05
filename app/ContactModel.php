<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
   	protected $fillable = ['nome', 'email', 'msg'];
    
    protected $table = "contato";

    
    //Validação dos campos da View 'contact.blade.php'
    public $validateContact = [
    	'nome' 	=> 'required|min:3|max:100',
    	'email'	=> 'required|email|',
    	'msg'   => 'required|max:2000',
    ];
    
}
