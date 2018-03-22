<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\Models\Proposta;

class PropostaHelper
{

    public static function getPropostasPorTipo($tipo = 'Proposta Compra', $registros = 0)
    {
        $slug = str_slug($tipo);

        $propostas = session()->has($slug);

        if(!$propostas) {

          $propostas = Proposta::where('tipo_proposta', $tipo)->orderByDesc('id')->get();

          session()->put($slug, $propostas);

        }

        if($registros) {
            return session()->get($slug)->take(5);
        }

        return session()->get($slug)->count();

    }

    public static function estadoCivil($key)
    {
        if(empty($key)) {
          return 'Não Informado';
        }

        $situacoes = ['Não Informado', 'Soleiro', 'Casado', 'Divorciado', 'Separado', 'Viuvo'];

        return array_key_exists((int)$key, $situacoes) ? $situacoes[$key] : $situacoes[0];
    }

    public static function estado($key)
    {
        if(empty($key)) {
          return 'Não Informado';
        }

        $estados = ['Não Informado', 'Acre', 'Alagoas', 'Amapá', 'Bahia', 'Ceará', 'Distrito Federal', 'Espiríto Santo', 'Goiás',
        'Maranhão', 'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernanbuco', 'Piaui',
        'Rio de Janeiro', 'Rio Grande do Norte', 'Rondondônia', 'Roraima', 'Rio Grande do Sul', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'];

        return array_key_exists((int)$key, $estados) ? $estados[$key] : $estados[0];
    }

    public static function imovelSituacao($key)
    {
        if(empty($key)) {
          return 'Não Informada';
        }

        $situacoes = ['Não Informada', 'Proprio', 'Alugado'];

        return array_key_exists((int)$key, $situacoes) ? $situacoes[$key] : $situacoes[0];
    }

    public static function imovelTipo($key)
    {
        if(empty($key)) {
          return 'Não Informada';
        }

        $situacoes = ['Não Informada', 'Apartamento', 'Casa', 'Cobertura', 'Conjunto Comercial', 'Duplex', 'Flat', 'Loft',
        'Ponto Comercial', 'Terreno', 'Vaga de Garagem'];

        return array_key_exists((int)$key, $situacoes) ? $situacoes[$key] : $situacoes[0];
    }

    public static function imovelPretensao($key)
    {
        if(empty($key)) {
          return 'Não Informada';
        }

        $situacoes = ['Não Informada', 'Venda', 'Locação', 'Venda e Locação'];

        return array_key_exists((int)$key, $situacoes) ? $situacoes[$key] : $situacoes[0];
    }

}
