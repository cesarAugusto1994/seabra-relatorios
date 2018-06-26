@extends('adminlte::page')

@section('title', 'Seabra - Encomenda de Imóvel')

@section('content_header')
    <h1>Encomenda de Imóvel N. {{ $pessoa->imovel->id }}</h1>
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
                        <th>Data</th>
                        <td>{{ $pessoa->criado_em->format('d/m/Y H:i') }}</td>
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
                        <td>R$ {{ $pessoa->imovel->faixa_preco }}</td>
                      </tr>

                      <tr>
                        <th>Valor Entrada</th>
                        <td>R$ {{ $pessoa->imovel->valor_entrada }}</td>
                      </tr>

                      <tr>
                        <th>Valor Financiamento</th>
                        <td>R$ {{ $pessoa->imovel->valor_financiar }}</td>
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
                        <td>R$ {{ $pessoa->imovel->valor_fgts }}</td>
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

          @if($pessoa->imovel)

              <div class="col-lg-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Imagens</h3>
                </div>
                <div class="box-body">
                  <div>

                    <div class="row">

                      @foreach($pessoa->imovel->imagens as $imagem)

                      <div class="col-sm-6 col-md-2">
                        <div class="thumbnail">
                          <img style="max-height:200px;max-width:200px" src="http://www.seabra.com.br/assets/imoveis/{{ $imagem->link }}" alt="...">
                          <div class="caption">
                            <h3>{{ $imagem->titulo }}</h3>
                            <p><a target="_blank" href="http://www.seabra.com.br/assets/imoveis/{{ $imagem->link }}" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> Visualizar</a>
                              <a data-destino="{{ url('/cadastro/imovel/'. $pessoa->imovel->id) }}" data-table="imagens_imovel" href="{{ route('data_destroy', ['id' => $imagem->id]) }}" class="btn btn-xs btn-danger btnRemoverRegistro2" role="button"><i class="fa fa-trash"></i> Remover</a></p>
                          </div>
                        </div>
                      </div>

                      @endforeach

                      </div>

                  </div>
                </div>
              </div>
          </div>

          @endif

      </div>
  </div>
</div>

@stop
