@extends('layouts.template')

@section('title')
    Registros de {{ isset($user['nome']) ? $user['nome'] : '' }}
@endsection

@section('content')

    <div>
        <a class="btn btn-secondary" href="{{ route('user.index') }}">Voltar</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <th>Data</th>
            <th>Hora</th>
            <th>Tipo</th>
        </thead>
        <tbody>
            @foreach($entrys as $id => $entry)
            <tr>
                <td>{{ date('d/m/Y', strtotime($entry['data'])) }}</td>
                <td>{{ $entry['hora'] }}</td>
                <td>{{ $entry['tipo'] == 'E' ? 'Entrada' : 'Saída' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection