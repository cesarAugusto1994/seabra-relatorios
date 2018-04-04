@extends('adminlte::page')

@section('title', 'Seabra - Cadastro Locatário Pessoa Juridica')

@section('content_header')
    <h1>Cadastro Locatário Pessoa Juridica N. {{ $pessoa->id }}</h1>
@stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Detalhes</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-google btn-xs" href="{{ url('/cadastro/locatario/pessoa-juridica') }}">Voltar</a>
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
                        <th>Data</th>
                        <td>{{ $pessoa->criado_em->format('d/m/Y H:i') }}</td>
                      </tr>

                      <tr>
                        <th>Razão Social</th>
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

                      @if($pessoa->juridica)

                      <tr>
                        <th>CNPJ</th>
                        <td>{{ $pessoa->juridica->cnpj }}</td>
                      </tr>

                      <tr>
                        <th>IE</th>
                        <td>{{ $pessoa->juridica->ie }}</td>
                      </tr>

                      <tr>
                        <th>Ano Fundação</th>
                        <td>{{ $pessoa->juridica->ano_fundacao }}</td>
                      </tr>

                      @endif

                      <tr>
                        <th>Imovel </th>
                        <td>{{ $pessoa->imovel_situacao }}</td>
                      </tr>

                      @if($pessoa->juridica)

                      <tr>
                        <th>Ramo Atividade</th>
                        <td>{{ $pessoa->juridica->ramo_atividade }}</td>
                      </tr>

                      <tr>
                        <th>Capital Atual</th>
                        <td>R$ {{ number_format($pessoa->juridica->capital_atual, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Representante</th>
                        <td>{{ $pessoa->responsavel->nome }}</td>
                      </tr>

                      <tr>
                        <th>Nacionalidade</th>
                        <td>{{ $pessoa->responsavel->fisica->nacionalidade }}</td>
                      </tr>

                      <tr>
                        <th>Profissao</th>
                        <td>{{ $pessoa->responsavel->dadosComerciais->profissao ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Função</th>
                        <td>{{ $pessoa->responsavel->dadosComerciais->funcao ?? 'Não Informado' }}</td>
                      </tr>

                      <tr>
                        <th>Salário</th>
                        <td>R$ {{ number_format($pessoa->responsavel->dadosComerciais->salario, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Estado Civil</th>
                        <td>{{ $pessoa->responsavel->fisica->estado_civil }}</td>
                      </tr>

                      <tr>
                        <th>Regime Casamento</th>
                        <td>{{ $pessoa->responsavel->fisica->regime_casamento }}</td>
                      </tr>

                      <tr>
                        <th>Nascimento</th>
                        <td>{{ $pessoa->responsavel->fisica->nascimento }}</td>
                      </tr>

                      <tr>
                        <th>CPF</th>
                        <td>{{ $pessoa->responsavel->fisica->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG</th>
                        <td>{{ $pessoa->responsavel->fisica->rg }}</td>
                      </tr>

                      <tr>
                        <th>Endereço Residencial</th>
                        <td>{{ $pessoa->responsavel->endereco ? $pessoa->responsavel->endereco->logradouro : '-' }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $pessoa->responsavel->telefone }}</td>
                      </tr>

                      @endif

                      <tr>
                        <th>Cartório Rec. Firma</th>
                        <td>{{ $pessoa->cartorio_reconhecimento_firma }}</td>
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
