<?php

namespace App\Http\Controllers;

use App\Requerimento;
use Request;

class RequerimentoController extends Controller {

    public function index() {
        $requerimentos=Requerimento::all();
        return view('requerimentos.index',compact('requerimentos'));
    }

    public function create() {
        return view('requerimentos.create');
    }

    public function store() {
        $requerimento=Request::all();
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
