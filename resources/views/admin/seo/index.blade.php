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
        <th>DDD</th>
        <th>Telefone</th>
        <th>Mensagem</th>
        <th>Empreendimento</th>
        <th>Observações</th>
        <th>Adquirir Em</th>
        <th>Unidade de Interesse</th>
        <th>Opções</th>
      </tr>
      </thead>
      <tbody>
        @foreach($seo as $contato)
          <tr>
            <td>{{ $contato->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->ddd }}</td>
            <td>{{ $contato->telefone }}</td>
            <td>{{ $contato->mensagem }}</td>
            <td>{{ $contato->empreendimento_id }}</td>
            <td>{{ $contato->observacoes }}</td>
            <td>{{ $contato->adquirir_em }}</td>
            <td>{{ $contato->unidade_interesse }}</td>
            <td><a data-destino="{{ url('/seo') }}" data-table="seo" href="{{ route('data_destroy', ['id' => $contato->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro2"><i class="fa fa-trash"></i> Remover</a></td>
          </tr>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="15">{{ $seo->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
