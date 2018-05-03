@extends('adminlte::page')

@section('title', 'Seabra - Propostas Locação')

@section('content_header')
    <h1>Propostas Locação</h1>
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
        <th colspan="4" class="text-center ">Pessoa</th>
        <th colspan="6" class="text-center ">Imovel</th>
        <th colspan="3" class="text-center ">Pagamento</th>
        <th class="text-center "></th>
      </tr>
      <tr>
        <th>Data</th>
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
        <th>Aluguel</th>
        <th>Data Inicio</th>
        <th>Periodo</th>
        <th colspan="2">Opções</th>
      </tr>
      </thead>
      <tbody>
        @foreach($propostas as $proposta)
          <tr>
            <td>{{ $proposta->criado_em->format('d/m/Y H:i') }}</td>
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
            <td>R$ {{ number_format($proposta->imovel->locacao->valor_aluguel, 2, ',', '.') }}</td>
            <td>{{ $proposta->imovel->locacao->inicio_vigencia }}</td>
            <td>{{ $proposta->imovel->locacao->prazo_contrato }}</td>
            <td><a href="{{ url('/proposta/locacao/' . $proposta->id) }}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> Ver</a></td>
            <td><a data-destino="{{ url('/proposta/locacao/') }}" data-table="propostas" href="{{ route('data_destroy', ['id' => $proposta->id]) }}" class="btn btn-danger btn-xs btnRemoverRegistro2"><i class="fa fa-trash"></i> Remover</a></td>
            <td><a href="{{ route('data_editable', ['id' => $proposta->id, 'entidade' => 'proposta', 'return' => '/proposta/locacao']) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
            <td colspan="15">{{ $propostas->links() }}</td>
        </tr>
      <tfoot>
    </table>
  </div>
</div>

</div>

@stop
