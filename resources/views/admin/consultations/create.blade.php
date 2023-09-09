@extends('layouts.master')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Consulta')
        @slot('url', route('consultations.store'))
        @slot('form')
            @include('admin.consultations.form')
        @endslot
    @endcomponent

@endsection