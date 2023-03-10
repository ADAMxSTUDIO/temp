<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('bootstrap/css/bootstrap.bundle.min.js') }}"></script>
</head> 
<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="form-group p-3">
            <label for="name" class="text-primary">Name</label>
            <input type="text" class="form-control w-50 @error('name') is-invalid @enderror"  name="name" placeholder="Enter your name" value="{{ old('name') }}" />
            @error('name')
            <div class="error text-danger">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label for="email" class="text-primary">Email</label>
            <input type="email" class="form-control w-50 @error('email') is-invalid @enderror" name="email" placeholder="Enter your Email" value="{{ old('email') }}" />
            @error('email')
            <div class="error text-danger">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label for="password" class="text-primary">Password</label>
            <input type="password" class="form-control w-50 @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" value="{{ old('password') }}" />
            @error('password')
            <div class="error text-danger">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label for="co-password" class="text-primary">Confirm password</label>
            <input type="password" class="form-control w-50" name="password_confirmation" placeholder="Re-enter your password" />
        </div>
        <input type="submit" value="Add User" class="btn btn-primary m-3" />
    </form>

    <a href="{{ url('/') }}" class="btn btn-warning m-3"> <<< Back </a>

</body>
</html>