@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Listagem de Inscritos</div>

                    <div class="panel-body">
                        <a href="{{ route('export') }}" class="btn btn-primary">Exportar Registros</a>
                        <br><br>
                        <table class="table table-bordered table-condesed">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Modalidade</th>
                                <th>Editor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($registros as $registro)
                                <tr>
                                    <td>{{ $registro->NOME }}</td>
                                    <td>{{ $registro->CPF }}</td>
                                    <td>{{ $registro->TELEFONE }}</td>
                                    <td>{{ $registro->EMAIL }}</td>
                                    <td>{{ strtoupper($registro->MODALIDADE) }}</td>
                                    <td>{{ $registro->EDITOR }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
