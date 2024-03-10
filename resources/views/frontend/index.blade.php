<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewsApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container py-3">
        <a href="/page/create" class="btn btn-primary mb-3">Create New Post</a>
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach ($post as $latest)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">{{ $latest->title }}</h5>
                            <p class="card-text">{{ $latest->description }}</p>
                        </div>
                        <div>
                            <form action="/page/{{ $latest->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/page/{{ $latest->id }}/edit" class="btn btn-secondary">Edit</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
