<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;
use Illuminate\Support\Facades\Validator;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seo = Seo::paginate();
        return view('admin.seo.index', compact('seo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->request->all();

        try {

        $validator = $this->validator($data);

        if ($validator->fails()) {

            $errors = $validator->errors();

            return $errors->toJson();
        }

        $seo = new Seo();
        $seo->nome = $data['nome'];
        $seo->email = $data['email'];
        $seo->ddd = $data['ddd'];
        $seo->telefone = $data['telefone'];
        $seo->mensagem = isset($data['mensagem']) ?? '';
        $seo->mensagem = isset($data['observacoes']) ?? '';
        $seo->mensagem = isset($data['adquirir_em']) ? new \DateTime($data['adquirir_em']) : null;
        $seo->mensagem = isset($data['unidade_interesse']) ?? '';
        $seo->empreendimento_id = $data['empreendimento_id'];
        $seo->save();

        $this->criarChamado($data);

        return response()->json([
            'code' => 201,
            'message' => 'dados adicionados com sucesso'
        ]);

      } catch(Exception $e) {
        return response()->json([
            'code' => $e->code,
            'message' => $e->message
        ]);
      }

    }

    public function criarChamado($data)
    {
        $crmConnect = \DB::connection('mysql_crm');

        $empreedimento = $crmConnect->table('produto_genero')->select("*")->where('referencia', $data['empreendimento_id'])->get();

        if($empreedimento->isEmpty()) {
          throw new Exception('O Empreendimento não foi encontrado');
        }

        $empreedimento = $empreedimento->first();

        $cliente = $crmConnect->table('emails')
        ->select("*")
        ->join('clientes', 'clientes.id', '=', 'emails.cliente_id')
        ->where('email', $data['email'])
        ->get();

        if($cliente->isEmpty()) {

          $clienteId = $crmConnect->table('clientes')->insertGetId(
              [
                'tipo' => '2',
                'pessoa' => 1,
                'forma_tratamento' => 1,
                'nome' => $data['nome'],
                'id_empresa' => 8,
                'cpf' => '',
                'sexo' => 1,
              ]
          );

          $emailId = $crmConnect->table('emails')->insertGetId(
              [
                'email' => $data['email'],
                'cliente_id' => $clienteId,
                'principal' => 'SIM',
              ]
          );

          $telefoneId = $crmConnect->table('telefones')->insertGetId(
              [
                'tipo' => '3',
                'ramal' => '',
                'ddd' => '11',
                'ddi' => '55',
                'telefone' => $data['telefone'],
                'cliente_id' => $clienteId,
                'principal' => 'SIM'
              ]
          );

          $cliente = $cliente = $crmConnect->table('emails')
          ->select("*")
          ->join('clientes', 'clientes.id', '=', 'emails.cliente_id')
          ->where('clientes.id', $clienteId)
          ->get();

        } else {
            $clienteId = $cliente->first()->id;
        }

        $cliente = $cliente->first();

        $midia = $crmConnect->table('midias')->select("*")->where('empresa_id', $cliente->id_empresa)->where('nome', 'Portal 123I')->get();

        if($midia->isEmpty()) {

          $midiaId = $crmConnect->table('midias')->insertGetId(
              [
                'nome' => 'Portal 123I',
                'empresa_id' => $cliente->id_empresa
              ]
          );

        } else {

          $midiaId = $midia->first()->id;

        }

        $mensagem = isset($data['mensagem']) ? $data['mensagem'] : '';

        $chamadoId = $crmConnect->table('chamado')->insertGetId(
            [
              'produto_servico' => $empreedimento->id,
              'id_cliente' => $clienteId,
              'empreendimento' => $empreedimento->nome,
              'midia' => 'Site',
              'manifestacao' => 2,
              'grupo_manifestacao' => 6,
              'tipo_manifestacao' => 1,
              'id_usuario' => 1,
              'descricao' => "Solicitação de informacoes de Imovel: ".$mensagem,
              'classificacao' => 1,
              'area_atendimento' => 12,
              'abertura_chamado' => date('Y-m-d H:i:s'),
              'situacao' => 1,
              'id_empresa' => 8,
              'arquivado' => 0,
              'pessoa_responsavel' => '0',
              'conclusao' => '',
            ]
        );

        $clienteProduto = $crmConnect->table('cliente_produtos')->select("*")->where('cliente_id', $clienteId)->where('produto_id', $empreedimento->id)->get();

        if($clienteProduto->isEmpty()) {
          $clienteProdutoId = $crmConnect->table('cliente_produtos')->insertGetId(
              [
                'chamado_id' => $chamadoId,
                'produto_id' => $empreedimento->id,
                'cliente_id' => $clienteId
              ]
          );
        }

        $clienteMidia = $crmConnect->table('cliente_midias')->select("*")->where('cliente_id', $clienteId)->where('midia_id', $midiaId)->get();

        if($clienteMidia->isEmpty()) {
          $clienteMidiaId = $crmConnect->table('cliente_midias')->insertGetId(
              [
                'chamado_id' => $chamadoId,
                'midia_id' => $midiaId,
                'cliente_id' => $clienteId
              ]
          );
        }

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'ddd' => 'required|string',
            'telefone' => 'required|string',
            'empreendimento_id' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try {
          $registro = Seo::findOrFail($id);
          $registro->delete();

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
