<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $listaPaginas = json_encode([
            ["titulo" => "Home","url" => route("home")],
            ["titulo" => "Clientes","url" => ""],
        ]);

        $clientes = json_encode(Cliente::select('id','nome','email','usuario','created_at')->get());
        return view('admin.clientes.index', compact('listaPaginas','clientes'));
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
        $cliente = $request->all();

        $validation = $this->validation($cliente);
        if($validation){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        Cliente::create($cliente);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::find($id);
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

    public function validation($data)
    {
        $validation = \Validator::make($data,[
            "nome" => "required",
            "email" => "required",
        ]);
        if($validation->fails()){
            return $validation;
        }else{
            return false;
        }
    }
}
