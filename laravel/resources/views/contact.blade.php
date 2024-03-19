<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
</head>
<body>
    <h1>Contact Management</h1>

    <h2>Create Contact</h2>
    <form action="{{ route('contact.create') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        <button type="submit">Create</button>
    </form>

    <h2>Update Contact</h2>
    <form action="{{ route('contact.update', ['id' => 1]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        <button type="submit">Update</button>
    </form>

    <h2>Get Contact</h2>
    <a href="{{ route('contact.show', ['id' => 1]) }}">View Contact</a>

    <h2>Search Contact</h2>
    <form action="{{ route('contact.search') }}" method="GET">
        <label for="search">Search:</label><br>
        <input type="text" id="search" name="search"><br><br>
        <button type="submit">Search</button>
    </form>

    <h2>Remove Contact</h2>
    <form action="{{ route('contact.remove', ['id' => 1]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remove</button>
    </form>
</body>
</html>
