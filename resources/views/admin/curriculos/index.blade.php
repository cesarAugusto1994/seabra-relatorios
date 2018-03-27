@extends('adminlte::page')

@section('title', 'Seabra - Propostas Compra')

@section('content_header')
    <h1>Propostas Compra</h1>
@stop

@section('content')

<div class="box box-default">
<div class="box-header with-border">
  <h3 class="box-title">Listagem</h3>
</div>
<div class="box-body">
  <div class="table-responsive">
    <table class="table table-hover table-striped no-margin">
      <thead>
      <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Celular</th>

        <th>Veículo Próprio</th>
        <th>Experiência Mercado Imobiliário</th>
        <th>Escolariade</th>
        <th>Inglês</th>
        <th>Espanhol</th>
        <th>Outros Idiomas</th>
        <th>Outros Idiomas Descrição</th>
        <th>Conhecimentos de Informática</th>
        <th>Experiência Televendas</th>
        <th>Experiências Profissionais</th>

      </tr>
      </thead>
      <tbody>
        @foreach($curriculos as $curriculo)
          <tr>
            <td>{{ $curriculo->nome }}</td>
            <td>{{ $curriculo->idade }}</td>
            <td>{{ $curriculo->telefone_ddd }} - {{ $curriculo->telefone }}</td>
            <td>{{ $curriculo->celular_ddd }} - {{ $curriculo->celular }}</td>
            <td>{{ $curriculo->veiculo_proprio ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->experiencia_mercado_imobiliario ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->escolaridade }}</td>
            <td>{{ $curriculo->idioma_ingles }}</td>
            <td>{{ $curriculo->idioma_espanhol }}</td>
            <td>{{ $curriculo->outros_idiomas }}</td>
            <td>{{ $curriculo->outros_idiomas_descricao }}</td>
            <td>{{ $curriculo->conhecimentos_informatica ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->experiencia_televendas ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->experiencias_profissionais }}</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="15">{{ $curriculos->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
