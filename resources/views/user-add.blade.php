@extends('layouts.template')

@section('title')
    Adicionar Usuário
@endsection

@section('content')
    <div>
        <a class="btn btn-secondary" href="{{ route('user.index') }}">Voltar</a>
    </div>
    {{ Form::open(['url' => route('user.create') ]) }}
        <div class="d-flex flex-column gap-3">
            <div>
                <label class="form-label" for="usuario">Usuário</label>
                <input class="form-control" type="text" name="usuario" id="usuario">
            </div>
            <div>
                <label class="form-label" for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="nome">
            </div>
            <div>
                <label class="form-label" for="email">E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div>
                <label class="form-label" for="tipo">Tipo</label>
                <select class="form-select" name="tipo" id="tipo">
                    <option value=""></option>
                    <option value="A">Aluno</option>
                    <option value="F">Funcionário</option>
                </select>
            </div>
            <div>
                <label class="form-label" for="data">Data</label>
                <input class="form-control" type="date" name="data" id="data" value="{{ date('Y-m-d') }}" readonly>
            </div>
            <div class="d-flex gap-3 justify-content-center">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a class="btn btn-danger" href="{{ route('user.index') }}">Cancelar</a>
            </div>
        </div>
    {{ Form::close() }}
@endsection