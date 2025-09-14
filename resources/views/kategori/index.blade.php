@extends('layouts.app')

@section('title', 'Aplikasi Arsip Surat')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <h1 style="margin-left:20px" class="mb-3">Kategori Surat</h1>
    <p style="margin-left:20px">Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.</p>
    <p style="margin-left:20px">Klik <b>Tambah</b> pada kolom aksi untuk menambahkan kategori baru.</p>

    <form style="margin-left:20px" class="form-inline mb-3" method="get">
        <label class="mr-2">Cari Surat:</label>
        <input type="search" name="q" value="{{ $q }}" placeholder="search" class="form-control form-control-sm mr-2">
        <button class="btn btn-outline-primary btn-sm mr-2">Cari!</button>
        <a class="btn btn-success btn-sm ml-auto" href="{{ route('kategori.create') }}">[ + ] Tambah Kategori Baru…</a>
    </form>

    <table class="table table-bordered table-striped table-sm text-center">
        <thead class="thead-light">
            <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th style="width:220px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nama_kategori }}</td>
                    <td>{{ $c->deskripsi }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $c) }}" method="post" style="display:inline" class="frm-delete">
                            @csrf @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $c->id }}">Hapus</button>
                        </form>
                        <a class="btn btn-warning btn-sm ml-1" href="{{ route('kategori.edit', $c) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            @if(!$categories->count())
                <tr>
                    <td colspan="4" class="text-center p-3">Tidak ada data.</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="mt-3">
        {{ $categories->links() }}
    </div>


<dialog id="confirmDlg">
  <div class="alert-box">
        <h3>Alert</h3>
        <p class="alert-message">Apakah Anda yakin ingin menghapus arsip surat ini?</p>
    <div class="alert-actions">
      <button id="btnCancel" class="btn cancel">Batal</button>
      <button id="btnOk" class="btn confirm">Ya!</button>
    </div>
  </div>
</dialog>
@endsection

@push('scripts')
<script>
    const dlg = document.getElementById('confirmDlg');
    let currentDeleteForm = null;

    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', e => {
            currentDeleteForm = e.target.closest('.frm-delete');
            dlg.showModal();
        })
    });

    document.getElementById('btnCancel').onclick = () => dlg.close();
    document.getElementById('btnOk').onclick = () => {
        dlg.close();
        if (currentDeleteForm) currentDeleteForm.submit();
    };
</script>
@endpush
