<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ImagensImovel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function destroy(Request $request, $id)
    {
        try {
            $data = $request->request->all();

            if(!$data['table']) {
              throw new \Exception("Ocorreu um erro ao remover o item, tabela não informada.", 1);
            }

            if($data['table'] == 'imagens_imovel') {

                $imagem = ImagensImovel::findOrFail($id);

                if(is_dir('http://www.seabra.com.br/assets/imoveis/'.$imagem->link)) {
                    unlink('http://www.seabra.com.br/assets/imoveis/'.$imagem->link);
                }
            }

            $reg = DB::table($data['table'])->where('id', $id);

            if($reg->get()->isNotEmpty()) {
              $result = $reg->delete();
            }

            return response()->json([
              'code' => 201,
              'message' => 'Removido com sucesso!'
            ]);

        } catch(Exception $e) {

            return response()->json([
              'code' => 501,
              'message' => $e->getMessage()
            ]);

        }

    }
}
