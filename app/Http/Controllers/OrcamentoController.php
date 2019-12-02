<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

use app\Orcamento;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {        
        $orcamento = array(
            'Descricao' => $request->input('descricaoOrcamento'),
            'Data' => $request->input('data'),
            'Hora' => $request->input('hora'),
            'Valor' => $request->input('valorOrcado'),
            'Vendedor' => $request->input('vendedor'),
            'Cliente' => $request->input('cliente')    
        );

        $request->session()->put('orcamento', $orcamento);

        return view('confirmacao')->with(compact('orcamento'));
    }

    public function inserirDados(Request $request) {
        $orcamento = $request->session()->get('orcamento');


        DB::insert('insert into orcamento (id, cliente, vendedor, data, hora, descricao, valor) values(?, ?, ?, ?, ?, ?, ?)', [
                null,
                $orcamento['Cliente'],
                $orcamento['Vendedor'],
                $orcamento['Data'],
                $orcamento['Hora'],
                $orcamento['Descricao'],
                $orcamento['Valor']
        ]);

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public static function retornaClientes() {
        $clientes = DB::table('clientes')
        ->select('nome')
        ->get();

        return compact('clientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
