@extends('adminlte::page')

@section('title', 'Seabra - Cadastro Curriculos')

@section('content_header')
    <h1>Cadastro Curriculos</h1>
@stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Detalhes</h3>
    <div class="box-tools pull-right">
      <a class="btn btn-google btn-xs" href="{{ url('/curriculo') }}">Voltar</a>
    </div>
  </div>
  <div class="box-body">
      <div class="row">

          <div class="col-lg-4">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Participante</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>ID</th>
                        <td>{{ $curriculo->id }}</td>
                      </tr>

                      <tr>
                        <th>Data</th>
                        <td>{{ $curriculo->created_at->format('d/m/Y H:i') }}</td>
                      </tr>

                      <tr>
                        <th>Nome</th>
                        <td>{{ $curriculo->nome }}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{ $curriculo->email }}</td>
                      </tr>

                      <tr>
                        <th>Telefone</th>
                        <td>{{ $curriculo->telefone }}</td>
                      </tr>

                      <tr>
                        <th>Celular</th>
                        <td>{{ $curriculo->celular }}</td>
                      </tr>

                      <tr>
                        <th>Idade</th>
                        <td>{{ $curriculo->idade }}</td>
                      </tr>

                      <tr>
                        <th>Veículo Próprio</th>
                        <td>{{ $curriculo->veiculo_proprio ? 'Sim' : 'Não' }}</td>
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
                  <h3 class="box-title">Endereço</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>Endereço</th>
                        <td>{{ $curriculo->endereco }}</td>
                      </tr>

                      <tr>
                        <th>Bairro</th>
                        <td>{{ $curriculo->bairro }}</td>
                      </tr>

                      <tr>
                        <th>Cidade</th>
                        <td>{{ $curriculo->cidade }}</td>
                      </tr>

                      <tr>
                        <th>CEP</th>
                        <td>{{ $curriculo->cep }}</td>
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
                  <h3 class="box-title">Escolaridade</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>Escolaridade</th>
                        <td>{{ $curriculo->escolaridade }}</td>
                      </tr>

                      <tr>
                        <th>Conhecimentos Informática</th>
                        <td>{{ $curriculo->conhecimentos_informatica }}</td>
                      </tr>

                      <tr>
                        <th>Ingles</th>
                        <td>{{ $curriculo->idioma_ingles }}</td>
                      </tr>

                      <tr>
                        <th>Espanhol</th>
                        <td>{{ $curriculo->idioma_espanhol }}</td>
                      </tr>

                      <tr>
                        <th>Outros Idiomas</th>
                        <td>{{ $curriculo->outros_idiomas }}</td>
                      </tr>

                      <tr>
                        <th>Outros Idiomas Descrição</th>
                        <td>{{ $curriculo->outros_idiomas_descrição }}</td>
                      </tr>

                      </thead>

                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Informações Profissionais</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped no-margin">
                      <thead>

                      <tr>
                        <th>Possui Creci?</th>
                        <td>{{ $curriculo->creci }}</td>
                      </tr>

                      <tr>
                        <th>Creci N°</th>
                        <td>{{ $curriculo->creci_numero }}</td>
                      </tr>

                      <tr>
                        <th>Cargo Pretendido</th>
                        <td>{{ $curriculo->cargo }}</td>
                      </tr>

                      <tr>
                        <th>Experiência Mercado Imobiliário</th>
                        <td>{{ $curriculo->experiencia_mercado_imobiliario ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>Experiência Mercado Televendas</th>
                        <td>{{ $curriculo->experiencia_televendas ? 'Sim' : 'Não' }}</td>
                      </tr>

                      <tr>
                        <th>Salário Pretendido</th>
                        <td>{{ $curriculo->salario }}</td>
                      </tr>

                      <tr>
                        <th>Experiências Profissionais</th>
                        <td>{{ $curriculo->experiencias_profissionais }}</td>
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
