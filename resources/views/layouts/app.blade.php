<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
        <hr>
    </header>

   <nav>
    <a href="{{ route('books.index') }}">Buku</a> |
    <a href="{{ route('members.index') }}">Member</a> |
    <a href="{{ route('categories.index') }}">Kategori</a>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>
   </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    <hr>
    <p>Library System</p>
</footer>

</body>

</html>