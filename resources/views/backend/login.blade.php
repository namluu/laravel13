<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Backend')</title>
</head>
<body>
<div class="container">
    <h1>Hello Login Page</h1>

    <form class="form-signin" method="POST" action="{{ route('login.auth') }}">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
    </form>
</div>
</body>
</html>
