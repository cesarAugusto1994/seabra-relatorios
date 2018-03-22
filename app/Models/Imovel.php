<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imoveis';

    public function pagamento()
    {
        return $this->hasOne(ImovelCondicoesPagamento::class, 'imovel_id');
    }

    public function locacao()
    {
        return $this->hasOne(ImovelLocacao::class, 'imovel_id');
    }
}
