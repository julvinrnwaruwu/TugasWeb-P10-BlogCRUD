@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <div class="actions" style="justify-content: space-between; margin-bottom: 20px;">
    <h1>Daftar Artikel</h1>
    <a href="{{ route('posts.create') }}" class="btn">+ Tambah Artikel</a>
</div>

<x-card>
    <form action="{{ route('posts.index') }}" method="GET">
        <label for="search">Cari Artikel</label>

        <div class="actions">
            <input
                type="text"
                id="search"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Cari judul atau nama penulis..."
                style="flex: 1; min-width: 200px;"
            >

            <button type="submit" class="btn">Cari</button>

            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                Reset
            </a>
        </div>
    </form>
</x-card>

    @if ($posts->count())
        @foreach ($posts as $post)
            <x-card>
                <h2>{{ $post->title }}</h2>

                <p>
                    <strong>Penulis:</strong> {{ $post->author }}
                </p>

                <p>
                    {{ \Illuminate\Support\Str::limit($post->content, 150) }}
                </p>

                <div class="actions">
                    <a href="{{ route('posts.show', $post) }}" class="btn">
                        Lihat
                    </a>

                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">
                        Edit
                    </a>

                    <form action="{{ route('posts.destroy', $post) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                </div>
            </x-card>
        @endforeach

        <div>
            {{ $posts->links() }}
        </div>
    @else
        <x-card>
            <p>Belum ada artikel. Silakan tambahkan artikel pertama kamu!</p>
        </x-card>
    @endif
@endsection