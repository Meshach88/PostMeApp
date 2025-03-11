<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Me</title>
</head>

<body>
    <nav>
        <div>
            Logo
        </div>

        <div>
            <a href="/">Home</a>
            <a href="/posts">Posts</a>
            <a href="/about">About Us</a>
        </div>

        <div>
            @guest
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endguest

            @auth
            <form method="POST" action="/logout">
            @csrf
            <button type="submit">Log out</button>
            </form>
            @endauth
        </div>


    </nav>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
