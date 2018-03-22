@extends('adminlte::page')

@section('title', 'Seabra - Cadastro Comprador Pessoa Fisica')

@section('content_header')
    <h1>Cadastro Comprador Pessoa Fisica N. {{ $pessoa->id }}</h1>
@stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Detalhes</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-google btn-xs" href="{{ url('/cadastro/pessoa-fisica') }}">Voltar</a>
    </div>
  </div>
  <div class="box-body">
      <div class="row">

          <div class="col-lg-6">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Cliente</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $pessoa->id }}</td>
                      </tr>

                      <tr>
                        <th>Nome</th>
                        <td>{{ $pessoa->nome }}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{ $pessoa->email }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $pessoa->telefone }}</td>
                      </tr>

                      <tr>
                        <th>Celular</th>
                        <td>{{ $pessoa->celular }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $pessoa->fisica->estado_civil }}</td>
                      </tr>

                      <tr>
                        <th>Regime Casamento</th>
                        <td>{{ $pessoa->fisica->regime_casamento }}</td>
                      </tr>

                      <tr>
                        <th>Nascimento</th>
                        <td>{{ $pessoa->fisica->nascimento }}</td>
                      </tr>

                      <tr>
                        <th>Nacionalidade</th>
                        <td>{{ $pessoa->fisica->nacionalidade }}</td>
                      </tr>

                      <tr>
                        <th>CPF</th>
                        <td>{{ $pessoa->fisica->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG</th>
                        <td>{{ $pessoa->fisica->rg }}</td>
                      </tr>

                      <tr>
                        <th>Profissao</th>
                        <td>{{ $pessoa->fisica->profissao ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $pessoa->endereco->logradouro }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $pessoa->endereco->bairro }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $pessoa->endereco->cep }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $pessoa->endereco->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado</th>
                        <td>{{ $pessoa->endereco->estado }}</td>
                      </tr>

                      <tr>
                        <th>Imovel</th>
                        <td>{{ App\Helpers\PropostaHelper::imovelSituacao($pessoa->imovel_situacao) }}</td>
                      </tr>

                      <tr>
                        <th>Tempo Aquisição</th>
                        <td>{{ $pessoa->tempo_aquisicao }}</td>
                      </tr>

                      <tr>
                        <th>Cartório Rec. Firma</th>
                        <td>{{ $pessoa->cartorio_reconhecimento_firma }}</td>
                      </tr>

                      <tr>
                        <th>Fiador</th>
                        <td>{{ $pessoa->fisica->fiador }}</td>
                      </tr>

                      <tr>
                        <th>Fiador Parentesco</th>
                        <td>{{ $pessoa->fisica->grau_parentesco_fiador }}</td>
                      </tr>

                      <tr>
                        <th>Usa FGTS</th>
                        <td>{{ $pessoa->fisica->usa_fgts ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>FGTS Valor</th>
                        <td>R$ {{ number_format($pessoa->fisica->fgts_valor, 2, ',', '.') }}</td>
                      </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Conjuge</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $pessoa->conjuge->id }}</td>
                      </tr>

                      <tr>
                        <th>Nome</th>
                        <td>{{ $pessoa->conjuge->nome }}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{ $pessoa->conjuge->email }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $pessoa->conjuge->telefone }}</td>
                      </tr>

                      <tr>
                        <th>Celular</th>
                        <td>{{ $pessoa->conjuge->celular }}</td>
                      </tr>

                      <tr>
                        <th>Sexo</th>
                        <td>{{ $pessoa->conjuge->sexo ? 'Feminino' : 'Masculino' }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $pessoa->conjuge->estado_civil }}</td>
                      </tr>

                      <tr>
                        <th>Regime Casamento</th>
                        <td>{{ $pessoa->conjuge->regime_casamento }}</td>
                      </tr>

                      <tr>
                        <th>Nascimento</th>
                        <td>{{ $pessoa->conjuge->nascimento }}</td>
                      </tr>

                      <tr>
                        <th>Nacionalidade</th>
                        <td>{{ $pessoa->conjuge->nacionalidade }}</td>
                      </tr>

                      <tr>
                        <th>CPF</th>
                        <td>{{ $pessoa->conjuge->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG</th>
                        <td>{{ $pessoa->conjuge->rg }}</td>
                      </tr>

                      <tr>
                        <th>Empresa</th>
                        <td>{{ $pessoa->conjuge->empresa ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Profissao</th>
                        <td>{{ $pessoa->conjuge->profissao ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Função</th>
                        <td>{{ $pessoa->conjuge->funcao ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Salário</th>
                        <td>{{ $pessoa->conjuge->salario ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Endereço Empresa</th>
                        <td>{{ $pessoa->conjuge->endereco_empresa }}</td>
                      </tr>

                      <tr>
                        <th>Telefone Comercial</th>
                        <td>{{ $pessoa->conjuge->telefone_comercial }}</td>
                      </tr>

                      <tr>
                        <th>Tempo Trabalho</th>
                        <td>{{ $pessoa->conjuge->tempo_trabalho }}</td>
                      </tr>

                      <tr>
                        <th>Cartoriao Rec. Firma</th>
                        <td>{{ $pessoa->conjuge->cartorio_reconhecimento_firma }}</td>
                      </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

      </div>
      <div class="row">

          <div class="col-lg-4">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Dados Comerciais</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $pessoa->dadosComerciais->id }}</td>
                      </tr>

                      <tr>
                        <th>Empresa</th>
                        <td>{{ $pessoa->dadosComerciais->empregador }}</td>
                      </tr>

                      <tr>
                        <th>Profissão</th>
                        <td>{{ $pessoa->dadosComerciais->profissao }}</td>
                      </tr>

                      <tr>
                        <th>Função</th>
                        <td>{{ $pessoa->dadosComerciais->funcao }}</td>
                      </tr>

                      <tr>
                        <th>Salário</th>
                        <td>R$ {{ number_format($pessoa->dadosComerciais->salario, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Tempo Trabalho</th>
                        <td>{{ $pessoa->dadosComerciais->tempo_trabalho }}</td>
                      </tr>

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $pessoa->dadosComerciais->endereco }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $pessoa->dadosComerciais->bairro }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $pessoa->dadosComerciais->cep }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $pessoa->dadosComerciais->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado</th>
                        <td>{{ $pessoa->dadosComerciais->estado }}</td>
                      </tr>

                      <tr>
                        <th>telefone</th>
                        <td>{{ $pessoa->dadosComerciais->telefone }}</td>
                      </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Informações Bancárias</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                        @foreach($pessoa->informacoesBancarias as $banco)


                            <tr>
                              <th>ID</th>
                              <td>{{ $banco->id }}</td>
                            </tr>

                            <tr>
                              <th>Banco</th>
                              <td>{{ $banco->banco }}</td>
                            </tr>

                            <tr>
                              <th>Conta</th>
                              <td>{{ $banco->conta }}</td>
                            </tr>

                            <tr>
                              <th>Contato</th>
                              <td>{{ $banco->contato }}</td>
                            </tr>

                            <tr>
                              <th>Telefone</th>
                              <td>{{ $banco->telefone }}</td>
                            </tr>



                        @endforeach




                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-4">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Referências Comerciais</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                        @foreach($pessoa->referenciasComerciais as $referencia)


                            <tr>
                              <th>ID</th>
                              <td>{{ $referencia->id }}</td>
                            </tr>

                            <tr>
                              <th>Empresa/Contato</th>
                              <td>{{ $referencia->nome }}</td>
                            </tr>

                            <tr>
                              <th>Telefone</th>
                              <td>{{ $referencia->telefone }}</td>
                            </tr>


                        @endforeach




                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

      </div>

  </div>
</div>

@stop
