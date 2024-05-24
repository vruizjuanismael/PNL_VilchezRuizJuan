<div class="modal-content">
    <form id="formUpdate" action="{{ $user->id ? route('user.update', $user) : route('user.store') }}" method="post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Usuario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($user->id)
                @method('PUT')
                <input type="hidden" name="id" value="{{ $user->id }}">
            @endif
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese nombre" value="{{ $user->name }}">
                <div id="msg_name"></div>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese correo electrónico" value="{{ $user->email }}">
                <div id="msg_email"></div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese contraseña">
                <div id="msg_password"></div>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme contraseña">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton">Guardar</span></button>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </form>
</div>
