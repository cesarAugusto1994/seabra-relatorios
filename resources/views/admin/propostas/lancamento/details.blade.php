@extends('adminlte::page')

@section('title', 'Seabra - Propostas Lançamento')

@section('content_header')
    <h1>Propostas Lançamento N. {{ $proposta->id }}</h1>
@stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Detalhes</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-success btn-xs" href="{{ url('/proposta/lancamento') }}">Voltar</a>
      <a data-destino="{{ url('/proposta/lancamento') }}" href="{{ route('proposta_lancamento_destroy', ['id' => $proposta->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro"><i class="fa fa-trash"></i> Remover</a>
    </div>
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
                        <th>Data</th>
                        <td>{{ $proposta->criado_em->format('d/m/Y H:i') }}</td>
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
                        <td>{{ App\Helpers\PropostaHelper::estadoCivil($proposta->pessoa->fisica->estado_civil) }}</td>
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

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $proposta->pessoa->endereco->logradouro }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $proposta->pessoa->endereco->bairro }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $proposta->pessoa->endereco->cep }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $proposta->pessoa->endereco->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado</th>
                        <td>{{ App\Helpers\PropostaHelper::estado($proposta->pessoa->endereco->estado) }}</td>
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
                        <th>Sexo</th>
                        <td>{{ $proposta->pessoa->conjuge->sexo ? 'Feminino' : 'Masculino' }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ App\Helpers\PropostaHelper::estadoCivil($proposta->pessoa->conjuge->estado_civil) }}</td>
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

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $proposta->pessoa->conjuge->residencial }}</td>
                      </tr>

                      <tr>
                        <th>Complemento</th>
                        <td>{{ $proposta->pessoa->conjuge->complemento }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $proposta->pessoa->conjuge->bairro }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $proposta->pessoa->conjuge->cep }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $proposta->pessoa->conjuge->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado</th>
                          <td>{{ App\Helpers\PropostaHelper::estado($proposta->pessoa->conjuge->estado) }}</td>
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
                        <th>Empresa</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->empregador }}</td>
                      </tr>

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->endereco }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->bairro }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->cep }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado</th>
                        <td>{{ App\Helpers\PropostaHelper::estado($proposta->pessoa->dadosComerciais->estado) }}</td>
                      </tr>

                      <tr>
                        <th>telefone Comercial</th>
                        <td>{{ $proposta->pessoa->dadosComerciais->telefone }}</td>
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
                        <th>Cidade</th>
                        <td>{{ $proposta->imovel->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Estado</th>
                        <td>{{ $proposta->imovel->estado }}</td>
                      </tr>

                      <tr>
                        <th>Unidade</th>
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
                        <td>{{ $proposta->imovel->pagamento->id }}</td>
                      </tr>

                      <tr>
                        <th>Valor</th>
                        <td>R$ {{ number_format($proposta->imovel->pagamento->preco_total, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Recursos Próprios</th>
                        <td>R$ {{ number_format($proposta->imovel->pagamento->pagamento_recursos_proprios, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Financiamento</th>
                        <td>R$ {{ number_format($proposta->imovel->pagamento->pagamento_financiamento, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Correção Monetária</th>
                        <td>{{ $proposta->imovel->pagamento->correcao_monetaria }}</td>
                      </tr>

                      <tr>
                        <th>Correção Monetária Valor</th>
                        <td>R$ {{ number_format($proposta->imovel->pagamento->correcao_monetaria_valor, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Incidência Juros</th>
                        <td>{{ $proposta->imovel->pagamento->incidencia_juros ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>Tipo Juros</th>
                        <td>{{ $proposta->imovel->pagamento->tipo_juros }}</td>
                      </tr>

                      <tr>
                        <th>usa FGTS</th>
                        <td>{{ $proposta->imovel->pagamento->usa_fgts ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>FGTS Valor</th>
                        <td>R$ {{ number_format($proposta->imovel->pagamento->fgts_valo, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Descrição</th>
                        <td>{{ $proposta->imovel->pagamento->descricao }}</td>
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
