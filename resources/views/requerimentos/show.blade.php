@extends('layout.mainLayout')
@section('content')
    <h1>Requerimento</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">Código</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" placeholder={{$requerimento->id_requerimento}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder={{$requerimento->nome}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Aluno</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="adress" placeholder={{$requerimento->aluno}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="referencePoint" class="col-sm-2 control-label">Tipo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="referencePoint" placeholder={{$requerimento->tipo}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Observacao</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" placeholder={{$requerimento->observacao}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('Requerimento')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
@stop