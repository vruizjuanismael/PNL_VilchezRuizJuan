<div class="modal-content">
    <form id="formUpdate" action="{{ $cliente->id ? route('cliente.update', $cliente) : route('cliente.store') }}" method="post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Cliente</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($cliente->id)
                @method('PUT')
                <input type="hidden" name="id" value="{{ $cliente->id }}">
            @endif
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre" value="{{ $cliente->nombre }}">
                <div id="msg_nombre"></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese email" value="{{ $cliente->email }}">
                <div id="msg_email"></div>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese teléfono" value="{{ $cliente->telefono }}">
                <div id="msg_telefono"></div>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <textarea name="direccion" class="form-control" id="direccion" placeholder="Ingrese dirección">{{ $cliente->direccion }}</textarea>
                <div id="msg_direccion"></div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="guardar">
                <span id="textoBoton">Guardar</span>
            </button>
        </div>
    </form>
</div>
