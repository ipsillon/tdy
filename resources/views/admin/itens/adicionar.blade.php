@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">

        <div class="box">

            <!-- form start -->
            <form role="form" action="{{route('admin.itens.salvar')}}" method="post">
            
                {{csrf_field()}}

                <div class="box-body">
                    <div class="form-group">

                        <label for="nome">Nome do Item</label>
                        
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do item">

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
