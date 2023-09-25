@extends('layouts.master')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Resposável')
        @slot('url', route('owners.update', $owner->id))
        @slot('form')
            @include('admin.owners.form')
            <div class="form-group col-sm-12 col-md-4">
                <label for="profile_image" class="form-label">Atualizar Foto do Rasponsável</label>
                <input type="file" id="profile_image" name="profile_image" class="form-control-file">
            </div>

            <div class="form-group col-sm-12 col-md-4">
                <label for="profile_image" class="form-label">Foto atual do Rasponsável</label>
                <img src="{{  asset('/storage/storage/imagens/' . $owner->profile_image) }}" alt="Foto de Perfil" class="img-fluid">
            </div>
        @endslot
    @endcomponent

@endsection