<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>email</td>
        <td></td>
    </tr>
    @foreach($users as $key => $user)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{ route('users.delete', ['id' => $user->id]) }}">Delete</a></td>
        </tr>
    @endforeach
</table>
