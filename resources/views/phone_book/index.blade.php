<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create  Phone Book</title>
  </head>
  <body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="mb-0">Phone Book List</h4>
                            <a href="{{route('phone_book.create')}}" type="button" class="btn btn-success btn-sm">Add Contact</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sl = 1 @endphp
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->created_at->toDayDateTimeString()}}</td>
                                    <td>{{$contact->created_at == $contact->updated_at ? 'Not Updated Yet' : $contact->updated_at->toDayDateTimeString()}}</td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-sm btn-info" href="{{route('phone_book.show', $contact->id)}}">View</a>
                                        <a class="btn btn-sm btn-warning" href="{{route('phone_book.edit', $contact->id)}}">Edit</a>
                                        {!! Form::open(['method' => 'delete', 'route' => ['phone_book.destroy', $contact->id]]) !!}
                                        {!! Form::button('Delete', ['class' => 'btn btn-sm btn-danger' , 'type' => 'submit', 'onclick' => 'return confirm("Are you sure?")']) !!}
                                        {!! Form::close() !!}
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
