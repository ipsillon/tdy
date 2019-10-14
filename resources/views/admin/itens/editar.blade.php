@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">

        <div class="box">

            <!-- form start -->
            <form role="form" action="{{route('admin.itens.atualizar', $item->id)}}" method="post">

                <input type="hidden" name="_method" value="put">
                {{csrf_field()}}

                <div class="box-body">

                    <div class="form-group">
                        <label for="nome">Nome do item</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{$item->nome}}"" placeholder="Nome do item">
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
