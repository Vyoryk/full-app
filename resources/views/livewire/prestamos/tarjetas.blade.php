<div class="card">
    <img class="rounded mx-auto d-block" style="width: 200px;height:200px;"
        src="{{ Storage::disk('public')->url($datos->foto != null ? $datos->foto : 'images/equipos/default.png') }}"
        alt="...">
    <div class="card-body">
        <h5 class="card-text">{{ $datos->nombre }}</h5>
        <p class="card-text">Code: {{ $datos->codigo }}</p>
        <p class="card-text">Cantidad: {{ $datos->cantidad }}</p>
        <p class="card-text">Descripción: {{ $datos->descripcion }}</p>
    </div>
</div>
<div class="card">
    <img style="width: 200px;height:200px;" class="rounded mx-auto d-block"
        src="{{ Storage::disk('public')->url($datos->foto_u != null ? $datos->foto_u : 'images/usuarios/default.png') }}"
        alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $datos->nombre_usuario }}</h5>
        <p class="card-text">Correo: {{ $datos->email }}</p>
    </div>
</div>
