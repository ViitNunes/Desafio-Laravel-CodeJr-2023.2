@extends('layouts.master')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Funcionário')
        @slot('url', route('users.store'))
        @slot('form')
            @include('admin.users.form')
        @endslot
    @endcomponent

@endsection