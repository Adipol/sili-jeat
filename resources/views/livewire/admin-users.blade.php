<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control w-100" placeholder="Escriba el usuario o email">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table-striped table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Entidad</th>
                            <th>Zona Horaria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->entity->name }}</td>
                                <td>{{ $user->timezone }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                        style="display: inline;"
                                        onsubmit="return confirm('¿Está seguro de eliminar este usuario?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
