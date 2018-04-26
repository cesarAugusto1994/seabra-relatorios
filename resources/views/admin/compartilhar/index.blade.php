@extends('adminlte::page')

@section('title', 'Seabra - Indique um Amigo')

@section('content_header')
    <h1>Indique um Amigo</h1>
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
        <th>Mensagem</th>
        <th>Imovel</th>
        <th>Email Amigos</th>
        <th>Formulário Origem</th>
        <th>Opções</th>
      </tr>
      </thead>
      <tbody>
        @foreach($contatos as $contato)
          <tr>
            <td>{{ $contato->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->mensagem }}</td>
            <td>{{ $contato->imovel_nome }}</td>
            <td>{{ str_replace(' ', ',', $contato->email_amigo) }}</td>
            <td>{{ $contato->formulario_origem }}</td>
            <td><a data-destino="{{ url('/compartilhar') }}" data-table="compartilhar_imovel_amigos" href="{{ route('data_destroy', ['id' => $contato->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro2"><i class="fa fa-trash"></i> Remover</a></td>
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
