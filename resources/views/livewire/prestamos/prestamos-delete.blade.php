<div>

    <h2 class="text-danger" style="text-align: center;">Eliminar</h2>

    <div class="card-deck">


        @include('livewire.prestamos.tarjetas')

    </div>
    <div class="mx-auto d-block">
        <button wire:click="delete" class="btn btn-danger btn-sm">Confirmar</button>
        <a href="{{ route('prestamos.index') }}" class="btn btn-primary btn-sm mx-auto">Regresar</a>
    </div>
</div>
