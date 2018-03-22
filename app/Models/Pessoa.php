<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    public function fisica()
    {
        return $this->hasOne(PessoaFisica::class, 'pessoa_id');
    }

    public function juridica()
    {
        return $this->hasOne(PessoaJuridica::class, 'pessoa_id');
    }

    public function imovel()
    {
        return $this->hasOne(Imovel::class, 'pessoa_id');
    }

    public function responsavel()
    {
        return $this->hasOne(Pessoa::class, 'empregador_id');
    }

    public function conjuge()
    {
        return $this->hasOne(PessoaDadosConjuge::class, 'pessoa_id');
    }

    public function dadosComerciais()
    {
        return $this->hasOne(PessoaDadosComerciais::class, 'pessoa_id');
    }

    public function endereco()
    {
        return $this->hasOne(PessoaEnderecos::class, 'pessoa_id');
    }

    public function informacoesBancarias()
    {
        return $this->hasMany(PessoaInformacoesBancarias::class, 'pessoa_id');
    }

    public function referenciasComerciais()
    {
        return $this->hasMany(PessoaReferenciasComerciais::class, 'pessoa_id');
    }


}
