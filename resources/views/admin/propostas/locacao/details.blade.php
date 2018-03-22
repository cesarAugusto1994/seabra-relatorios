@extends('adminlte::page')

@section('title', 'Seabra - Propostas Locação')

@section('content_header')
    <h1>Propostas Locação N. {{ $proposta->id }}</h1>
@stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Detalhes</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-google btn-xs" href="{{ url('/proposta/compra') }}">Voltar</a>
    </div>
  </div>
  <div class="box-body">
      <div class="row">

          <div class="col-lg-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Proposta</h3>
                </div>
                <div class="box-body">

                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $proposta->id }}</td>
                      </tr>

                      <tr>
                        <th>Tipo</th>
                        <td>{{ $proposta->tipo_proposta }}</td>
                      </tr>

                      <tr>
                        <th>Autorizado</th>
                        <td>{{ $proposta->autorizacao ? 'Sim' : 'Não' }}</td>
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
                  <h3 class="box-title">Cliente</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $proposta->pessoa->id }}</td>
                      </tr>

                      <tr>
                        <th>Nome</th>
                        <td>{{ $proposta->pessoa->nome }}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{ $proposta->pessoa->email }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $proposta->pessoa->telefone }}</td>
                      </tr>

                      <tr>
                        <th>Celular</th>
                        <td>{{ $proposta->pessoa->celular }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $proposta->pessoa->fisica->estado_civil }}</td>
                      </tr>

                      <tr>
                        <th>Regime Casamento</th>
                        <td>{{ $proposta->pessoa->fisica->regime_casamento }}</td>
                      </tr>

                      <tr>
                        <th>Nascimento</th>
                        <td>{{ $proposta->pessoa->fisica->nascimento }}</td>
                      </tr>

                      <tr>
                        <th>Nacionalidade</th>
                        <td>{{ $proposta->pessoa->fisica->nacionalidade }}</td>
                      </tr>

                      <tr>
                        <th>CPF</th>
                        <td>{{ $proposta->pessoa->fisica->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG</th>
                        <td>{{ $proposta->pessoa->fisica->rg }}</td>
                      </tr>

                      <tr>
                        <th>Profissao</th>
                        <td>{{ $proposta->pessoa->fisica->profissao }}</td>
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
                  <h3 class="box-title">Conjuge</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $proposta->pessoa->conjuge->id }}</td>
                      </tr>

                      <tr>
                        <th>Nome</th>
                        <td>{{ $proposta->pessoa->conjuge->nome }}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{ $proposta->pessoa->conjuge->email }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $proposta->pessoa->conjuge->telefone }}</td>
                      </tr>

                      <tr>
                        <th>Celular</th>
                        <td>{{ $proposta->pessoa->conjuge->celular }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $proposta->pessoa->conjuge->estado_civil }}</td>
                      </tr>

                      <tr>
                        <th>Regime Casamento</th>
                        <td>{{ $proposta->pessoa->conjuge->regime_casamento }}</td>
                      </tr>

                      <tr>
                        <th>Nascimento</th>
                        <td>{{ $proposta->pessoa->conjuge->nascimento }}</td>
                      </tr>

                      <tr>
                        <th>Nacionalidade</th>
                        <td>{{ $proposta->pessoa->conjuge->nacionalidade }}</td>
                      </tr>

                      <tr>
                        <th>CPF</th>
                        <td>{{ $proposta->pessoa->conjuge->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG</th>
                        <td>{{ $proposta->pessoa->conjuge->rg }}</td>
                      </tr>

                      <tr>
                        <th>Profissao</th>
                        <td>{{ $proposta->pessoa->conjuge->profissao }}</td>
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
                  <h3 class="box-title">Dados Comerciais</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->id }}</td>
                      </tr>

                      <tr>
                        <th>Nome</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->endereco }}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->bairro }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->cep }}</td>
                      </tr>

                      <tr>
                        <th>Celular</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->estado }}</td>
                      </tr>

                      <tr>
                        <th>Regime Casamento</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->telefone_comercial }}</td>
                      </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

      </div>
      <div class="row">

          <div class="col-lg-6">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Imovel</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $proposta->imovel->id }}</td>
                      </tr>

                      <tr>
                        <th>Tipo</th>
                        <td>{{ $proposta->imovel->tipo_imovel }}</td>
                      </tr>

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $proposta->imovel->endereco }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $proposta->imovel->bairro }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $proposta->imovel->cep }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $proposta->imovel->unidade }}</td>
                      </tr>

                      <tr>
                        <th>Bloco</th>
                        <td>{{ $proposta->imovel->bloco }}</td>
                      </tr>

                      <tr>
                        <th>Área Privada</th>
                        <td>{{ $proposta->imovel->area_privada }}</td>
                      </tr>

                      <tr>
                        <th>Dormitórios</th>
                        <td>{{ $proposta->imovel->dormitorios }}</td>
                      </tr>

                      <tr>
                        <th>Vagas</th>
                        <td>{{ $proposta->imovel->vagas }}</td>
                      </tr>

                      <tr>
                        <th>Quitado</th>
                        <td>{{ $proposta->imovel->quitado ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>Descrição</th>
                        <td>{{ $proposta->imovel->descricao }}</td>
                      </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Pagamento</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $proposta->imovel->locacao->id }}</td>
                      </tr>

                      <tr>
                        <th>Aluguel</th>
                        <td>R$ {{ number_format($proposta->imovel->locacao->valor_aluguel, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Inicio Vigência</th>
                        <td>{{ $proposta->imovel->locacao->inicio_vigencia }}</td>
                      </tr>

                      <tr>
                        <th>Prazo Contrato</th>
                        <td>{{ $proposta->imovel->locacao->prazo_contrato }}</td>
                      </tr>

                      <tr>
                        <th>Indice Correção</th>
                        <td>{{ $proposta->imovel->locacao->indice_correcao }}</td>
                      </tr>

                      <tr>
                        <th>Garantias</th>
                        <td>{{ $proposta->imovel->locacao->garantias }}</td>
                      </tr>

                      <tr>
                        <th>Nome Fiador</th>
                        <td>{{ $proposta->imovel->locacao->nome_fiador }}</td>
                      </tr>

                      <tr>
                        <th>Grau Parentesco</th>
                        <td>{{ $proposta->imovel->locacao->grau_parentesco }}</td>
                      </tr>

                      <tr>
                        <th>Imoveis Fiador</th>
                        <td>{{ $proposta->imovel->locacao->imoveis_fiador }}</td>
                      </tr>


                      <tr>
                        <th>Observacoes</th>
                        <td>{{ $proposta->imovel->locacao->observacoes }}</td>
                      </tr>

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
