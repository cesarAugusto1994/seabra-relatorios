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

    public function conjuge()
    {
        return $this->hasOne(PessoaDadosConjuge::class, 'pessoa_id');
    }

    public function dadosComerciais()
    {
        return $this->hasOne(PessoaDadosComerciais::class, 'pessoa_id');
    }
}
