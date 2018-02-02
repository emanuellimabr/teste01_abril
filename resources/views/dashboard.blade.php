@extends('layouts.app')

@section('content')
    <h2 class="text-center">Bem Vindo ao Sistema de Controle de Estoque Abril</h2>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="dash-box dash-box-color-1">
                <div class="dash-box-icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="dash-box-body">
                    <span class="dash-box-count">8,252</span>
                    <span class="dash-box-title">Clientes</span>
                </div>

                <div class="dash-box-action">
                    <button>Ver Todos</button>
                </div>				
            </div>
        </div>
        <div class="col-md-4">
            <div class="dash-box dash-box-color-2">
                <div class="dash-box-icon">
                    <i class="glyphicon glyphicon-tags"></i>
                </div>
                <div class="dash-box-body">
                    <span class="dash-box-count">100</span>
                    <span class="dash-box-title">Produtos</span>
                </div>

                <div class="dash-box-action">
                    <button>Ver Todos</button>
                </div>				
            </div>
        </div>
        <div class="col-md-4">
            <div class="dash-box dash-box-color-3">
                <div class="dash-box-icon">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="dash-box-body">
                    <span class="dash-box-count">2502</span>
                    <span class="dash-box-title">Pedidos</span>
                </div>

                <div class="dash-box-action">
                    <button>Ver Todos</button>
                </div>				
            </div>
        </div>
    </div>
@endsection

