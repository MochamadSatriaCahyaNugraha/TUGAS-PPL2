<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Management</title>
</head>
<body>
    <h1>Address Management</h1>

    <h2>Create Address</h2>
    <form action="{{ route('address.create') }}" method="POST">
        @csrf
        <label for="street">Street:</label><br>
        <input type="text" id="street" name="street"><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="province">Province:</label><br>
        <input type="text" id="province" name="province"><br>
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country"><br>
        <label for="postal_code">Postal Code:</label><br>
        <input type="text" id="postal_code" name="postal_code"><br><br>
        <button type="submit">Create</button>
    </form>

    <h2>Update Address</h2>
    <form action="{{ route('address.update', ['id' => 1]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="street">Street:</label><br>
        <input type="text" id="street" name="street"><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="province">Province:</label><br>
        <input type="text" id="province" name="province"><br>
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country"><br>
        <label for="postal_code">Postal Code:</label><br>
        <input type="text" id="postal_code" name="postal_code"><br><br>
        <button type="submit">Update</button>
    </form>

    <h2>Get Address</h2>
    <a href="{{ route('address.show', ['id' => 1]) }}">View Address</a>

    <h2>Search Address</h2>
    <form action="{{ route('address.search') }}" method="GET">
        <label for="search">Search:</label><br>
        <input type="text" id="search" name="search"><br><br>
        <button type="submit">Search</button>
    </form>

    <h2>Remove Address</h2>
    <form action="{{ route('address.remove', ['id' => 1]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remove</button>
    </form>
</body>
</html>
