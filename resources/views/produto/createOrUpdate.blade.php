@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                @if(isset($produto))
                    <div class="panel-heading text-center text-uppercase">Editar Produto</div>
                @else
                    <div class="panel-heading text-center text-uppercase">Adicionar Produto</div>
                @endif

                <div class="panel-body">
                    @if(isset($produto))
                        {{ Form::model($produto, ['route' => ['produto.update', $produto->id], 'method' => 'patch']) }}
                    @else
                        {{ Form::open(['route' => 'produto.store']) }}
                    @endif

                        <div class="form-group">
                            {{ Form::label('nome', 'Nome') }}                              
                            {{ Form::text('nome', null, ['class' => 'form-control', 'id'=>'nome']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('descricao', 'Descrição') }}                              
                            {{ Form::text('descricao', null, ['class' => 'form-control', 'id'=>'descricao']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('preco', 'Preço') }}                              
                            {{ Form::text('preco', null, ['class' => 'form-control', 'id'=>'preco']) }}
                        </div>
                        <div class="form-group">
                            <div class="btn-group">
                                @if(isset($produto))
                                    {{ Form::button('Salvar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                                @else
                                    {{ Form::button('Adicionar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                                @endif
                                {{ link_to_route('produto.index', 'Cancelar', null, ['class'=>'btn btn-danger']) }}
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