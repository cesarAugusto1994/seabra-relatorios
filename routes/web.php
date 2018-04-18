<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomeController@index');

Auth::routes();

Route::middleware('auth')->group(function () {

  Route::get('/redirect', function () {

    $user = \Auth::user();

    // Creating a token without scopes...
    $token = $user->createToken($user->name)->accessToken;

    $user->api_token = $token;
    $user->save();

    return redirect()->route('home');

  });

  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('propostas/pessoa-fisica', 'PropostaPessoaFisicaController');
  Route::resource('propostas/pessoa-juridica', 'PropostaPessoaJuridicaController');
  Route::resource('proposta/compra', 'PropostaCompraController');
  Route::resource('proposta/locacao', 'PropostaLocacaoController');
  Route::resource('proposta/lancamento', 'PropostaLancamentoController');
  Route::resource('cadastro/pessoa-fisica', 'CadastroCompradorPfController');
  Route::resource('cadastro/pessoa-juridica', 'CadastroCompradorPjController');
  Route::resource('cadastro/locatario/pessoa-fisica', 'CadastroLocatarioPfController');
  Route::resource('cadastro/locatario/pessoa-juridica', 'CadastroLocatarioPjController');
  Route::resource('cadastro/fiador/pessoa-fisica', 'CadastroFiadorPfController');
  Route::resource('cadastro/fiador/pessoa-juridica', 'CadastroFiadorPjController');
  Route::resource('cadastro/imovel', 'CadastroImoveisController');
  Route::resource('cadastro/encomendar-imovel', 'EncomendarImovelController');
  Route::resource('curriculo', 'CurriculoController');
  Route::resource('fale-conosco', 'FaleConoscoController');
  Route::resource('solicitar-informacoes', 'SolicitarInformacoesController');
  Route::resource('solicitar-contato', 'SolicitarContatoController');
  Route::resource('analise-credito', 'AnaliseController');
  Route::resource('solicitar-informacoes-imovel', 'SolicitarInformacoesImovelController');
  Route::resource('compartilhar', 'CompartilharController');
  Route::resource('seo', 'SeoController');

});
