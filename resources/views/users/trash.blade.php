<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trashed users</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('bootstrap/css/bootstrap.bundle.min.js') }}"></script>
</head> 
<body> 
    @if (session()->has('restore'))
        <div class="alert alert-success p-3 m-2">{{ session()->get('restore') }}</div>
    @elseif (session()->has('forceDelete'))
        <div class="alert alert-success p-3 m-2">{{ session()->get('forceDelete') }}</div>
    @endif

    <h1 class="m-2">All records including trash</h1>
    <table class="table table-light">
        <tr class="text-primary text-center ">
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2">Action</th>
        </tr>
        @forelse ($trash as $user)
            @if ($user->trashed())
                <tr class="table-danger"> 
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password}}</td>
                    <td><a href="{{ route('user.restore', $user->id) }}" class="btn btn-success">Restore</a></td>
                    <td><a href="{{ route('user.forceDelete', $user->id) }}" class="btn btn-danger">forceDelete</a></td>   
            @else
                <tr class="table-success">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password}}</td>
                    <td colspan="2" class="text-success text-center">Still Active</td>
                @endif
                </tr>
        @empty
            <tr>
                <td colspan="4" class="text-warning text-center ">Trash is still empty!</td>
            </tr>
        @endforelse
    </table>

    <a href="{{ url('/') }}" class="btn btn-warning m-3"> <<< Back </a>
</body>
</html>