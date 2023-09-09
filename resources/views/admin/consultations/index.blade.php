@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('consultations.create'))
        @slot('titulo', 'Consultas')
        @slot('head')
            <th>Nome do Pet</th>
            <th>Data e Hora de Início</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($consultations as $consultation)
                <tr>
                    <td>{{ $consultation->pet->name ?? ""}}</td>
                    <td>{{ $consultation->start_time }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('consultations.show', $consultation->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('consultations.edit', $consultation->id) }}" class="btn btn-dark"><i class="fas fa-pen"></i></a>
    
                        
                        <form class="form-delete d-inline-block" action="{{ route('consultations.destroy', $consultation->id) }}" method="post">
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