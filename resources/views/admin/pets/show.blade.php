@extends('layouts.master')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes do Pet')
        @slot('content')
            @include('admin.pets.form')
        @endslot
        @slot('back')
            <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-dark float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('pets.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection