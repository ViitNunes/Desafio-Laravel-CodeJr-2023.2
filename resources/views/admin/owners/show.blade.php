@extends('layouts.master')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes do Responsável')
        @slot('content')
            @include('admin.owners.form')
            <div class="form-group col-sm-12 col-md-4">
                <label for="profile_image" class="form-label">Foto atual do Rasponsável</label>
                <img src="{{  asset('/storage/storage/imagens/' . $owner->profile_image) }}" alt="Foto de Perfil" class="img-fluid">
            </div>
        @endslot
        @slot('back')
            <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-dark float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('owners.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection