<!DOCTYPE HTML>
<html>

<head>
    <title>Edit Item</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <header class="bg-light p-3 mb-4">
        <h1 class="text-center">Edit Item</h1>
    </header>
    <main class="container mt-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Back</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('items.update', ['item' => $item]) }}" method="POST" enctype="multipart/form-data"> <!-- Perubahan disini -->
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <!-- Assuming you have a $categories variable passed to the view -->
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
                @if ($item->photo)
                  
                <img src="{{ asset('assets/images/'.$item->photo) }}" alt="{{ $item->name }}" width="150" class="mt-2">
                @else
                <p>No photo</p>
                @endif
            </div>
            <div class="form-group">
                <label for="province_id">Province</label>
                <select class="form-control" id="province_id" name="province_id" required>
                    <!-- Assuming you have a $provinces variable passed to the view -->
                    @foreach($provinces as $province)
                        <option value="{{ $province->id }}" {{ $item->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>
</body>

</html>
