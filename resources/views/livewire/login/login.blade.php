<div>
    <div class="mx-auto col-lg-4">
        <img class="mx-auto d-block"
            style="width: 140px;height:140px;"
            src="{{ Storage::disk('public')->url('images/usuarios/default.png') }}" alt="">

        <form wire:submit.prevent="login">
            <div class="form-group">
                <label class="form-label">Correo electrónico</label>
                <input wire:model="email" type="email" class="form-control" placeholder="example@example.com">
                @error('email')
                    <b class="text-danger">{{$message}}</b>
                @enderror
            </div>
            <div class="form-group">
                <label for="form-label">Contraseña</label>
                <input wire:model="password" type="password" class="form-control" placeholder="********">
                @error('password')
                    <b class="text-danger">{{$message}}</b>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Acceder</button>
        </form>
    </div>
</div>
