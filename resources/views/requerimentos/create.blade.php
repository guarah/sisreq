@extends('layout.mainLayout')
@section('content')
    <h1 class="head-title" >Novo Requerimento</h1>
    {!! Form::open(['url' => 'Requerimento']) !!}
    <div class="form-group">
        {!! Form::label('Nome', 'Nome:') !!}
        {!! Form::text('nome',null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop