@extends('layouts.master')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Novo Email</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('email.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="assunto" class="form-label">Assunto</label>
                    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
                </div>
                
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark mr-2">Enviar</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-dark">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
