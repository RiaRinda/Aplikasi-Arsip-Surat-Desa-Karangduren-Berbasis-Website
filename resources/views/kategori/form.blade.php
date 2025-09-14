@extends('layouts.app')

@section('content')

    <h1 class="mb-3">Kategori Surat >> {{ $mode === 'create' ? 'Tambah' : 'Edit' }}</h1>
    <p class="mb-4">Tambahkan atau edit data kategori. Jika sudah selesai, jangan lupa untuk mengklik tombol <b>Simpan</b>.</p>

    <form method="post" action="{{ $mode === 'create' ? route('kategori.store') : route('kategori.update', $category) }}">
        @csrf @if($mode === 'edit') @method('PUT') @endif

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID (Auto Increment)</label>
            <div class="col-sm-4">
                <input type="text" value="{{ $category->id ?: ($mode === 'create' ? (App\Models\KategoriModel::max('id') + 1) : '—') }}"
                       disabled class="form-control form-control-sm bg-light">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-6">
                <input type="text" name="nama_kategori" value="{{ old('nama_kategori', $category->nama_kategori) }}"
                       class="form-control form-control-sm">
                @error('nama_kategori') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-8">
                <textarea name="deskripsi" class="form-control form-control-sm" rows="3">{{ old('deskripsi', $category->deskripsi) }}</textarea>
                @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-10">
                <a class="btn btn-secondary btn-sm" href="{{ route('kategori.index') }}">&lt;&lt; Kembali</a>
                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
