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
            <td class="d-flex justify-content-around">
                <a href="{{ route('user.edit', $user->id) }}">
                    <span><i class="fas fa-pencil-alt"></i></span>
                </a>

                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; padding: 0; margin: 0;">
                        <i class="fas fa-trash-alt" style="color: red; cursor: pointer;"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <td colspan="{{ count($columns) }}">
            <a  class="btn btn-primary" href="{{ route('user.create') }}">User Create</a>
        </td>
    <tr>
  </tfoot>
</table>