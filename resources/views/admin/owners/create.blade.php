@extends('layouts.master')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Responsável')
        @slot('url', route('owners.store'))
        @slot('form')
            @include('admin.owners.form')
            <div class="form-group col-sm-12 col-md-4">
                <label for="profile_image" class="form-label">Foto Rasponsável</label>
                <input type="file" id="profile_image" name="profile_image" class="form-control-file">
            </div>
        @endslot
    @endcomponent

@endsection