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
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
            </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Fiadores PF</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-blue">{{ App\Helpers\Helper::registroPorTipoCadastro(5) }}</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              Aparecerão aqui
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
            <div class="box-body">
              Aparecerão aqui
            </div>
          </div>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Imóveis Cadastrados</h3>
              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages" aria-describedby="tooltip435290">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              Aparecerão aqui
            </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Imóveis Encomendados</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              Aparecerão aqui
            </div>
          </div>
      </div>

    </div>

@stop
