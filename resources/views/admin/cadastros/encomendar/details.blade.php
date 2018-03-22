@extends('adminlte::page')

@section('title', 'Seabra - Cadastro Imóvel')

@section('content_header')
    <h1>Cadastro Imóvel N. {{ $pessoa->imovel->id }}</h1>
@stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Detalhes</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-google btn-xs" href="{{ url('/cadastro/encomendar-imovel') }}">Voltar</a>
    </div>
  </div>
  <div class="box-body">
      <div class="row">



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
                        <th>Cidade</th>
                        <td>{{ $pessoa->endereco->cidade }}</td>
                      </tr>


                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-8">
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
                        <td>{{ $pessoa->imovel->id }}</td>
                      </tr>

                      <tr>
                        <th>Tipo</th>
                        <td>{{ App\Helpers\PropostaHelper::imovelTipo($pessoa->imovel->tipo_imovel) }}</td>
                      </tr>

                      <tr>
                        <th>Pretensão</th>
                        <td>{{ App\Helpers\PropostaHelper::imovelPretensao($pessoa->imovel->tipo_pretensao) }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $pessoa->imovel->bairro }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $pessoa->imovel->cidade }}</td>
                      </tr>

                      <tr>
                        <th>Área Privada</th>
                        <td>{{ $pessoa->imovel->area_privada }}</td>
                      </tr>

                      <tr>
                        <th>Dormitórios</th>
                        <td>{{ $pessoa->imovel->dormitorios }}</td>
                      </tr>

                      <tr>
                        <th>Vagas</th>
                        <td>{{ $pessoa->imovel->vagas }}</td>
                      </tr>

                      <tr>
                        <th>Faixa de Preço</th>
                        <td>R$ {{ number_format($pessoa->imovel->faixa_preco, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Valor Entrada</th>
                        <td>R$ {{ number_format($pessoa->imovel->valor_entrada, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Valor Financiamento</th>
                        <td>R$ {{ number_format($pessoa->imovel->valor_financiar, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Prazo Financiamento</th>
                        <td>{{ $pessoa->imovel->prazo_financiamento }}</td>
                      </tr>

                      <tr>
                        <th>Usa FGTS</th>
                        <td>{{ $pessoa->imovel->usa_fgts ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>Valor FGTS</th>
                        <td>R$ {{ number_format($pessoa->imovel->fgts_valor, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Descrição</th>
                        <td>{{ $pessoa->imovel->descricao }}</td>
                      </tr>

                      <tr>
                        <th>Observações</th>
                        <td>{{ $pessoa->imovel->observacoes }}</td>
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
