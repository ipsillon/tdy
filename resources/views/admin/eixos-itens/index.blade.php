@extends('adminlte::page')

@section('title', 'TDY')

@section('content_header')
@stop

@section('content')


<!-- form start -->
    <form role="form" action="{{route('admin.eixos-itens.salvar')}}" method="post">

    <input type="hidden" name="_method" value="put">
            
    {{csrf_field()}}


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

                            <select name="eixo-{{$eixo->id}}[]" class="form-control select2" multiple="multiple" data-placeholder="Selecione itens para o {{$eixo->nome}}">
                                @foreach($itens as $item)
                                    <option value="{{$item->id}}" {{$eixo->itens->contains('item_id', $item->id) ? 'selected' : ''}}>{{$item->nome}}</option> 
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

    <button type="submit" class="btn btn-primary">Salvar</button>

    </form>

@stop

@section('js')
    <script> 
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script>
@stop
