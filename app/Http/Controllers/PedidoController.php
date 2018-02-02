<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Cliente;
use App\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::join('produtos', 'id_produto', '=', 'produtos.id')
                         ->join('clientes', 'id_cliente', '=', 'clientes.id')
                         ->select('produtos.nome as nomeproduto', 'clientes.nome as nomecliente',
                                  'produtos.id')
                         ->paginate(5);
        return view('pedido.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::pluck('nome', 'id');
        $clientes = Cliente::pluck('nome', 'id');
        return view('pedido.createOrUpdate', compact('produtos','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pedido::create($request->all());
        return redirect()->route('pedido.index')->with('message', 'Pedido adicionado com sucesso!!');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // dd($id);
        $pedido = Pedido::where('id_produto', '=', $id)->first();
        // Load user/createOrUpdate.blade.php view
        return view('pedido.createOrUpdate', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->update($request->all());
        return redirect()->route('pedido.index')->with('message', 'Pedido atualizado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('pedido.index')->with('message', 'Pedido removido com sucesso!!');
    }
}
