<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form action="/" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td scope="row">{{ $blog->title }}</td>
                                <td>{{ $blog->description }}</td>
                                <td><a href="/{{ $blog->id }}" class="btn btn-warning">Edit</a></td>
                                    <td>
                                    <form action="/{{ $blog->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>