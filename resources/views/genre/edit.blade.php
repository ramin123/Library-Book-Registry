<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('author') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('update',$author->author_id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Name:</strong>
                        <input type="text" name="first_name" value="{{ $author->first_name }}" class="form-control"
                            placeholder="Company name">
                        @error('first_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        <input type="text" name="last_name" value="{{ $author->last_name }}" class="form-control"
                            placeholder="Company Address">
                        @error('last_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>