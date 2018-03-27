<?php

use Illuminate\Database\Seeder;
use App\Models\TipoCadastro;

class TipoCadastroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('truncate tipo_cadastro');

        $itens = [
        'Cadastro Comprador Pessoa Fisica', 'Cadastro Comprador Pessoa Juridica',
        'Cadastro Locatario Pessoa Fisica', 'Cadastro Locatario Pessoa Juridica',
        'Cadastro Fiador Pessoa Fisica', 'Cadastro Fiador Pessoa Juridica',
        'Cadastro Imovel', 'Encomendar Imovel', 'Analise de Credito'
        ];

        foreach ($itens as $key => $item) {
            $tipoCadastro = new TipoCadastro();
            $tipoCadastro->nome = $item;
            $tipoCadastro->save();
        }
    }
}
