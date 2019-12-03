<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

use app\Orcamento;
use app\Http\Controllers;

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

        if ($request->input("finalizarOrcamento") == "Finalizar Orçamento") {
            DB::insert('insert into orcamento (id, cliente, vendedor, data, hora, descricao, valor) values(?, ?, ?, ?, ?, ?, ?)', [
                null,
                $orcamento['Cliente'],
                $orcamento['Vendedor'],
                $orcamento['Data'],
                $orcamento['Hora'],
                $orcamento['Descricao'],
                $orcamento['Valor']
            ]);
        }

        return view('index');
    }

    public function retornaOrcamentos() {
        $orcamentos = DB::select('select * from orcamento order by id desc');

        return $orcamentos;
    }

    public function filtrarDados(Request $request) {
        if ($request->input("select") == "1") {
            $cliente = $request->input('categoria');
            $orcamentos = DB::select("select * from orcamento where cliente = '$cliente' order by id desc");  
        } elseif ($request->input("select") == "2") {
            $vendedor = $request->input('categoria');
            $orcamentos = DB::select("select * from orcamento where vendedor = '$vendedor' order by id desc"); 
        } else {
            $orcamentos = $this->retornaOrcamentos();
            
            return view('buscaOrcamentos')->with(compact('orcamentos'));
        }     

        return view('buscaOrcamentos')->with(compact('orcamentos'));
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
