<div class="container">
    <div class="modal fade" id="editaFac{{ $f->codFacultad }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header" style="background-color:#31AAC1	 !important;">
            <h6 class="modal-title" style="color: #fff; text-align: center;">
                Actualizar Información
            </h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>


        <form method="POST" action="{{ route('editaFac', $f->codFacultad) }}">
        @method('PUT')
        @csrf
                
            <div class="modal-body" id="cont_modal">
                <div class="form-group">
                    <label for="codigoFacultad" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" value="{{$f->codFacultad}}">
                </div>

                <div class="form-group">
                    <label for="nombreFacultad" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreFacultad" name="nombreFacultad" value="{{$f->nomFacultad}}">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </div>
        </form>

        </div>
    </div>
    </div>
</div>