@extends('adminlte::page')

@section('title', 'TDY')

@section('content_header')
@stop

@section('content')


    @foreach($eixos as $eixo)

        <div class="box box-default">
        
            <div class="box-header with-border">
                <h3 class="box-title">{{$eixo->nome}}</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">

                <div class="row">
                    
                    <div class="col-md-12" >

                        <div class="form-group">

                            <label>Itens</label>

                            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                @foreach($itens as $item)

                                    <option value="{{$item->id}}">{{$item->nome}}</option> 

                                @endforeach
                            </select>
                            
                        </div>
                        <!-- /.form-group -->
                    
                    </div>
                    <!-- /.col -->
                </div>
            <!-- /.row -->
            
            </div>
            <!-- /.box-body -->
            
      </div>

    @endforeach

@stop

@section('js')
    <script> 
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script>
@stop
