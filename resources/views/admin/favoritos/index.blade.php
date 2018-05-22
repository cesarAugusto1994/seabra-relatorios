@extends('adminlte::page')

@section('title', 'Seabra - Favoritos')

@section('content_header')
    <h1>Favoritos</h1>
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
        <th>Dúvida</th>
        <th>Imóvel</th>
        <th>Referencia</th>
        <th>Opções</th>
      </tr>
      </thead>
      <tbody>
        @foreach($contatos as $contato)
          <tr>
            <td>{{ $contato->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->telefone }}</td>
            <td>{{ $contato->duvidas }}</td>
            <td>{{ $contato->titulo }}</td>
            <td>{{ $contato->referencia }}</td>
            <td><a data-destino="{{ url('/favoritos') }}" data-table="favoritos" href="{{ route('data_destroy', ['id' => $contato->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro2"><i class="fa fa-trash"></i> Remover</a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="15">{{ $contatos->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
