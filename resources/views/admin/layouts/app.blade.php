<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Villa Admin' }}</title>
</head>
<body>

    <header>
        <h2>Villa Admin</h2>

        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            |
            <a href="{{ route('profile.edit') }}">Profile</a>
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>

</body>
</html>
