@extends('layouts.template')

@section('title')
    Registros de {{ isset($user['nome']) ? $user['nome'] : '' }}
@endsection

@section('content')

    <div class="d-flex gap-3">
        <a class="btn btn-secondary" href="{{ route('user.index') }}">Voltar</a>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Ferramentas
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('entry.create', ['id' => $id, 'tipo' => 'E']) }}">Registrar Entrada</a></li>
                <li><a class="dropdown-item" href="{{ route('entry.create', ['id' => $id, 'tipo' => 'S']) }}">Registrar Saída</a></li>
            </ul>
        </div>
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