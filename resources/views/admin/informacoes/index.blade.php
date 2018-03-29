@extends('adminlte::page')

@section('title', 'Seabra - Solicitação de Informações')

@section('content_header')
    <h1>Solicitação de Informações</h1>
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
        <th>Email</th>
        <th>Telefone</th>
        <th>Dúvida</th>
        <th>Imóveis</th>
        <th>Formulário Origem</th>
      </tr>
      </thead>
      <tbody>
        @foreach($contatos as $contato)
          <tr>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->telefone }}</td>
            <td>{{ $contato->duvida }}</td>
            <td>{{ $contato->imovel }}
              @if($contato->imovel_1){{ $contato->imovel_1 }}, @endif
              @if($contato->imovel_2){{ $contato->imovel_2 }}, @endif
              @if($contato->imovel_3){{ $contato->imovel_3 }}, @endif 
              @if($contato->imovel_4){{ $contato->imovel_4 }}, @endif
              @if($contato->imovel_5){{ $contato->imovel_5 }}, @endif
              @if($contato->imovel_6){{ $contato->imovel_6 }} @endif
            </td>
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
