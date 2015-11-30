@extends('layout.mainLayout')
@section('content')
    <h1 class="head-title">Requerimentos</h1>

    <div class="opcoes-btn">
        <a href="{{url('Requerimento/create')}}" class="btn btn-success">Novo Requerimento</a>
        @if(\Auth::user()->type == "ADM")
            ||
            <a href="{{url('Requerimento/ListarAprovados')}}" class="btn btn-success">Listar Aprovados</a>
            <a href="{{url('Requerimento/ListarCancelados')}}" class="btn btn-danger">Listar Cancelados</a>
            <a href="{{url('Requerimento')}}" class="btn btn-primary">Listar Todos</a>
        @endif
    </div>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Observacao</th>
            <th>Data</th>
            <th>Status</th>
            <th colspan="4">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($requerimentos as $requerimento)
            <tr>
                <td>{{ $requerimento->id_requerimento }}</td>
                <td>{{ $requerimento->nome }}</td>
                <td>{{ $requerimento->tipo }}</td>
                <td>{{ $requerimento->observacao }}</td>
                <td>{{ $requerimento->created_at }}</td>
                <td>{{ $requerimento->status }}</td>
                <td><a href="{{url('Requerimento',$requerimento->id_requerimento)}}" class="btn btn-primary">Ver</a></td>
                <td><a href="{{route('Requerimento.edit',$requerimento->id_requerimento)}}" class="btn btn-warning">Atualizar</a></td>

                @if(\Auth::user()->type == "ADM")
                    <td><a href="{{route('Requerimento.Aprovar',$requerimento->id_requerimento)}}" class="btn btn-success">Aprovar</a></td>
                    <td><a href="{{route('Requerimento.Cancelar',$requerimento->id_requerimento)}}" class="btn btn-danger">Cancelar</a></td>
                @else
                    <td>
                        {!! Form::open(['class' => 'no-form', 'method' => 'DELETE', 'route'=>['Requerimento.destroy', $requerimento->id_requerimento]]) !!}
                        {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                @endif
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection