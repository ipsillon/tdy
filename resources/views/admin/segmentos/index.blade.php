@extends('adminlte::page')

@section('title', 'TDY')

@section('content_header')
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
        
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Segmentos</h3>

                <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover">
                    <tr>
                    <th style="width:10%">ID</th>
                    <th>Nome</th>
                    <th style="width:10%">Ações</th>
                    </tr>

                    @foreach($segmentos as $segmento) 
                    
                        <tr>
                            <td>{{$segmento->id}}</td>
                            <td>{{$segmento->nome}}</td>
                            <td>
                                <a class="btn btn-default btn-xs" href="{{route('admin.segmentos.editar', $segmento->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Deseja prosseguir?')" class="btn btn-default btn-xs" href="{{route('admin.segmentos.deletar', $segmento->id)}}"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                
                    @endforeach

                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="{{route('admin.segmentos.adicionar')}}" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Novo Segmento</a>

                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>

            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

@stop
