@extends('layouts.app')

@section('titulo', 'Listado de libros')

@section('contenido')
    <h2>Listado de libros</h2>

    @if ($libros->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay libros registrados.</p>
    @endif
@endsection