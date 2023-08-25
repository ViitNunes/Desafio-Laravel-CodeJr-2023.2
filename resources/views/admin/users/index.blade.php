@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('users.create'))
        @slot('titulo', 'Users')
        @slot('head')
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($users as $user)
                <tr>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('users.show', $users->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('users.edit', $users->id) }}" class="btn btn-dark"><i class="fas fa-pen"></i></a>
    
                        
                        <form class="form-delete d-inline-block" action="{{ route('users.destroy', $users->id) }}" method="post">
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



