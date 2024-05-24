<div class="modal-content">
    <form id="formUpdate" action="{{ $cotizacion->id ? route('cotizacion.update', $cotizacion) : route('cotizacion.store') }}"
     method="post">
    <div class="modal-header">
        <h4 class="modal-title" id="modal-title">Cotización</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @if($cotizacion->id)
            @method('PUT')
            <input type="hidden" name="id" value="{{ $cotizacion->id }}">
        @endif
        @csrf
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <input type="text" name="cliente_id" class="form-control" id="cliente_id" placeholder="Ingrese cliente" value="{{ $cotizacion->cliente_id }}">
            <div id="msg_cliente_id"></div>
        </div>
        <div class="form-group">
            <label for="fecha_creacion">Fecha de Creación</label>
            <input type="date" name="fecha_creacion" class="form-control" id="fecha_creacion" value="{{ $cotizacion->fecha_creacion }}">
            <div id="msg_fecha_creacion"></div>
        </div>
        <div class="form-group">
            <label for="productos_servicios">Productos/Servicios</label>
            <input type="text" name="productos_servicios" class="form-control" id="productos_servicios" placeholder="Ingrese productos/servicios" value="{{ $cotizacion->productos_servicios }}">
            <div id="msg_productos_servicios"></div>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="Ingrese cantidad" value="{{ $cotizacion->cantidad }}">
            <div id="msg_cantidad"></div>
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" name="precio_unitario" class="form-control" id="precio_unitario" placeholder="Ingrese precio unitario" value="{{ $cotizacion->precio_unitario }}">
            <div id="msg_precio_unitario"></div>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" class="form-control" id="total" placeholder="Ingrese total" value="{{ $cotizacion->total }}">
            <div id="msg_total"></div>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" class="form-control" id="estado">
                <option value="pendiente" {{ $cotizacion->estado === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="aceptada" {{ $cotizacion->estado === 'aceptada' ? 'selected' : '' }}>Aceptada</option>
                <option value="rechazada" {{ $cotizacion->estado === 'rechazada' ? 'selected' : '' }}>Rechazada</option>
            </select>
            <div id="msg_estado"></div>
        </div>
        <div class="form-group">
            <label for="notas">Notas</label>
            <textarea name="notas" class="form-control" id="notas" rows="3" placeholder="Ingrese notas">{{ $cotizacion->notas }}</textarea>
            <div id="msg_notas"></div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton">Guardar</span></button>
    </div>
    </form>
</div>