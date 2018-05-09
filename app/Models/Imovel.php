<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ImagensImovel;

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

    public function imagens()
    {
        return $this->hasMany(ImagensImovel::class, 'imovel_id');
    }
}
