@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card>
        <h1>{{ $post->title }}</h1>

        <p style="color: #6b7280;">
            Ditulis oleh <strong>{{ $post->author }}</strong>
        </p>

        <p style="color: #6b7280; font-size: 14px;">
            Dibuat pada {{ $post->created_at->format('d M Y, H:i') }}
        </p>

        <hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 20px 0;">

        <div style="line-height: 1.8; white-space: pre-line;">
            {{ $post->content }}
        </div>

        <div class="actions" style="margin-top: 25px;">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                Kembali
            </a>

            <a href="{{ route('posts.edit', $post) }}" class="btn">
                Edit Artikel
            </a>
        </div>
    </x-card>
@endsection