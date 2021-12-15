<div wire:init="cargando">

    <h1>Equipos</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="mb-4 input-group">
                <span class="input-group-text bg-dark" id="basic-addon1">
                    <i class="fa fa-search" style="color: white;"></i>
                </span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Search" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('equipos.create') }}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Crear nuevo
                </a>
            </div>
        </div>
    </div>


    <div class="mt-3">
        @if (count($equipos) > 0)
            <x-table>
                <x-slot name='columnas'>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Code</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Acciones</th>
                </x-slot>
                <x-slot name='filas'>
                    @foreach ($equipos as $equipo)
                        <tr>
                            <th scope="row">{{ $equipo->id }}</th>
                            <th>
                                <img style="width: 40px;height:40px;"
                                    src="{{ Storage::disk('public')->url($equipo->foto ? $equipo->foto : 'images/equipos/default.png') }}"
                                    alt="">
                            </th>
                            <td>{{ $equipo->nombre }}</td>
                            <td>{{ $equipo->codigo }}</td>
                            <td>{{ $equipo->cantidad }}</td>
                            <td>
                                <a href="{{ route('equipos.show', $equipo) }}" title="Mostrar más" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('equipos.edit', $equipo) }}" title="Editar equipo" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('equipos.delete', $equipo) }}" title="Eliminar equipo" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table>
        @else
            <div class="d-flex justify-content-center">
                <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        @endif

        {{ $cargado == true ? $equipos->links() : null }}
    </div>
</div>
