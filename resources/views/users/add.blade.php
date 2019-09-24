<form action="{{ route('users.store') }}" method="post">
    @csrf
    <table border="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
