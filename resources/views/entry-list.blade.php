@extends('layouts.template')

@section('title')
    Registros
@endsection

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <th>Data</th>
            <th>Dispositivo</th>
            <th>RFID</th>
            <th>Nome</th>
        </thead>
        <tbody>
            @foreach($entrys as $id => $entry)
            <tr>
                <td>{{ $entry['data'] }}</td>
                <td>{{ $entry['device'] }}</td>
                <td>{{ $entry['id'] }}</td>
                <td>{{ array_key_exists(trim($entry['id']), $users) ? $users[trim($entry['id'])]['nome'] : 'Sem cadastro' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection