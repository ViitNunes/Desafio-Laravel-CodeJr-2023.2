@extends('layouts.master')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes da Consulta')
        @slot('content')
            @include('admin.consultations.form')
        @endslot
        @slot('back')
            <a href="{{ route('consultations.edit', $consultation->id) }}" class="btn btn-dark float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('consultations.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection