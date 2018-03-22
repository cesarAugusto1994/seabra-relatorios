@extends('adminlte::page')

@section('title', 'Seabra - Cadastro Compradores - Pessoa Juridica')

@section('content_header')
    <h1>Cadastro Compradores - Pessoa Juridica</h1>
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
        <th>Razão Social</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Celular</th>

        <th>Ramo Atividade</th>
        <th>CNPJ</th>
        <th>IE</th>

        <th>Opçoes</th>

      </tr>
      </thead>
      <tbody>
        @foreach($pessoas as $pessoa)
          <tr>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->email }}</td>
            <td>{{ $pessoa->telefone }}</td>
            <td>{{ $pessoa->celular }}</td>
            <td>{{ $pessoa->juridica->ramo_atividade }}</td>
            <td>{{ $pessoa->juridica->cnpj }}</td>
            <td>{{ $pessoa->juridica->ie }}</td>
            <td><a href="{{ url('/cadastro/locatario/pessoa-juridica/' . $pessoa->id) }}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="15">{{ $pessoas->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
