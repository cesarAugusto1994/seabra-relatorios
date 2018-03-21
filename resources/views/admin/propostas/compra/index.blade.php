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
        <th colspan="4" class="text-center info">Pessoa</th>
        <th colspan="6" class="text-center success">Imovel</th>
        <th colspan="3" class="text-center danger">Pagamento</th>
        <th class="text-center warning"></th>
      </tr>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Celular</th>

        <th>Tipo Imóvel</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>CEP</th>
        <th>Cidade</th>
        <th>UF</th>

        <th>Recursos Proprios</th>
        <th>Financiado</th>
        <th>Total</th>

        <th>Opções</th>

      </tr>
      </thead>
      <tbody>
        @foreach($propostas as $proposta)
          <tr>
            <td>{{ $proposta->pessoa->nome }}</td>
            <td>{{ $proposta->pessoa->email }}</td>
            <td>{{ $proposta->pessoa->telefone }}</td>
            <td>{{ $proposta->pessoa->celular ? $proposta->pessoa->celular : '-' }}</td>
            <td>{{ $proposta->imovel->tipo_imovel }}</td>
            <td>{{ $proposta->imovel->endereco }}</td>
            <td>{{ $proposta->imovel->bairro }}</td>
            <td>{{ $proposta->imovel->cep }}</td>
            <td>{{ $proposta->imovel->cidade }}</td>
            <td>{{ $proposta->imovel->estado }}</td>
            <td>R$ {{ number_format($proposta->imovel->pagamento->pagamento_recursos_proprios, 2, ',', '.') }}</td>
            <td>R$ {{ number_format($proposta->imovel->pagamento->pagamento_financiamento, 2, ',', '.') }}</td>
            <td>R$ {{ number_format($proposta->imovel->pagamento->preco_total, 2, ',', '.') }}</td>
            <td><a href="{{ url('/proposta/compra/' . $proposta->id) }}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td>{{ $propostas->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
