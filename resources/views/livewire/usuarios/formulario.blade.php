<div class="row">

    <div class="col-lg-4">
        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 230px;height:230px;"
                src="{{ Storage::disk('public')->url($usuario->foto_u != null ? $usuario->foto_u : 'images/usuarios/default.png') }}"
                alt="">
        @endif

        <form>
            <div class="form-group">
                <label for="image">Seleccione la imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="image">
                @error('foto')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </form>
    </div>
    <div class="col-lg-8">
        <div class="mx-auto col-10">
            <div class="form-group">
                <label>Nombre</label>
                <input wire:model="usuario.nombre_usuario" type="text" class="form-control">
                @error('usuario.nombre_usuario') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input wire:model="usuario.email" type="email" class="form-control">
                @error('usuario.email') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input autocomplete="new-password" wire:model="password" type="password" class="form-control">
                @error('password') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Confirmar contraseña</label>
                <input autocomplete="new-password" wire:model="c_password" type="password" class="form-control">
                @error('c_password') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>


</div>
