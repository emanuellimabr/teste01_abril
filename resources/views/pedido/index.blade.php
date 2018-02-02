@extends('layouts.app')
<!--@section('css')
  @parent
  <style media="screen">
    .pagination{
      margin: 10px 0;
    }
  </style>
@endsection-->

@section('content')

    <div class="row">
        <div class="col-md-12">

            @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-primary">
                <div class="panel-heading text-center text-uppercase">Pedidos</div>

                <div class="panel-body">

                  <div class="table-responsive">

                    <table class="table">
                        <tr>
                            <th class="text-center">Produto</th>
                            <th class="text-center">Cliente</th>                                                   
                            <th class="text-center">Ações</th>                            
                        </tr>

                        @foreach($pedidos as $pedido)
                            <tr>
                                <td class="text-center">{{ $pedido->nomeproduto }} </td>
                                <td class="text-center"> {{ $pedido->nomecliente }}</td>                                                            

                                <td class="text-center">
                                  <div class="btn-group">
                                    {!! Form::open(array('route'=>['pedido.destroy',$pedido->id],'method'=>'DELETE')) !!}
                                    
                                    <!--{{ link_to_route('pedido.show', 'Visualizar ',[$pedido->id],['class'=>'btn btn-warning']) }}-->
                                    {{ link_to_route('pedido.edit', 'Editar', [$pedido->id], ['class'=>'btn btn-primary']) }}

                                    {!! Form::button('Apagar', ['type'=>'submit','class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                  </div>

                  <div class="text-center">
                      {{ $pedidos->links() }}
                  </div>

                  {{ link_to_route('pedido.create', 'Adicionar Pedido', null, ['class'=>'btn btn-success pull-left']) }}<br><br>

                </div>
            </div>
        </div>
    </div>
@endsection
