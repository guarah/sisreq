<?php

namespace App\Http\Controllers;

use App\Requerimento;
use Request;

class RequerimentoController extends Controller {

    public function index() {
        $requerimentos=Requerimento::ListarRequerimentos();
        return view('requerimentos.index',compact('requerimentos'));
    }

    public function aprovar($id) {
        $requerimentos=Requerimento::Aprovar($id);
        return view('requerimentos.index',compact('requerimentos'));
    }

    public function cancelar($id) {
        $requerimentos=Requerimento::Cancelar($id);
        return view('requerimentos.index',compact('requerimentos'));
    }

    public function listarAprovados() {
        $requerimentos=Requerimento::ListarAprovados();
        return view('requerimentos.index',compact('requerimentos'));
    }

    public function listarCancelados() {
        $requerimentos=Requerimento::ListarCancelados();
        return view('requerimentos.index',compact('requerimentos'));
    }

    public function create() {
        return view('requerimentos.create');
    }

    public function store() {
        $requerimento=Request::all();
        $requerimento['id_aluno'] = \Auth::id();
        $requerimento['status'] = "PENDENTE";
        Requerimento::create($requerimento);
        return redirect('Requerimento');
    }

    public function show($id) {
        $requerimento=Requerimento::find($id);
        return view('requerimentos.show',compact('requerimento'));
    }

    public function edit($id) {
        $requerimento=Requerimento::find($id);
        return view('requerimentos.edit',compact('requerimento'));
    }

    public function update(Request $request, $id) {
        $requerimentoUpdate=Request::all();
        $requerimento=Requerimento::find($id);
        $requerimento->update($requerimentoUpdate);
        return redirect('Requerimento');
    }

    public function destroy($id) {
        Requerimento::find($id)->delete();
        return redirect('Requerimento');
    }
}
