@extends('adminlte::page')

@section('title', 'Seabra')

@section('content_header')

      <h1>
        Principal
        <small></small>
      </h1>

@stop

@section('content')

    <div class="row">

      <div class="col-md-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Propostas de Compra</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-green">{{ App\Helpers\PropostaHelper::getPropostasPorTipo() }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Compra', 1) as $item)
                      <tr>
                          <td>{{ $item->pessoa->nome }}</td>
                          <td>{{ $item->pessoa->email }}</td>
                          <td>{{ $item->pessoa->telefone }}</td>
                          <td><a href="{{ url('/proposta/compra/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Compra') > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/proposta/compra') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Propostas de Locação</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-blue">{{ App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Locacao') }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Locacao', 1) as $item)
                      <tr>
                          <td>{{ $item->pessoa->nome }}</td>
                          <td>{{ $item->pessoa->email }}</td>
                          <td>{{ $item->pessoa->telefone }}</td>
                          <td><a href="{{ url('/proposta/locacao/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Locacao') > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/proposta/locacao') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Propostas de Lançamentos</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-red">{{ App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Lancamento') }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Lancamento', 1) as $item)
                      <tr>
                          <td>{{ $item->pessoa->nome }}</td>
                          <td>{{ $item->pessoa->email }}</td>
                          <td>{{ $item->pessoa->telefone }}</td>
                          <td><a href="{{ url('/proposta/lancamento/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Lancamento') > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/proposta/lancamento') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

    </div>

    <div class="row">

      <div class="col-md-3">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Compradores PF</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-green">{{ App\Helpers\Helper::registroPorTipoCadastro(1) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(1, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/pessoa-fisica/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(1) > 4)
                  <a class="btn btn-success btn-sm" href="{{ url('/cadastro/pessoa-fisica') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Compradores PJ</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-green">{{ App\Helpers\Helper::registroPorTipoCadastro(2) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(2, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/pessoa-juridica/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(2) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/pessoa-juridica') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Locatários PF</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-yellow">{{ App\Helpers\Helper::registroPorTipoCadastro(3) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(3, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/locatario/pessoa-fisica/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(3) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/locatario/pessoa-fisica') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Locatários PJ</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-yellow">{{ App\Helpers\Helper::registroPorTipoCadastro(4) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(4, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/locatario/pessoa-juridica/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(4) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/locatario/pessoa-juridica') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

    </div>

    <div class="row">

      <div class="col-md-3">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Fiadores PF</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-blue">{{ App\Helpers\Helper::registroPorTipoCadastro(5) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(5, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/fiador/pessoa-fisica/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(5) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/fiador/pessoa-fisica') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Fiadores PJ</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-light-blue">{{ App\Helpers\Helper::registroPorTipoCadastro(6) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(6, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/fiador/pessoa-juridica/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(6) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/fiador/pessoa-juridica') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Imóveis Cadastrados</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages" aria-describedby="tooltip435290">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(7, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/imovel/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(7) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/imovel') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Imóveis Encomendados</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="min-height: 250px;max-height: 250px;overflow-y: auto;">
              <table class="table">
                <tbody>
                  @forelse(App\Helpers\Helper::registroPorTipoCadastro(8, 1) as $item)
                      <tr>
                          <td>{{ $item->nome }}</td>
                          <td>{{ $item->email }}</td>
                          <td>{{ $item->telefone }}</td>
                          <td><a href="{{ url('/cadastro/encomendar-imovel/' . $item->id) }}" class="btn btn-default btn-xs">Ver</a></td>
                      </tr>
                  @empty
                      <p>Nenhum registro encontrado.</p>
                  @endforelse

                </tbody>
              </table>
              <div class="text-center">
                @if(App\Helpers\Helper::registroPorTipoCadastro(8) > 4)
                  <a class="btn btn-default btn-sm" href="{{ url('/cadastro/encomendar-imovel') }}">Ver Mais</a>
                @endif
              </div>
            </div>
          </div>
      </div>

    </div>

@stop
