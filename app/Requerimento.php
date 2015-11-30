<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requerimento extends Model {

    protected $primaryKey = 'id_requerimento';

    protected $fillable=[
        'nome',
        'id_aluno',
        'tipo',
        'observacao'
    ];

    public static function ListarRequerimentos() {
        $tipo = \Auth::user()->type;
        if($tipo == "ALU") return self::ListarRequerimentosDoAluno();
        if($tipo == "ADM") return self::ListarTodos();

    }

    public static function ListarRequerimentosDoAluno() {
        $requerimentos = \DB::table('requerimentos')
            ->where('requerimentos.id_aluno', '=', \Auth::id())
            ->get();
        return $requerimentos;
    }

    public static function ListarAprovados() {
        $requerimentos = \DB::table('requerimentos')
            ->where('requerimentos.status', '=', "APROVADO")
            ->get();
        return $requerimentos;
    }

    public static function ListarCancelados() {
        $requerimentos = \DB::table('requerimentos')
            ->where('requerimentos.status', '=', "CANCELADO")
            ->get();
        return $requerimentos;
    }

    public static function ListarTodos() {
        $requerimentos=Requerimento::all();
        return $requerimentos;
    }

    public static function Aprovar($id) {
        $requerimento = self::find($id);
        if(is_null($requerimento)) {
            return false;
        }
        $requerimento->status = "APROVADO";
        $requerimento->save();
        return self::ListarTodos();
    }

    public static function Cancelar($id) {
        $requerimento = self::find($id);
        if(is_null($requerimento)) {
            return false;
        }
        $requerimento->status = "CANCELADO";
        $requerimento->save();
        return self::ListarTodos();
    }



}
