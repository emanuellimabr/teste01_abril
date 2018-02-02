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
                <div class="panel-heading text-center text-uppercase">Clientes</div>

                <div class="panel-body">

                  <div class="table-responsive">

                    <table class="table">
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Telefone</th>                            
                            <th class="text-center">Ações</th>                            
                        </tr>

                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="text-center">{{ $cliente->nome }} </td>
                                <td class="text-center"> {{ $cliente->email }}</td>
                                <td class="text-center"> {{ $cliente->telefone }}</td>                              

                                <td class="text-center">
                                  <div class="btn-group">
                                    {!! Form::open(array('route'=>['cliente.destroy',$cliente->id],'method'=>'DELETE')) !!}
                                    
                                    {{ link_to_route('cliente.show', 'Visualizar ',[$cliente->id],['class'=>'btn btn-warning']) }}
                                    {{ link_to_route('cliente.edit', 'Editar', [$cliente->id], ['class'=>'btn btn-primary']) }}

                                    {!! Form::button('Apagar', ['type'=>'submit','class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                  </div>

                  <div class="text-center">
                      {{ $clientes->links() }}
                  </div>

                  {{ link_to_route('cliente.create', 'Adicionar Cliente', null, ['class'=>'btn btn-success pull-left']) }}<br><br>

                </div>
            </div>
        </div>
    </div>
@endsection
