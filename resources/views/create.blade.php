<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post" action="{{route('agency.store')}}">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Name Agency</label>
            <input name="name" type="text" class="form-control"  placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input name="phone" type="number" class="form-control"  placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control"  placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input name="address" type="text" class="form-control"  placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Manager</label>
            <input name="manager" type="text" class="form-control"  placeholder="Enter manager">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
                @foreach($agencys as $agency)
                <option value="{{$agency->status}}">Hoat dong</option>
                <option value="{{$agency->status}}">khong hoat dong</option>

                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
