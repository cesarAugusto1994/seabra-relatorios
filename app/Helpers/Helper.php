<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class Helper
{
    public static function registroPorTipoCadastro($tipo = 1, $registros = 0)
    {
        $slug = str_slug($tipo);

        $itens = session()->has($slug);

        if(!$itens) {

          $itens = Pessoa::where('tipo_cadastro_id', $tipo)->orderByDesc('id')->get();

          session()->put($slug, $itens);

        }

        if($registros) {
            return session()->get($slug)->take(5);
        }

        return session()->get($slug)->count();
    }

    public static function getRegistrosPorTipoCadastro($tipo = 1)
    {
        $slug = str_slug($tipo);

        $itens = session()->has($slug);

        if(!$itens) {

          $itens = Pessoa::where('tipo_cadastro_id', $tipo)->get();

          session()->put($slug, $itens);

        }

        return session()->get($slug)->count();
    }

    public static function tiposCadastro()
    {
        $slug = 'tipo_cadastro';

        $itens = session()->has($slug);

        if(!$itens) {

          $itens = TipoCadastro::all();

          session()->put($slug, $itens);

        }

        return session()->get($slug)->count();
    }
}
