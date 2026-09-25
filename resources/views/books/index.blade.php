@extends('layouts.app')

@section('title', $title)

@section('content')

<h2>Daftar Buku</h2>
<p>{{ $description }}</p>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stock</th> <!-- Pastikan tag </th> ada di setiap header -->
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ data_get($book, 'title') ?? data_get($book, 'judul') }}</td>
                <td>{{ data_get($book, 'author') ?? data_get($book, 'penulis') }}</td>
                <td>{{ data_get($book, 'year') ?? data_get($book, 'tahun_terbit') }}</td>
                <td>{{ data_get($book, 'stock') ?? data_get($book, 'stok') }}</td> 
            </tr>
        @endforeach
    </tbody>
</table>

@endsection