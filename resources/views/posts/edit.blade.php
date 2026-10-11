@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <x-card>
        <h1>Edit Artikel</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Judul Artikel</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $post->title) }}"
                placeholder="Masukkan judul artikel"
            >

            @error('title')
                <p style="color: red; margin-top: -10px;">
                    {{ $message }}
                </p>
            @enderror

            <label for="author">Nama Penulis</label>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author', $post->author) }}"
                placeholder="Masukkan nama penulis"
            >

            @error('author')
                <p style="color: red; margin-top: -10px;">
                    {{ $message }}
                </p>
            @enderror

            <label for="content">Isi Artikel</label>
            <textarea
                id="content"
                name="content"
                rows="8"
                placeholder="Tuliskan isi artikel"
            >{{ old('content', $post->content) }}</textarea>

            @error('content')
                <p style="color: red; margin-top: -10px;">
                    {{ $message }}
                </p>
            @enderror

            <div class="actions">
                <button type="submit" class="btn">
                    Simpan Perubahan
                </button>

                <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                    Batal
                </a>
            </div>
        </form>
    </x-card>
@endsection