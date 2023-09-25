@extends('layouts.master')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes do Funcionário')
        @slot('content')
            @include('admin.users.form')
        @endslot
        @slot('back')
            @if (Auth::user()->isAdmin() || Auth::user()->id == $user->id)
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            @endif
            <a href="{{ route('users.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection