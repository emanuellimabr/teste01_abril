@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                @if(isset($pedido))
                    <div class="panel-heading text-center text-uppercase">Editar Pedido</div>
                @else
                    <div class="panel-heading text-center text-uppercase">Adicionar Pedido</div>
                @endif

                <div class="panel-body">
                    @if(isset($pedido))
                        {{ Form::model($pedido, ['route' => ['pedido.update', $pedido->id], 'method' => 'patch']) }}
                    @else
                        {{ Form::open(['route' => 'pedido.store']) }}
                    @endif

                        <div class="form-group">
                            {{ Form::label('id_produto', 'Produto') }}                              
                            {{ Form::select('id_produto', $produtos)}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('id_cliente', 'Cliente') }}                              
                            {{ Form::select('id_cliente', $clientes)}}
                        </div>
                        <div class="form-group">
                            <div class="btn-group">
                                @if(isset($pedido))
                                    {{ Form::button('Salvar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                                @else
                                    {{ Form::button('Adicionar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                                @endif
                                {{ link_to_route('pedido.index', 'Cancelar', null, ['class'=>'btn btn-danger']) }}
                            </div>
                        </div>
                        
                        
                        {{ Form::close() }}

                </div>
            </div>

            @if ( count( $errors ) > 0 )
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    
@endsection