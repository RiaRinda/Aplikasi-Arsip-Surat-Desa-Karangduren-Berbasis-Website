@extends('layouts.app')

@section('title', 'Aplikasi Arsip Surat')

@section('content')

    <h1 style="margin-left:20px">Arsip Surat</h1>
    <p style="margin-left:20px">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
    <p style="margin-left:20px">Klik “Lihat” pada kolom aksi untuk menampilkan surat.</p>


    <form class="toolbar" method="get">
        <label style="margin-left:20px" class="mr-2">Cari Surat:</label>
        <input type="search" name="q" value="{{ $q }}" placeholder="search" class="form-control form-control-sm mr-2">
        <button class="btn btn-primary btn-sm mr-2">Cari!</button>
        <a class="btn btn-primary btn-sm ml-auto" href="{{ route('arsip.create') }}" style="margin-left:auto">[ + ] Tambah Arsip Baru…</a>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Waktu Pengarsipan</th>
                <th style="width:280px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($archives as $a)
                <tr data-row-id="{{ $a->id }}">
                    <td>{{ $a->nomor }}</td>
                    <td>{{ $a->kategori->nama_kategori }}</td>
                    <td>{{ $a->judul }}</td>
                    <td>{{ optional($a->waktu_arsip)->format('Y-m-d H:i') }}</td>
                    <td class="actions">
                        <form action="{{ route('arsip.destroy', $a) }}" method="post" style="display:inline" class="frm-delete">
                            @csrf @method('DELETE')
                            <button type="button" class="btn-red btn-delete" data-id="{{ $a->id }}">Hapus</button>
                        </form>
                        <a class="btn-yellow" href="{{ route('arsip.download', $a) }}">Unduh</a>
                        <a class="btn-blue" href="{{ route('arsip.show', $a) }}">Lihat >></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center;padding:20px">Tidak ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

<div class="d-flex justify-content-between align-items-center mt-3">
    <div class="text-muted" style="font-size: 13px; margin-left:10px">
        Menampilkan {{ $archives->firstItem() }} sampai {{ $archives->lastItem() }}
        dari total {{ $archives->total() }} data
    </div>
    <div>
        {{ $archives->links('pagination::bootstrap-4') }}
    </div>
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .btn {
        font-weight: bold;
        border: 1px solid #007bff;
        padding: 6px 12px;
        border-radius: 4px;
        background-color: #004d9bff;
        color: #ffffffff;
        cursor: pointer;
        transition: 0.2s;
    }
    .btn:hover {
        background-color: #007bff;
        color: white;
    }
</style>


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