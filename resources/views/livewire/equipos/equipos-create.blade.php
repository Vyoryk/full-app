<div>
    <form wire:submit.prevent="crear">
        <div class="card">

            <div class="card-body">
                <h3 class="card-title">Crear nuevo equipo</h3>

                @include('livewire.equipos.formulario')

            </div>

            <div>
                <button wire:loading.attr="disable" wire:target="foto" class="btn btn-success btn-sm"><i class="fa fa-save"></i>Guardar</button>
                <a href="{{route('equipos.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
