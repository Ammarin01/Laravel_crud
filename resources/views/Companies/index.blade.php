<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Laravel CRDU Example</h2>
            </div>
            <div>
                <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
            </div>
            @if($message=Session::get('success'))
            <div class="alert alet-success">
                <p> {{$message}} </p>
            </div>
            @endif
            <table class="tabel table-bordered">
                <thead>
                
                <tr>
                    <th>no.</th>
                    <th>company name</th>
                    <th>company email</th>
                    <th>company address</th>
                    <th width='280px'>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $value)
                <tr>
                    <td scope="row">{{$value->id}}</td>
                    <td scope="row">{{$value->name}}</td>
                    <td scope="row">{{$value->email}}</td>
                    <td scope="row">{{$value->address}}</td>
                    <td scope="row"></td>
                  </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>