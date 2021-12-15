<div>
    <br>
    <div class="mx-auto card" style="max-width: 560px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img style="width: 200px;height:200px;"
                    src="{{ Storage::disk('public')->url($equipo->foto != null ? $equipo->foto : 'images/equipos/default.png') }}"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title text-danger" style="text-align: center;">Eliminar</h2>
                    <h5 class="card-text">{{$equipo->nombre}}</h5>
                    <p class="card-text">Code: {{$equipo->codigo}}</p>
                    <p class="card-text">Cantidad: {{$equipo->cantidad}}</p>
                    <p class="card-text">Descripción: {{$equipo->descripcion}}</p>
                    <button wire:click="delete" class="btn btn-danger btn-sm">Confirmar</button>
                    <a href="{{route('equipos.index')}}" class="btn btn-primary btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
