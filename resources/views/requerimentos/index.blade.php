@extends('layout.mainLayout')
@section('content')
    <h1>Requerimentos</h1>
    <a href="{{url('Requerimento/create')}}" class="btn btn-success">Novo Requerimento</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Aluno</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Observacao</th>
            <th>Data</th>
            <th colspan="4">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($requerimentos as $requerimento)
            <tr>
                <td>{{ $requerimento->id_requerimento }}</td>
                <td>{{ $requerimento->aluno }}</td>
                <td>{{ $requerimento->nome }}</td>
                <td>{{ $requerimento->tipo }}</td>
                <td>{{ $requerimento->observacao }}</td>
                <td>{{ $requerimento->data }}</td>
                <td><a href="{{url('Requerimento',$requerimento->id_requerimento)}}" class="btn btn-primary">Ver</a></td>
                <td><a href="{{route('Requerimento.edit',$requerimento->id_requerimento)}}" class="btn btn-warning">Atualizar</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['Requerimento.destroy', $requerimento->id_requerimento]]) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection