@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('owners.create'))
        @slot('titulo', 'Owners')
        @slot('head')
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->name }}</td>
                    <td>{{ $owner->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-dark"><i class="fas fa-pen"></i></a>
    
                        
                        <form class="form-delete d-inline-block" action="{{ route('owners.destroy', $owner->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection