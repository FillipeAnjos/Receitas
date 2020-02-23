<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReceitaModel;
class ReceitaController extends Controller
{

    private $receitaModel;

    public function __construct(ReceitaModel $receitaModel){

        $this->receitaModel = $receitaModel;

    }

    public function index()
    {
        /*
            GET
            /api/receita
            Pegar todas as receitas!
        */  
            $recipe = ['recipe' => $this->receitaModel->all()];
            //$recipe = ReceitaModel::all();

        return response()->json($recipe, 200);
    }

    public function store(Request $request)
    {
        //POST
        ReceitaModel::create($request->all());
    }

    public function show($id)
    {
        /*
            GET/PARAM
            /api/receita/2
            Pegar apenas o id desejado!
        */
        $recipe = ['recipe', ReceitaModel::findOrFail($id)];
        return response()->json($recipe, 200);

    }

    public function update(Request $request, $id)
    {
        //PUT
        $recipe = ReceitaModel::findOrFail($id);
        $recipe->update($request->all());
    }

    public function destroy($id)
    {
        //DELETE
        $recipe = ReceitaModel::findOrFail($id);
        $recipe->delete();
    }
}
