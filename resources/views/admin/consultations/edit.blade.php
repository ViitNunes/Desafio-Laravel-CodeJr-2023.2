@extends('layouts.master')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Consulta')
        @slot('url', route('consultations.update', $consultation->id))
        @slot('form')
            @include('admin.consultations.form')
        @endslot
    @endcomponent

@endsection