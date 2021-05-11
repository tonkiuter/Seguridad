@extends('layout')

@section('title')
    solicitudLabs
@endsection

@section('content')
    
    <h1>Solicitud Labs</h1>
    
    <a href="{{ route('solicitudLabs.create') }}">Crear solicitudLabs</a>

    <ul>
        @forelse ($solicitudLabs as $solicitudLabsItem)

            <li>{{ $solicitudLabsItem->Codigo_Reporte }}</li>
                <li>{{ $solicitudLabsItem->Nombre }}</li>
                    <li>{{ $solicitudLabsItem->RegaderaS }}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $solicitudLabs->links() }}

              
    </ul>



@endsection