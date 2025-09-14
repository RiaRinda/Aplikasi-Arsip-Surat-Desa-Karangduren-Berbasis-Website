@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <h1 class="mb-3">Arsip Surat >> {{ $mode === 'create' ? 'Unggah' : 'Ubah' }}</h1>
    <p class="mb-4">
        Unggah surat yang telah terbit pada form ini untuk diarsipkan.
        <br>Catatan:
        <br><span class="ml-3">• Gunakan file berformat PDF</span>
    </p>

    <form method="post" enctype="multipart/form-data"
        action="{{ $mode === 'create' ? route('arsip.store') : route('arsip.update', $archive) }}">
        @csrf
        @if($mode === 'edit') @method('PUT') @endif

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Surat</label>
            <div class="col-sm-4">
                <input type="text" name="nomor" value="{{ old('nomor', $archive->nomor) }}" class="form-control form-control-sm">
                @error('nomor') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-4">
                <select name="id_kategori" class="form-control form-control-sm">
                    <option value="">Pilih Kategori Surat</option>
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}" @selected(old('id_kategori', $archive->id_kategori) == $id)>{{ $name }}</option>
                    @endforeach
                </select>
                @error('id_kategori') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-6">
                <input type="text" name="judul" value="{{ old('judul', $archive->judul) }}" class="form-control form-control-sm">
                @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">File Surat (PDF)</label>
            <div class="col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" readonly id="file-display">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-secondary btn-sm"
                            onclick="document.getElementById('file-input-hidden').click()">Browse File...</button>
                    </div>
                </div>
                <input type="file" name="file" accept="application/pdf" style="display:none"
                       id="file-input-hidden"
                       onchange="document.getElementById('file-display').value = this.files[0] ? this.files[0].name : ''">
                @if($mode === 'edit' && $archive->lokasi_file_arsip)
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti file.</small>
                @endif
                @error('file') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-8">
                <a class="btn btn-secondary btn-sm" href="{{ route('arsip.index') }}">&lt;&lt; Kembali</a>
                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
