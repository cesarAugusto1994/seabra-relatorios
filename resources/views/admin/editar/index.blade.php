@extends('adminlte::page')

@section('title', 'Seabra - Editar')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')

<div class="row">

    @if($entidade == 'proposta')

      <div class="col-lg-4">

        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Formulário Proposta</h3>
        </div>
        <div class="box-body">
          <div class="">

            <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->id]) }}" method="post">

              {{ csrf_field() }}

              <input type="hidden" name="entidade" value="{{ $entidade }}"/>
              <input type="hidden" name="return" value="{{ $return }}"/>

              @foreach($registros->toArray() as $key => $registro)

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                    <div class="col-sm-10">

                      @if(strlen($registro) < 50)
                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                      @else
                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                      @endif
                    </div>
                  </div>


              @endforeach

              <button type="submit" class="btn btn-success">Salvar</button>
              <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

            </form>

          </div>
        </div>
        </div>

      </div>

        @if($registros->pessoa)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário Cliente</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->pessoa->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->pessoa->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->pessoa->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->pessoa->conjuge)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Conjuge</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->pessoa->conjuge->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->pessoa->conjuge->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->pessoa->conjuge->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->pessoa->dadosComerciais)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Dados Comerciais</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->pessoa->dadosComerciais->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->pessoa->dadosComerciais->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->pessoa->dadosComerciais->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->imovel)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Imóvel</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->imovel->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->imovel->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->imovel->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->imovel->pagamento)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Imóvel Pagamento</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->imovel->pagamento->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->imovel->pagamento->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->imovel->pagamento->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

    @endif

    @if($entidade == 'pessoa')

        @if($registros)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->fisica)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário Cliente</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->fisica->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->fisica->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->fisica->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->juridica)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário Cliente</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->juridica->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->juridica->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->juridica->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->conjuge)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Conjuge</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->conjuge->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->conjuge->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->conjuge->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->dadosComerciais)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Dados Comerciais</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->dadosComerciais->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->dadosComerciais->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->dadosComerciais->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->financeiro)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário Financeiro</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->financeiro->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->financeiro->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->financeiro->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->aplicacoes)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário Aplicação Financeira</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->aplicacoes->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->aplicacoes->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->aplicacoes->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->sociedade)
            <div class="col-lg-4">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Formulário Participações Societárias</h3>
                </div>
                <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->sociedade->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->sociedade->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->sociedade->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
            </div>
            </div>
        @endif

        @if($registros->endereco)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Endereço</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->endereco->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->endereco->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->endereco->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->informacoesBancarias->isNotEmpty())
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Informacoes bancárias</h3>
                    </div>
                    <div class="box-body">

                        @foreach($registros->informacoesBancarias as $informacoesbancarias)

                          <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $informacoesbancarias->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $informacoesbancarias->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($informacoesbancarias->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                          </form>
                          <hr/>

                        @endforeach
                </div>
                </div>
            </div>
        @endif

        @if($registros->referenciasComerciais->isNotEmpty())
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Referencias Comerciais</h3>
                    </div>
                    <div class="box-body">

                        @foreach($registros->referenciasComerciais as $referencia)

                          <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $referencia->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $referencia->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($referencia->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                          </form>
                          <hr/>

                        @endforeach
                </div>
                </div>
            </div>
        @endif

        @if($registros->veiculo)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Veiculo</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->veiculo->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->veiculo->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->veiculo->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

        @if($registros->imovel)
            <div class="col-lg-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Formulário Imóvel</h3>
                    </div>
                    <div class="box-body">
                  <div class="">

                        <form class="form-horizontal" action="{{ route('data_editable_update', ['id' => $registros->imovel->id]) }}" method="post">

                          {{ csrf_field() }}

                          <input type="hidden" name="entidade" value="{{ $registros->imovel->getTable() }}"/>
                          <input type="hidden" name="return" value="{{ $return }}"/>

                              @foreach($registros->imovel->toArray() as $key => $registro)

                                  <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">{{ title_case(str_replace('_', ' ', $key)) }}</label>

                                    <div class="col-sm-10">

                                      @if(strlen($registro) < 50)
                                          <input type="text" value="{{$registro}}" name="{{$key}}" {{ $key == 'id' ? 'readonly' : '' }} class="form-control">
                                      @else
                                          <textarea rows="5" class="form-control" name="{{$key}}">{{$registro}}</textarea>
                                      @endif
                                    </div>
                                  </div>

                              @endforeach


                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ $return }}" class="btn btn-default">Cancelar</a>

                        </form>
                  </div>
                </div>
                </div>
            </div>
        @endif

    @endif

</div>

@stop
