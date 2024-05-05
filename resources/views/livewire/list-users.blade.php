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
            <td>Editar, Eliminar</td>
        </tr>
    @endforeach
  </tbody>
</table>