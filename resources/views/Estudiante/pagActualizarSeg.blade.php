@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"> Actualizacion de Seguimiento </h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
            {{ session('msj') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div> 
    @endif

    <form action="{{ route('Estudiante.xUpdateSeg', $xActAlumnosSeg->id) }}" method="post" class="d-grid gap-2">
        @method('PUT')
        @csrf
        
        <div class="btn btn-dark fs-3 fw-bold">Actualizar Seguimiento</div>
        
        @error('traAct') 
            <div class="alert alert-danger"> El trabajo actual es requerido </div> 
        @enderror

        @if($errors ->has('ofiAct')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> oficio actual </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        @if($errors ->has('satEst')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> oficio actual </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        @if($errors ->has('fecSeg')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                La <strong> fecha seguimiento </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        @if($errors ->has('estSeg')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> estado seguimiento </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        <select name="traAct" class="form-control mb-2">
            <option value=""   @if(($xActAlumnosSeg->traAct) == '')   {{ "SELECTED" }} @endif >¿Trabaja?</option>
            <option value="SI" @if(($xActAlumnosSeg->traAct) == 'SI') {{ "SELECTED" }} @endif >SI</option>
            <option value="NO" @if(($xActAlumnosSeg->traAct) == 'NO') {{ "SELECTED" }} @endif >NO</option>
        </select>
        <input type="text" name="ofiAct" placeholder="Oficio Actual" value="{{ $xActAlumnosSeg->ofiAct }}" class="form-control mb-2" />
        <select name="satEst" class="form-control mb-2">
            <option value="" @if(($xActAlumnosSeg->satEst) == '') {{ "SELECTED" }} @endif >Grado de Satisfaccion</option>
            <option value="0" @if(($xActAlumnosSeg->satEst) == '0') {{ "SELECTED" }} @endif >No Satisfecho</option>
            <option value="1" @if(($xActAlumnosSeg->satEst) == '1') {{ "SELECTED" }} @endif >REGULAR</option>
            <option value="2" @if(($xActAlumnosSeg->satEst) == '2') {{ "SELECTED" }} @endif >BUENA</option>
            <option value="3" @if(($xActAlumnosSeg->satEst) == '3') {{ "SELECTED" }} @endif >MUY BUENA</option>
        </select>
        <input type="date" name="fecSeg" placeholder="Fecha de seguimiento" value="{{ $xActAlumnosSeg->fecSeg }}" class="form-control mb-2" />
        <select name="estSeg" class="form-control mb-2">
            <option value="" @if(($xActAlumnosSeg->estSeg) == '') {{ "SELECTED" }} @endif >Estado</option>
            <option value="0" @if(($xActAlumnosSeg->estSeg) == 0) {{ "SELECTED" }} @endif >Inactivo</option>
            <option value="1" @if(($xActAlumnosSeg->estSeg) == 1) {{ "SELECTED" }} @endif >Activo</option>
        </select>

        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>

@endsection