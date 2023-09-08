@extends('layouts.master')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Responsável')
        @slot('url', route('owners.store'))
        @slot('form')
            @include('admin.owners.form')
        @endslot
    @endcomponent

@endsection