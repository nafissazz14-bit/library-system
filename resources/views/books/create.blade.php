@extends('layouts.app')

@section('title', 'title')

@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        
        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{ old('title') }}">

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Penulis</label>p   
            <input type="text" name="author" placeholder="Penulis" value="{{ old('author') }}">

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" placeholder="Tahun Terbit" value="{{ old('year') }}">

            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Jumlah Stock Buku</label>
            <input type="number" name="stock" placeholder="Stok" value="{{ old('stock') }}">

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Harga Buku</label>
            <input type="number" name="price" placeholder="Harga" value="{{ old('price') }}">

            @error('price')
                <p>{{ $message }}</p>
            @enderror


        <button type="submit">
            Simpan
        </button>
    </form>
@endsection