@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $berita->judul }}</h1>

    <p><strong>Tanggal Publikasi:</strong> {{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y') }}</p>

    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid mb-3" style="max-width: 400px;">

    <p>{!! nl2br(e($berita->deskripsi)) !!}</p>

    <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
</div>
@endsection
