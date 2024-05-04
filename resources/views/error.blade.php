@extends('layouts.template')

@section('title')
    Ops! Parece que houve algum problema...
@endsection

@section('content')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route($backTo, $params) }}">Voltar</a>
    </div>
@endsection