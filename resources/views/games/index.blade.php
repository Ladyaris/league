<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Games Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> League's Game Data </h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ url('/game/data/create') }}"> Create Data</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
        <tr>
            <th>ID's</th>
            <th>Image</th>
            <th width="160px">Game Name</th>
            <th>Description</th>
            <th width="145px">Genre</th>
            <th width="160px">Action</th>
        </tr>
        {{--variabel $data ini diambil dari method index di GameController--}}
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td><img src="/assets/{{ $item->image }}" width="100px"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->genre }}</td>
                <td>
                    {{-- route aksi untuk hapus --}}
                    <form action="{{ url("/game/$item->id") }}" method="Post">
                        {{-- route aksi untuk edit--}}
                        <a class="btn btn-primary" href="{{ url("/game/$item->id/edit") }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>