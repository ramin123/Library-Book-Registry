

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 CRUD Example Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('show') }}"> Create Company</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Frist Name</th>
                    <th>Last Name</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($author as $value)
                    <tr>
                        <td>{{ $value->author_id }}</td>
                        <td>{{ $value->first_name }}</td>
                        <td>{{ $value->last_name }}</td>
                        <td>
                            <form action="{{ route('destroy',$value->author_id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('editAuthor',$value->author_id) }}">Edit</a>
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
</body>
</html>