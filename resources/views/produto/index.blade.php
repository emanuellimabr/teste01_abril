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
                <div class="panel-heading text-center text-uppercase">Produtos</div>

                <div class="panel-body">

                  <div class="table-responsive">

                    <table class="table">
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Descrição</th>
                            <th class="text-center">Preço</th>                            
                            <th class="text-center">Ações</th>                            
                        </tr>

                        @foreach($produtos as $produto)
                            <tr>
                                <td class="text-center">{{ $produto->nome }} </td>
                                <td class="text-center"> {{ $produto->descricao }}</td>
                                <td class="text-center"> {{ $produto->preco }}</td>                              

                                <td class="text-center">
                                  <div class="btn-group">
                                    {!! Form::open(array('route'=>['produto.destroy',$produto->id],'method'=>'DELETE')) !!}
                                    
                                    {{ link_to_route('produto.show', 'Visualizar ',[$produto->id],['class'=>'btn btn-warning']) }}
                                    {{ link_to_route('produto.edit', 'Editar', [$produto->id], ['class'=>'btn btn-primary']) }}

                                    {!! Form::button('Apagar', ['type'=>'submit','class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                  </div>

                  <div class="text-center">
                      {{ $produtos->links() }}
                  </div>

                  {{ link_to_route('produto.create', 'Adicionar Produto', null, ['class'=>'btn btn-success pull-left']) }}<br><br>

                </div>
            </div>
        </div>
    </div>
@endsection
