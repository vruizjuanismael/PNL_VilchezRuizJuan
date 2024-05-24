<div class="modal-content">
    <form id="formUpdate" action="{{ $cotizacion->id ? route('cotizacion.update', $cotizacion->id) : route('cotizacion.store') }}" method="post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Cotización</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($cotizacion->id)
                @method('PUT')
            @endif
            @csrf
            <div class="form-group">
                <label for="cliente_id">Cliente ID</label>
                <input type="text" name="cliente_id" class="form-control" id="cliente_id" placeholder="Ingrese cliente" value="{{ $cotizacion->cliente_id }}">
                <div id="msg_cliente_id"></div>
            </div>
            <div class="form-group">
                <label for="fecha_creacion">Fecha de creación</label>
                <input type="date" name="fecha_creacion" class="form-control" id="fecha_creacion" placeholder="Ingrese fecha de creación" value="{{ $cotizacion->fecha_creacion ? $cotizacion->fecha_creacion->format('Y-m-d') : '' }}">
                <div id="msg_fecha_creacion"></div>
            </div>

            <div class="form-group">
                <label for="productos_servicios">Productos/Servicios</label>
                <input type="text" name="productos_servicios" class="form-control" id="productos_servicios" placeholder="Ingrese productos/servicios" value="{{ $cotizacion->productos_servicios }}">
                <div id="msg_productos_servicios"></div>
            </div>


            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" value="{{ $cotizacion->cantidad }}" required><br><br>

            <label for="precio_unitario">Precio unitario:</label>
            <input type="number" name="precio_unitario" id="precio_unitario" step="0.01" value="{{ $cotizacion->precio_unitario }}" required><br><br>

            <label for="total">Total:</label>
            <input type="number" name="total" id="total" step="0.01" value="{{ $cotizacion->total }}" required><br><br>

            <label for="estado">Estado:</label>
            <select name="estado" id="estado" required>
                <option value="pendiente" {{ $cotizacion->estado === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="aceptada" {{ $cotizacion->estado === 'aceptada' ? 'selected' : '' }}>Aceptada</option>
                <option value="rechazada" {{ $cotizacion->estado === 'rechazada' ? 'selected' : '' }}>Rechazada</option>
            </select><br><br>

            <label for="notas">Notas:</label>
            <textarea name="notas" id="notas">{{ $cotizacion->notas }}</textarea><br><br>


            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton">Guardar</span></button>
            </div>
        </div>


        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton">Guardar</span></button>
        </div>
    </form>
</div>
