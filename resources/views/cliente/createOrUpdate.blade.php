@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                @if(isset($cliente))
                    <div class="panel-heading text-center text-uppercase">Editar Cliente</div>
                @else
                    <div class="panel-heading text-center text-uppercase">Adicionar Cliente</div>
                @endif

                <div class="panel-body">
                    @if(isset($cliente))
                        {{ Form::model($cliente, ['route' => ['cliente.update', $cliente->id], 'method' => 'patch']) }}
                    @else
                        {{ Form::open(['route' => 'cliente.store']) }}
                    @endif

                        <div class="form-group">
                            {{ Form::label('nome', 'Nome') }}                              
                            {{ Form::text('nome', null, ['class' => 'form-control', 'id'=>'nome']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}                              
                            {{ Form::text('email', null, ['class' => 'form-control', 'id'=>'email']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('telefone', 'Telefone') }}                              
                            {{ Form::text('telefone', null, ['class' => 'form-control', 'id'=>'telefone']) }}
                        </div>
                        <div class="form-group">
                            <div class="btn-group">
                                @if(isset($cliente))
                                    {{ Form::button('Salvar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                                @else
                                    {{ Form::button('Adicionar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                                @endif
                                {{ link_to_route('cliente.index', 'Cancelar', null, ['class'=>'btn btn-danger']) }}
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

