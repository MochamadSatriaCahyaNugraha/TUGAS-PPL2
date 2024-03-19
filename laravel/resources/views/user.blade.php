<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    <h1>User Management</h1>

    <h2>Register User</h2>
    <form action="{{ route('user.register') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit">Register</button>
    </form>

    <h2>Login User</h2>
    <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>

    <h2>Update User</h2>
    <form action="{{ route('user.update', ['id' => 1]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit">Update</button>
    </form>

    <h2>Get User</h2>
    <a href="{{ route('user.show', ['id' => 1]) }}">View User</a>

    <h2>Logout User</h2>
    <form action="{{ route('user.logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
