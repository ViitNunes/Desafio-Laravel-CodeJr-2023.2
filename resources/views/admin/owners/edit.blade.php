@extends('layouts.master')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Resposável')
        @slot('url', route('owners.update', $owner->id))
        @slot('form')
            @include('admin.owners.form')
        @endslot
    @endcomponent

@endsection