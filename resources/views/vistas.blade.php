@extends('layout')

@section('title')
    solicitudLabs
@endsection

@section('content')
    
    <h1>Vistas</h1>
    
    <a href="{{ route('vistas.create') }}">Crear Vistas</a>

    <ul>
        @forelse ($vistas as $vistasItem)

            <li>{{ $vistasItem->Codigo_Reporte }}</li>
                <li>{{ $vistasItem->Nombre }}</li>
                    <li>{{ $vistasItem->RegaderaS }}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $vistas->links() }}

              
    </ul>



@endsection