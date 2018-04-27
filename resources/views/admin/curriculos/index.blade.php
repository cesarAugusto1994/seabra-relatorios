@extends('adminlte::page')

@section('title', 'Seabra - Curriculos')

@section('content_header')
    <h1>Curriculos</h1>
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
        <th>Data</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Idade</th>
        <th>Cargo Pretendido</th>
        <th>Escolariade</th>
        <th>Experiência Mercado Imobiliário</th>
        <th>CRECI</th>
        <th>Tipo CRECI</th>
        <th>Cód. CRECI</th>
        <th>Veículo Próprio</th>
        <th>Experiência Televendas</th>
        <th>Conhecimentos de Informática</th>
        <th>Pretensão de Ganhos</th>
        <th colspan="2">Opções</th>
      </tr>
      </thead>
      <tbody>
        @foreach($curriculos as $curriculo)
          <tr>
            <td>{{ $curriculo->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $curriculo->nome }}</td>
            <td>{{ $curriculo->telefone_ddd }} - {{ $curriculo->telefone }}</td>
            <td>{{ $curriculo->celular_ddd }} - {{ $curriculo->celular }}</td>
            <td>{{ $curriculo->idade }}</td>
            <td>{{ $curriculo->cargo }}</td>
            <td>{{ $curriculo->escolaridade }}</td>
            <td>{{ $curriculo->experiencia_mercado_imobiliario ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->creci ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->tipo_creci ?? '-' }}</td>
            <td>{{ $curriculo->codigo_creci ?? '-' }}</td>
            <td>{{ $curriculo->veiculo_proprio ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->experiencia_televendas ? 'Sim' : 'Não' }}</td>
            <td>{{ $curriculo->conhecimentos_informatica ? 'Sim' : 'Não' }}</td>
            <td>{{ number_format((float)$curriculo->salario, 2, ',', '.') }}</td>
            <td><a href="{{ url('/curriculo/' . $curriculo->id) }}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
            <td><a data-destino="{{ url('/curriculo') }}" data-table="curriculos" href="{{ route('data_destroy', ['id' => $curriculo->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro2"><i class="fa fa-trash"></i> Remover</a></td>
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
