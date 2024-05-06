<table class="table">
  <thead>
    <tr>
        @foreach($columns as $column)
            <th scope="col">{{ $column }}</th>
        @endforeach
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->status }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <td colspan="{{ count($columns) }}">
            <a  class="btn btn-primary" href="{{ route('user.create') }}">Crear Usuario</a>
        </td>
    <tr>
  </tfoot>
</table>