<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarController extends Controller
{
    public function show(Request $request, $id)
    {
        $data = $request->request->all();

        $entidade = $request->get("entidade");
        $return = $request->get("return");

        $classe = str_replace(' ', '', ucwords(str_replace('_', ' ', ($entidade))));

        $classe = "App\\Models\\" . $classe;

        $registros = $classe::findOrFail($id);

        return view('admin.editar.index', compact('registros', 'return', 'entidade'));
    }

    public function update(Request $request, $id)
    {

        try {
        $data = $request->request->all();

        $classe = $data["entidade"];
        $return = $data["return"];
        //$return = route($return);

        if('pessoas' == $classe) {
          $classe = 'pessoa';
        }

        if('imoveis' == $classe) {
          $classe = 'imovel';
        }

        if('pessoas_dados_conjuge' ==  $classe) {
           $classe = 'pessoa_dados_conjuge';
        }

        if('pessoas_dados_financeiros' ==  $classe) {
           $classe = 'pessoa_dados_financeiros';
        }

        if('pessoas_enderecos' ==  $classe) {
           $classe = 'pessoa_enderecos';
        }

        if('pessoas_aplicacoes_financeiras' ==  $classe) {
           $classe = 'pessoa_aplicacoes_financeiras';
        }

        if('pessoas_dados_comerciais' ==  $classe) {
           $classe = 'pessoa_dados_comerciais';
        }

        if('pessoas_referencias_comerciais' ==  $classe) {
           $classe = 'pessoa_referencias_comerciais';
        }

        if('pessoas_informacoes_bancarias' ==  $classe) {
           $classe = 'pessoa_informacoes_bancarias';
        }

        $classe = str_replace(' ', '', ucwords(str_replace('_', ' ', ($classe))));
        $classe = "App\\Models\\" . $classe;

        $classe = $classe::findOrFail($id);

        foreach ($data as $key => $item) {

            if(in_array($key, ['_token', 'return', 'entidade'])) {
                continue;
            }

            $classe->$key = $item;
        }

        $classe->save();

        flash('Registro editado com sucesso.')->success()->important();

        } catch(Exception $e) {
          flash($e->getMessage())->error()->important();
        }

        return redirect($return);
    }
}
