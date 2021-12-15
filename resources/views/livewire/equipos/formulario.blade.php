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
                src="{{ Storage::disk('public')->url($equipo->foto != null ? $equipo->foto : 'images/equipos/default.png') }}"
                alt="">
        @endif

        <form >
            <div class="form-group">
                <label for="image">Seleccione la imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="image">
                @error('foto')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
            </div>
        </form>
    </div>
    <div class="col-lg-8">
        <div class="mx-auto col-10">
            <div class="form-group">
                <label>Nombre</label>
                <input wire:model="equipo.nombre" type="text" class="form-control">
                @error('equipo.nombre') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Code</label>
                <input wire:model="equipo.codigo" type="text" class="form-control">
                @error('equipo.codigo') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Cantidad</label>
                <input wire:model="equipo.cantidad" type="number" class="form-control">
                @error('equipo.cantidad') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <input wire:model="equipo.descripcion" type="text" class="form-control">
                @error('equipo.descripcion') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>


</div>
