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
        $seo->mensagem = $data['mensagem'];
        $seo->empreendimento_id = $data['empreendimento_id'];
        $seo->save();

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'ddd' => 'required|string',
            'telefone' => 'required|string',
            'mensagem' => 'required|string',
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
