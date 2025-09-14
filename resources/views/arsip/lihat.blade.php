@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <h1 class="mb-3">Arsip Surat >> Lihat</h1>

    <div class="mb-3">
        <p>Nomor: <b>{{ $archive->nomor }}</b></p>
        <p>Kategori: <b>{{ $archive->kategori->nama_kategori }}</b></p>
        <p>Judul: <b>{{ $archive->judul }}</b></p>
        <p>Waktu Unggah: <b>{{ optional($archive->waktu_arsip)->format('Y-m-d H:i') }}</b></p>
    </div>

    <div class="card mb-3" style="height:70vh; overflow:hidden">
        <iframe src="{{ asset('storage/' . $archive->lokasi_file_arsip) }}" title="PDF"
            style="width:100%;height:100%;border:none"></iframe>
    </div>

    <div class="d-flex gap-2">
        <a class="btn btn-secondary btn-sm" href="{{ route('arsip.index') }}">&lt;&lt; Kembali</a>
        <a class="btn btn-success btn-sm" href="{{ route('arsip.download', $archive) }}">Unduh</a>
        <a class="btn btn-warning btn-sm" href="{{ route('arsip.edit', $archive) }}">Edit/Ganti File</a>
    </div>
@endsection

<style>
    .btn + .btn {
        margin-left: 6px;
    }
</style>