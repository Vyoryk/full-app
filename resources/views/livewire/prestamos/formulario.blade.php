<div>
    <div class="mb-3">
        <label class="form-label">Usuario que adquirie el equipo</label>
        <select wire:model="prestamo.id_usuario" class="form-control">
            <option value="" selected>Selecccionar usuario</option>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }} - {{ $usuario->email }}</option>
            @endforeach
        </select>
        @error('prestamo.id_usuario')
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Equipo</label>
        <select wire:model="prestamo.id_equipo" class="form-control">
            <option value="" selected>Selecccionar equipo</option>
            @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>
        @error('prestamo.id_equipo')
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
    </div>
</div>
