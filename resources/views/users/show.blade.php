<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->name }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('bootstrap/css/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <table class="table table-light">
        <tr class="text-primary text-center">
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr class="text-center">
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
    </table>

    <a href="{{ url('/') }}" class="btn btn-warning"> <<< Back </a>
</body>
</html>