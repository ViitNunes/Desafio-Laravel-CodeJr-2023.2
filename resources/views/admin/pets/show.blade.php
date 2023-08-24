@extends('layouts.master')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes do Pet')
        @slot('content')
            <div class="row">
                <div class="form-group col-sm-12 col-md-4">
                    <label for="name" class="required">Nome </label>
                    <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $pet->name) }}">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="species" class="required">Espécie </label>
                    <input type="text" name="species" id="species" class="form-control" required value="{{ old('species', $pet->species) }}">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="breed" class="required">Raça </label>
                    <input type="text" name="breed" id="breed" class="form-control" required value="{{ old('breed', $pet->breed) }}">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="owner_id" class="required">Dono </label>
                    <input type="int" name="owner_id" id="owner_id" class="form-control" required value="{{ old('owner_id', $pet->owner_id) }}">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="birth_date" class="required">Data de Nascimento </label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control" required value="{{ old('birth_date', $pet->birth_date) }}">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="treatments_done" class="required">Tratamentos Realizados </label>
                    <input type="text" name="treatments_done" id="treatments_done" class="form-control" required value="{{ old('treatments_done', $pet->treatments_done) }}">
                </div>
            </div>
        @endslot
        @slot('back')
            <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-info float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('pets.index') }}" class="btn btn-info float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection