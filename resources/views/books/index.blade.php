@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <ul>
        @foreach($books as $book)
            <li>
                <h3>{{ $book->title }}</h3>
                <p>Penulis: {{ $book->author }}</p>
                <p>Tahun: {{ $book->year }}</p>
                <p>Stok: {{ $book->stock }}</p>
                <a href="{{ route('books.show', $book) }}">Detail</a>
                <a href="{{ route('books.edit', $book) }}">Edit buku</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection