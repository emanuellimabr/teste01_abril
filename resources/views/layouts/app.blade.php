<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Controle de Estoque Abril</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/css/appside.css">
        <link rel="stylesheet" href="/css/custom.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Controle Estoque</h3>
                    <strong>CE</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Início
                        </a>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Clientes
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="{{ route('cliente.create') }}">Adicionar Cliente</a></li>
                            <li><a href="{{ route('cliente.index') }}">Listar Clientes</a></li>
                            <!--<li><a href="#">Home 3</a></li>-->
                        </ul>
                    </li>
                    <li>                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Produtos
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="{{ route('produto.create') }}">Adicionar Produto</a></li>
                            <li><a href="{{ route('produto.index') }}">Listar Produtos</a></li>
                            <!--<li><a href="#">Page 3</a></li>-->
                        </ul>
                    </li>
                    <li>                        
                        <a href="#pedidoSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Pedidos
                        </a>
                        <ul class="collapse list-unstyled" id="pedidoSubmenu">
                            <li><a href="#">Adicionar Pedido</a></li>
                            <li><a href="#">Listar Pedidos</a></li>
                            <!--<li><a href="#">Page 3</a></li>-->
                        </ul>
                    </li>                   
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contato
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="http://www.grupoabril.com.br/pt/" class="download" style="text-align: center;">Grupo Abril</a></li>
                    <li><a href="https://quatrorodas.abril.com.br/" class="article" style="text-align: center;">Quatro Rodas</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                  <a class="navbar-brand" href="#">
                                      <img src="/img/abril1.png" style="display: inline-block; margin-top: -18px;" class="logo-abril">
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                @yield('content')

                </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
