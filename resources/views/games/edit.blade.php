<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Game Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Edit Data </h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ url('/game') }}" enctype="multipart/form-data">Return</a>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ url("/game/$game->id") }}" method="POST" enctype="multipart form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Game Name: </strong>
                        <input type="text" name="name" value="{{ old('name', $game->name) }}"
                            class="form-control" placeholder="Game Name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Game Description: </strong>
                        <input type="text" name="description" value="{{ $game->description }}"
                            class="form-control" placeholder="Game Desc">
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Game Genre: </strong>
                        <input type="text" name="genre" value="{{ $game->genre }}"
                            class="form-control" placeholder="Game Genre">
                        @error('genre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Game Image: </strong>
                        <input type="file" name="image" value="{{ old('image', $game->image) }}"
                            class="form-control" placeholder="Game Image">
                        <img src="/assets/{{ $game->image }}" width="300px">
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Update</button>
            </div>
        </form>
    </div>
</body>

</html>