<div>
    <form wire:submit.prevent="editar">
        <div class="card">

            <div class="card-body">
                <h3 class="card-title">Editar prestamo</h3>

                @include('livewire.prestamos.formulario')

            </div>

            <div>
                <button class="btn btn-success btn-sm"><i class="fa fa-save"></i>Guardar cambios</button>
                <a href="{{route('prestamos.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
