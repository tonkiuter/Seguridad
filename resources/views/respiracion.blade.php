@extends('layout')

@section('title')
    Respiracion
@endsection

@section('content')
    
    <h1>Respiracion</h1>
    
    <a href="{{ route('respiracion.create') }}">Crear Respiracion</a>

    <ul>
        @forelse ($respiracion as $respiracionItem)

            <li>{{ $respiracionItem->CodigoReporte }}</li>
                <li>{{ $respiracionItem->Observaciones }}</li>
                    <li>{{ $respiracionItem->Anio }}</li>
                    <li>{{ $respiracionItem->Mes }}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $respiracion->links() }}

              
    </ul>



@endsection