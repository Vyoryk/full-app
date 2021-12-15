<div wire:init="cargando">

    <h1>Usuarios</h1>
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
                <a href="{{ route('usuarios.create') }}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Crear nuevo
                </a>
            </div>
        </div>
    </div>


    <div class="mt-3">
        @if (count($usuarios) > 0)
            <x-table>
                <x-slot name='columnas'>
                    <th scope="col">#</th>
                    <th>Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </x-slot>
                <x-slot name='filas'>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <th scope="row">{{ $usuario->id }}</th>
                            <th>
                                <img style="border-radius: 20px;width: 50px;height:50px;"
                                    src="{{ Storage::disk('public')->url($usuario->foto_u ? $usuario->foto_u : 'images/usuarios/default.png') }}"
                                    alt="">
                            </th>
                            <td>{{ $usuario->nombre_usuario }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <a href="{{ route('usuarios.show', $usuario) }}" title="Mostrar más"
                                    class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('usuarios.edit', $usuario) }}" title="Editar usuario"
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('usuarios.delete', $usuario) }}" title="Eliminar usuario"
                                    class="btn btn-danger btn-sm">
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

        {{ $cargado == true ? $usuarios->links() : null }}
    </div>
</div>
