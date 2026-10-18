@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>Detail Buku</h2>
    
    <p><strong>Judul:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Tahun:</strong> {{ $book->year }}</p>
    <p><strong>Stok:</strong> {{ $book->stock }}</p>
    <p><strong>Harga:</strong> {{ $book->price }}</p>
    
    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection