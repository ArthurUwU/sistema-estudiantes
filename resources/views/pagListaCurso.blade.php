@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"> Página SEGUIMIENTO</h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            {{ session('msj') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div> 
    @endif

    <form action="{{ route('Estudiante.xRegistrarSeguimiento') }}" method="post" class="d-grid gap-2">
        @csrf
        
        <div class="btn btn-success fs-3 fw-bold">Registrar nuevo registro</div>
        
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

        <select name="idEst" class="form-control mb-2">
            <option value="">Seleccione...</option>
            @foreach($xAlumnos as $itemSeg)
                <option value="{{$itemSeg->id}}"> ({{$itemSeg->id}}) {{$itemSeg->nomEst}} {{$itemSeg->apeEst}} </option>
            @endforeach
        </select>

        <select name="traAct" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="SI">Si trabaja actualmente</option>
            <option value="NO">No trabaja en la actualidad</option>
        </select>
        <input type="text" name="ofiAct" placeholder="Oficio actual..." value="{{ old('ofiAct') }}" class="form-control mb-2" />
        <select name="satEst" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="0">No esta satisfecho</option>
            <option value="1">Satisfacción REGULAR</option>
            <option value="2">Satisfacción BUENA</option>
            <option value="3">Satisfacción MUY BUENA</option>
        </select>
        <input type="date" name="fecSeg" placeholder="Fecha de seguimiento..." value="{{ old('fecSeg') }}" class="form-control mb-2" />
        <select name="estSeg" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
        </select>

        <button class="btn btn-success" type="submit">Agregar</button>
    </form>
    <br/>

    <div class="btn btn-dark fs-3 fw-bold d-grid">Lista de siguimiento</div>

    <table class="table">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Orden</th>
                <th scope="col">¿Trabaja en la actualidad?</th>
                <th scope="col">Fecha encuesta</th>
                <th scope="col">Editar</th>
            </tr>
        </thead> 
        <tbody>
            @foreach($xAlumnosSeguimiento as $item)
                <tr>
                    <th scope="row">{{ $numOrden++ }}</th>
                    <td>
                        <a href="{{ route('Estudiante.xDetalleSeg', $item->id) }}">
                            {{ $item->id }}
                        </a>
                    </td>
                    <td>{{ $item->fecSeg }}</td>
                    <td>
                        <form action="{{ route('Estudiante.xEliminarSeg', $item->id) }}" method="post" class="d-inline" onsubmit="return validar();">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                X 
                            </button>
                        </form>
                        ...
                        <a href="{{ route('Estudiante.xActualizarSeg', $item->id ) }}" class="btn btn-warning btn-sm"> 
                            A
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $xAlumnosSeguimiento->links() }}
@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        
        function validar(){
            if(window.confirm("Esta seguro que quiere eliminar...?")){
                return true;
            }else{
                return false;
            }            
        }

         /*
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                alert(result.isConfirmed);
            }
        })

        */
        
    </script>
@endsection