<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $table = 'propostas';

    protected $dates = ['created_at', 'criado_em'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function imovel()
    {
        return $this->hasOne(Imovel::class, 'proposta_id');
    }
}
