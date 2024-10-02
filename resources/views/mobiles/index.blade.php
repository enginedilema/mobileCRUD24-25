<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <p>
        <a class="btn btn-success" href="{{ route('mobiles.create') }}">Create Mobile</a>
    </p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th></th>
    </tr>
    @foreach ($mobiles as $mobile)
        <tr>
            <td>{{ $mobile->id }}</td>
            <td>{{ $mobile->name }}</td>
            <td>{{ $mobile->price }}</td>
            <td>
                <a  class="btn btn-primary" href="{{ route('mobiles.show', $mobile) }}">View</a>
                <a  class="btn btn-primary" href="{{ route('mobiles.edit', $mobile) }}">Edit</a>
                <form action="{{ route('mobiles.destroy', $mobile) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</body>
</html>