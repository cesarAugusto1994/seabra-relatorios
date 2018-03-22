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
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Propostas Compra</span>
            <span class="info-box-number">{{ App\Helpers\PropostaHelper::getPropostasPorTipo() }}</span>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Propostas Locação</span>
            <span class="info-box-number">{{ App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Locacao') }}</span>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Propostas Lançamentos</span>
              <span class="info-box-number">{{ App\Helpers\PropostaHelper::getPropostasPorTipo('Proposta Lancamento') }}</span>
            </div>
          </div>
        </div>

      <!--
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uploads</span>
            <span class="info-box-number">13,648</span>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">93,139</span>
          </div>

        </div>

      </div>
    -->
    </div>

@stop
