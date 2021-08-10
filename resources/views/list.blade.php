<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <a href="{{route('agency.store')}}" class="btn btn-primary">Add</a>
    <form method="get" action="{{route('agency.search')}}">

        <input  name="search" type="text" class="form-control"  placeholder="Enter search">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <div class="form-group">

    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Manager</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($agencys as $agency)
        <tr>
            <td>{{$agency->id}}</td>
            <td>{{$agency->name}}</td>
            <td>{{$agency->phone}}</td>
            <td>{{$agency->email}}</td>
            <td>{{$agency->address}}</td>
            <td>{{$agency->manager}}</td>
            <td>{{$agency->status}}</td>
            <td>
                <a href="{{route('agency.edit', $agency->id)}}" class="btn btn-primary">Edit</a>
                <a  href="{{route('agency.delete',$agency->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
