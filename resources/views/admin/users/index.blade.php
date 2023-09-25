@extends('layouts.master')

@section('content')
    @component('admin.components.tableUsers')
        @slot('create', route('users.create'))
        @slot('titulo', 'Funcionários')
        @slot('head')
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark mr-1">
                            <i class="fas fa-eye"></i>
                        </a>


                        @can('update', $user)
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark mr-1"><i class="fas fa-pen"></i></a>
                        @endcan
    
                        @can('delete', $user)
                            <form class="form-delete d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mr-1"><i class="fas fa-trash"></i></button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection