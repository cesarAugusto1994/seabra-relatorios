@extends('adminlte::page')

@section('title', 'Seabra - Solicitação de Contato')

@section('content_header')
    <h1>Solicitação de Contato</h1>
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
        <th>Assunto</th>
        <th>Mensagem</th>
        <th>Escolha Email</th>
        <th>Formulário Origem</th>
      </tr>
      </thead>
      <tbody>
        @foreach($contatos as $contato)
          <tr>
            <td>{{ $contato->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->telefone }}</td>
            <td>{{ $contato->assunto }}</td>
            <td>{{ $contato->mensagem }}</td>
            <td>{{ $contato->escolha_email }}</td>
            <td>{{ $contato->formulario_origem }}</td>
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
