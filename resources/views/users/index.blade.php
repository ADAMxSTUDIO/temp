<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('bootstrap/css/bootstrap.bundle.min.js') }}"></script>
</head> 
<body>  
    @if (session()->has('store'))
        <div class="alert alert-success p-3 m-2">{{ session()->get('store') }}</div>
    @elseif (session()->has('update'))
        <div class="alert alert-success p-3 m-2">{{ session()->get('update') }}</div>
    @elseif (session()->has('softDelete'))
        <div class="alert alert-success p-3 m-2">{{ session()->get('softDelete') }}</div>
    @elseif (session()->has('destroy'))
        <div class="alert alert-success p-3 m-2">{{ session()->get('destroy') }}</div>
    @endif      

    <h1 class="m-2">All records</h1>
    <div>
        <a href="{{ route('user.create') }}" class="btn btn-success m-2">New User</a>
        <a href="{{ route('user.filter') }}" class="btn btn-primary m-2">Show *john*-users</a>
        <a href="{{ route('user.trash') }}" class="btn btn-light m-2">Soft-deleted users</a>
    </div>
        
    <table class="table table-light">
        <tr class="text-primary text-center ">
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="3">Actions</th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password}}</td>
                <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-success">Show</a></td>
                <td><a href="{{ route('user.edit', $user->name) }}" class="btn btn-primary">Update</a></td>
                <td><a href="{{ route('user.destroy', $user->id) }}" class="btn btn-warning">SoftDelete</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-warning text-center ">No data found!</td>
            </tr>
        @endforelse
    </table>
    
    {{ $users->links() }}
</body>
</html>