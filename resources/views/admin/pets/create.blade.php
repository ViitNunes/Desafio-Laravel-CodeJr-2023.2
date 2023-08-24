@extends('layouts.master')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Pet')
        @slot('url', route('pets.store'))
        @slot('form')
            @include('admin.pets.form')
        @endslot
    @endcomponent

@endsection