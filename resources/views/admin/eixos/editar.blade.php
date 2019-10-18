@extends('adminlte::page')

@section('title', 'TDY')

@section('content_header')
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">

        <div class="box">

            <!-- form start -->
            <form role="form" action="{{route('admin.eixos.atualizar', $eixo->id)}}" method="post">

                <input type="hidden" name="_method" value="put">
                {{csrf_field()}}

                <div class="box-body">

                    <div class="form-group {{$errors->has('nome')?'has-error':''}}">
                        <label for="eixo-nome">Nome do eixo</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{$errors->has('nome')? old('nome') : $eixo->nome}}"" placeholder="Nome do eixo">
                        <span class="help-block">
                            {{$errors->first('nome')}}
                        </span>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

        </div>


    </div>

</div>


@stop
