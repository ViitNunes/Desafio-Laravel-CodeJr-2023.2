@extends('layouts.master')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar pet')
        @slot('url', route('pets.update', $pet->id))
        @slot('form')
            @include('admin.pets.form')
        @endslot
    @endcomponent

@endsection

