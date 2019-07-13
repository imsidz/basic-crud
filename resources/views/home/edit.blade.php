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
              <form action="/{{$blog->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId" value="{{ $blog->title }}">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $blog->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        
    </div>
    <script src="/js/app.js"></script>
</body>
</html>