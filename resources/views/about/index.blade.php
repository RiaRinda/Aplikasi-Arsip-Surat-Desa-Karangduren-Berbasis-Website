@extends('layouts.app')

@section('title', 'Aplikasi Arsip Surat')

@section('content')
<div class="container">
    <h1 class="mb-4">About</h1>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/profilerinda.jpg') }}" 
                         alt="Foto Profile" 
                         class="img-fluid rounded mb-2"
                         style="width: 160px; height: 200px; object-fit: cover;">
                    <p class="fw-bold mb-0">Foto Profile</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="mb-3">Aplikasi ini dibuat oleh:</p>
                    
                    <div class="mb-2 d-flex">
                        <div class="fw-bold" style="width:120px">Nama</div>
                        <div>: Marinda Cahya Putri</div>
                    </div>
                    
                    <div class="mb-2 d-flex">
                        <div class="fw-bold" style="width:120px">Prodi</div>
                        <div>: D3 - Manajemen Informatika PSDKU Kediri</div>
                    </div>
                    
                    <div class="mb-2 d-flex">
                        <div class="fw-bold" style="width:120px">NIM</div>
                        <div>: 2331730030</div>
                    </div>
                    
                    <div class="mb-2 d-flex">
                        <div class="fw-bold" style="width:120px">Tanggal</div>
                        <div>: {{ now()->format('d F Y') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
