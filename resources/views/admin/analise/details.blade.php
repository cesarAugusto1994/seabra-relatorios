@extends('adminlte::page')

@section('title', 'Seabra - Análise de Crédito')

@section('content_header')
    <h1>Análise de Crédito N. {{ $pessoa->id }}</h1>
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
                        <th>Nascimento</th>
                        <td>{{ $pessoa->fisica->nascimento }}</td>
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
                        <th>CPF</th>
                        <td>{{ $pessoa->fisica->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG</th>
                        <td>{{ $pessoa->fisica->rg }}</td>
                      </tr>

                      <tr>
                        <th>RG Emissão</th>
                        <td>{{ $pessoa->fisica->rg_data_emissao }}</td>
                      </tr>

                      <tr>
                        <th>RG Emissor</th>
                        <td>{{ $pessoa->fisica->rg_emissor }}</td>
                      </tr>

                      <tr>
                        <th>RG Estado Emissão</th>
                        <td>{{ $pessoa->fisica->rg_estado_emissao }}</td>
                      </tr>

                      <tr>
                        <th>CPF do Conjuge</th>
                        <td>{{ $pessoa->conjuge->cpf }}</td>
                      </tr>

                      <tr>
                        <th>RG do Conjuge</th>
                        <td>{{ $pessoa->conjuge->rg }}</td>
                      </tr>

                      <tr>
                        <th>Nome do Conjuge</th>
                        <td>{{ $pessoa->conjuge->nome }}</td>
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
                        <th>Tipo Residencia</th>
                        <td>{{ $pessoa->imovel_situacao }}</td>
                      </tr>

                      <tr>
                        <th>Tempo Residencia</th>
                        <td>{{ $pessoa->tempo_aquisicao_meses }} / {{ $pessoa->tempo_aquisicao_anos }}</td>
                      </tr>

                      <tr>
                        <th>Grau de Instrução</th>
                        <td>{{ $pessoa->fisica->grau_instrucao }}</td>
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
                        <th>Cargo</th>
                        <td>{{ $pessoa->dadosComerciais->funcao }}</td>
                      </tr>

                      <tr>
                        <th>Vinculo Empregatício</th>
                        <td>{{ $pessoa->dadosComerciais->vinculo_empregaticio }}</td>
                      </tr>

                      <tr>
                        <th>CNPJ</th>
                        <td>{{ $pessoa->dadosComerciais->cnpj }}</td>
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

                      <tr>
                        <th>Fax</th>
                        <td>{{ $pessoa->dadosComerciais->fax }}</td>
                      </tr>

                      <tr>
                        <th>Admissão</th>
                        <td>{{ $pessoa->dadosComerciais->data_admissao }}</td>
                      </tr>

                      <tr>
                        <th>Renda Mensal Comprovada</th>
                        <td>R$ {{ number_format($pessoa->dadosComerciais->renda_mensal_comprovada, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Exerce o cargo há</th>
                        <td>{{ $pessoa->dadosComerciais->tempo_funcao_meses }} / {{ $pessoa->dadosComerciais->tempo_funcao_anos }}</td>
                      </tr>

                      <tr>
                        <th>Outras Rendas</th>
                        <td>R$ {{ number_format($pessoa->dadosComerciais->outras_rendas, 2, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th>Outras Rendas Exemplo</th>
                        <td>{{ $pessoa->dadosComerciais->outras_rendas_exemplo }}</td>
                      </tr>

                      <tr>
                        <th>Empresa Anterior</th>
                        <td>{{ $pessoa->dadosComerciais->empregador_anterior }}</td>
                      </tr>

                      <tr>
                        <th>Renda Mensal anterior</th>
                        <td>{{ $pessoa->dadosComerciais->renda_mensal_anterior }}</td>
                      </tr>

                      <tr>
                        <th>Cargo Anterior</th>
                        <td>{{ $pessoa->dadosComerciais->funcao_anterior }}</td>
                      </tr>

                      <tr>
                        <th>Tempo Emprego Anterior</th>
                        <td>{{ $pessoa->dadosComerciais->tempo_emprego_anterior }}</td>
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
                  <h3 class="box-title">Finanaceiro</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                            <tr>
                              <th>ID</th>
                              <td>{{ $pessoa->financeiro->id }}</td>
                            </tr>

                            <tr>
                              <th>Dependentes</th>
                              <td>{{ $pessoa->financeiro->dependentes_nenhum }}</td>
                            </tr>

                            <tr>
                              <th>Dependentes até 5</th>
                              <td>{{ $pessoa->financeiro->dependentes_ate_5 }}</td>
                            </tr>

                            <tr>
                              <th>Dependentes entre 5 à 18</th>
                              <td>{{ $pessoa->financeiro->dependentes_5_a_18 }}</td>
                            </tr>

                            <tr>
                              <th>Dependentes entre 19 à 25</th>
                              <td>{{ $pessoa->financeiro->dependentes_19_a_25 }}</td>
                            </tr>

                            <tr>
                              <th>Dependentes entre 26 à 60</th>
                              <td>{{ $pessoa->financeiro->dependentes_26_a_60 }}</td>
                            </tr>

                            <tr>
                              <th>Dependentes maiores de 60 anos</th>
                              <td>{{ $pessoa->financeiro->dependentes_mais_de_60 }}</td>
                            </tr>

                            <tr>
                              <th>Educação</th>
                              <td>R$ {{ number_format($pessoa->financeiro->educacao, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Alimentação</th>
                              <td>R$ {{ number_format($pessoa->financeiro->alimentacao, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Aluguel</th>
                              <td>R$ {{ number_format($pessoa->financeiro->aluguel, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Seguros</th>
                              <td>R$ {{ number_format($pessoa->financeiro->seguros, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Plano Saúde</th>
                              <td>R$ {{ number_format($pessoa->financeiro->plano_saude, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Previdência Privada</th>
                              <td>R$ {{ number_format($pessoa->financeiro->previdencia_privada, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Pensão Alimenticia</th>
                              <td>R$ {{ number_format($pessoa->financeiro->pensao_alimenticia, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Combustivel</th>
                              <td>R$ {{ number_format($pessoa->financeiro->combustivel, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Outros</th>
                              <td>R$ {{ number_format($pessoa->financeiro->outros, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Banco do Brasil</th>
                              <td>{{ $pessoa->financeiro->banco_brasil ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Bradesco</th>
                              <td>{{ $pessoa->financeiro->bradesco ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Santander</th>
                              <td>{{ $pessoa->financeiro->santander ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>HSBC</th>
                              <td>{{ $pessoa->financeiro->hsbc ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Caixa Economica Federal</th>
                              <td>{{ $pessoa->financeiro->caixa_economica_federal ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Itaú</th>
                              <td>{{ $pessoa->financeiro->itau ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Banco Estrangeiro</th>
                              <td>{{ $pessoa->financeiro->banco_estrangeiro ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Banco Publico</th>
                              <td>{{ $pessoa->financeiro->banco_publico ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Banco Privado Nacional</th>
                              <td>{{ $pessoa->financeiro->banco_privado_nacional ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Possui conta desde</th>
                              <td>{{ $pessoa->financeiro->pussui_conta_desde }}</td>
                            </tr>

                            <tr>
                              <th>Cheque</th>
                              <td>{{ $pessoa->financeiro->cheques }}</td>
                            </tr>

                            <tr>
                              <th>Cartão de Crédito</th>
                              <td>{{ $pessoa->financeiro->cartao_credito }}</td>
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
                  <h3 class="box-title">Aplicações Financeiras</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                            <tr>
                              <th>ID</th>
                              <td>{{ $pessoa->aplicacoes->id }}</td>
                            </tr>

                            <tr>
                              <th>Poupança</th>
                              <td>R$ {{ number_format($pessoa->aplicacoes->poupanca, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Aplicações</th>
                              <td>R$ {{ number_format($pessoa->aplicacoes->aplicacoes, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Outras</th>
                              <td>R$ {{ number_format($pessoa->aplicacoes->outras, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Discrimincacao</th>
                              <td>{{ $pessoa->aplicacoes->discrimincacao }}</td>
                            </tr>

                            <tr>
                              <th>FGTS</th>
                              <td>R$ {{ number_format($pessoa->aplicacoes->fgts, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Possui Imóveis?</th>
                              <td>{{ $pessoa->aplicacoes->possui_imoveis }}</td>
                            </tr>

                            <tr>
                              <th>Especifique</th>
                              <td>{{ $pessoa->aplicacoes->especifique }}</td>
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
                  <h3 class="box-title">Participaçoes Societárias</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                            <tr>
                              <th>ID</th>
                              <td>{{ $pessoa->sociedade->id }}</td>
                            </tr>

                            <tr>
                              <th>Empresa</th>
                              <td>{{ $pessoa->sociedade->empresa }}</td>
                            </tr>

                            <tr>
                              <th>Possui Participação</th>
                              <td>{{ $pessoa->sociedade->possui_participacao ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>CNPJ</th>
                              <td>{{ $pessoa->sociedade->cnpj }}</td>
                            </tr>

                            <tr>
                              <th>Ramo Atividade</th>
                              <td>{{ $pessoa->sociedade->ramo_atividade }}</td>
                            </tr>

                            <tr>
                              <th>Cidade</th>
                              <td>{{ $pessoa->sociedade->cidade }}</td>
                            </tr>

                            <tr>
                              <th>Tempo Existência</th>
                              <td>{{ $pessoa->sociedade->tempo_existencia }}</td>
                            </tr>

                            <tr>
                              <th>Participação Empresa</th>
                              <td>{{ $pessoa->sociedade->participacao_empresa }}</td>
                            </tr>

                            <tr>
                              <th>Número de Funcionários</th>
                              <td>{{ $pessoa->sociedade->numero_funcionario }}</td>
                            </tr>

                            <tr>
                              <th>Capital Social</th>
                              <td>R$ {{ number_format($pessoa->sociedade->capital_social, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Telefone</th>
                              <td>{{ $pessoa->sociedade->telefone }}</td>
                            </tr>

                            <tr>
                              <th>FAX</th>
                              <td>{{ $pessoa->sociedade->fax }}</td>
                            </tr>

                            <tr>
                              <th>Contato</th>
                              <td>{{ $pessoa->sociedade->contato }}</td>
                            </tr>




                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

      </div>
      <div class="row">

          <div class="col-lg-3">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Veículos</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                            <tr>
                              <th>ID</th>
                              <td>{{ $pessoa->veiculo->id }}</td>
                            </tr>

                            <tr>
                              <th>Modelo</th>
                              <td>{{ $pessoa->veiculo->modelo }}</td>
                            </tr>

                            <tr>
                              <th>Ano</th>
                              <td>{{ $pessoa->veiculo->ano }}</td>
                            </tr>

                            <tr>
                              <th>Quitado</th>
                              <td>{{ $pessoa->veiculo->quitado ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Valor Prestação</th>
                              <td>R$ {{ number_format($pessoa->veiculo->valor_prestacao, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Prazo Restante</th>
                              <td>{{ $pessoa->veiculo->prazo_restante }}</td>
                            </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-3">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Imóveis</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                            <tr>
                              <th>ID</th>
                              <td>{{ $pessoa->imovelSimples->id }}</td>
                            </tr>

                            <tr>
                              <th>Cidade</th>
                              <td>{{ $pessoa->imovelSimples->cidade }}</td>
                            </tr>

                            <tr>
                              <th>Bairro</th>
                              <td>{{ $pessoa->imovelSimples->bairro }}</td>
                            </tr>

                            <tr>
                              <th>Quitado</th>
                              <td>{{ $pessoa->veiculo->imovelSimples ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Valor Prestação</th>
                              <td>R$ {{ number_format($pessoa->imovelSimples->valor_prestacao, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Valor Estimado</th>
                              <td>R$ {{ number_format($pessoa->imovelSimples->valor_estimado, 2, ',', '.') }}</td>
                            </tr>

                            <tr>
                              <th>Prazo Restante</th>
                              <td>{{ $pessoa->imovelSimples->prazo_restante }}</td>
                            </tr>


                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-3">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Contato</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                            <tr>
                              <th>ID</th>
                              <td>{{ $pessoa->contato->id }}</td>
                            </tr>

                            <tr>
                              <th>Correspondencia</th>
                              <td>{{ $pessoa->contato->endereco_correspondencia }}</td>
                            </tr>

                            <tr>
                              <th>Telefone</th>
                              <td>{{ $pessoa->contato->telefone }}</td>
                            </tr>

                            <tr>
                              <th>Email</th>
                              <td>{{ $pessoa->contato->email }}</td>
                            </tr>

                            <tr>
                              <th>Receber Email</th>
                              <td>{{ $pessoa->contato->receber_email ? 'Sim' : 'Não' }}</td>
                            </tr>

                            <tr>
                              <th>Receber Carta</th>
                              <td>{{ $pessoa->contato->receber_carta ? 'Sim' : 'Não' }}</td>
                            </tr>


                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-3">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Referências</h3>
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
                              <th>Contato</th>
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
