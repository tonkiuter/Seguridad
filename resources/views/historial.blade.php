@extends('layout')

@section('title')
    Historial
@endsection

@section('content')
    
    <h1>Historial</h1>
    
    <a href="{{ route('historial.create') }}">Crear Historial</a>

    <ul>
        @forelse ($historial as $historialItem)

            <li>{{ $historialItem->CodigoReporte }}</li>
                <li>{{ $historialItem->CodigoAlumno }}</li>
                    <li>{{$historialItem->CodigoHistorial}}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $historial->links() }}

              
    </ul>



@endsection