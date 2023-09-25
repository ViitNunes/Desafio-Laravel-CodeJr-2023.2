@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('pets.create'))
        @slot('titulo', 'Pets')
        @slot('head')
            <th>Nome</th>
            <th>Espécie</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($pets as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-dark mr-1">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-dark mr-1"><i class="fas fa-pen"></i></a>
    
                        
                        <form class="form-delete d-inline-block" action="{{ route('pets.destroy', $pet->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mr-1"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection



