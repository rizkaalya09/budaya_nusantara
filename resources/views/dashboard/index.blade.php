<!DOCTYPE HTML>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
   body {
        font-family: 'Montserrat', sans-serif;
    }
    header {
        background-color: #b69468;
        color: #ffffff;
        text-align: center;
        padding: 20px;
        font-size: 32px;
        font-weight: bold;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .btn {
        margin: 5px;
    }
    </style>
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <main class="container mt-4">
        <section>
            <h2>Daftar Karya Budaya</h2>
            <a href="{{route('items.create')}}" class="btn btn-primary">Tambah Karya Budaya</a> <!-- Tautan untuk menambahkan karya budaya -->
        </section>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Province Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td class="">{{ $item->name }}</td>
                    <td class="">{{ $item->description }}</td>
                    <td class="">{{ $item->province->name }}</td>
                    <td class="">{{ $item->category->name }}</td>
                    <td class="d-flex justify-evenly">
                        <a href="{{route('items.edit', $item)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('items.show', $item)}}" class="btn btn-info">Show</a>
                        <form action="{{ route('items.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <a href="{{route('logout')}}" class="btn btn-danger">Logout</a> <!-- Tautan untuk logout admin -->
</body>

</html>