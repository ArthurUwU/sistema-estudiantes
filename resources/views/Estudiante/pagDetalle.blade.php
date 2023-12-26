@extends('pagPlantilla')

@section('titulo')
    <h1> Página detalle </h1>
@endsection

@section('seccion')
    <h3> Detalle estudiante </h1>
    <p> Id:              {{ $xDetAlumnos->id }} </p>
    <p> Código de Estudiante:{{ $xDetAlumnos->codEst }} </p>
    <p> Apellidos y Nombres: {{ $xDetAlumnos->apeEst }}, {{ $xDetAlumnos->nomEst }} </p>
    <p> Fecha de Nacimiento: {{ $xDetAlumnos->fnaEst }} </p>
    <p> Turno:               {{ $xDetAlumnos->turMat }} </p>
    <p> Semestre:            {{ $xDetAlumnos->semMat }} </p>
    <p> Estado de Matrícula: {{ $xDetAlumnos->estMat }} </p>
@endsection