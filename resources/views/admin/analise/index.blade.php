@extends('adminlte::page')

@section('title', 'Seabra - Análise de Crédito')

@section('content_header')
    <h1>Análise de Crédito</h1>
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
        <th>Email</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Estado Civil</th>
        <th>CPF</th>
        <th>RG</th>
        <th colspan="2">Opçoes</th>
      </tr>
      </thead>
      <tbody>
        @foreach($pessoas as $pessoa)
          <tr>
            <td>{{ $pessoa->criado_em->format('d/m/Y H:i') }}</td>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->email }}</td>
            <td>{{ $pessoa->telefone }}</td>
            <td>{{ $pessoa->celular }}</td>
            <td>{{ $pessoa->fisica->estado_civil }}</td>
            <td>{{ $pessoa->fisica->cpf }}</td>
            <td>{{ $pessoa->fisica->rg }}</td>
            <td><a href="{{ url('/analise-credito/' . $pessoa->id) }}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
            <td><a data-destino="{{ url('/analise-credito') }}" data-table="pessoas" href="{{ route('data_destroy', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro2"><i class="fa fa-trash"></i> Remover</a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="16">{{ $pessoas->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
