@extends('layout.mainLayout')
@section('content')
    <h1>Editar Requerimento</h1>
    {!! Form::model($requerimento,['method' => 'PATCH','route'=>['Requerimento.update',$requerimento->id_requerimento]]) !!}
    <div class="form-group">
        {!! Form::label('Nome', 'Nome:') !!}
        {!! Form::text('nome',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Aluno', 'Aluno:') !!}
        {!! Form::text('aluno',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Tipo', 'Tipo:') !!}
        {!! Form::text('tipo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Observacao', 'Observacao:') !!}
        {!! Form::text('observacao',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop