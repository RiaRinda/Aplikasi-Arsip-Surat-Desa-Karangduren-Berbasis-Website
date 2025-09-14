<?php

namespace App\Http\Controllers;

use App\Models\ArsipModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArsipController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $archives = ArsipModel::with('kategori')
            ->when($q, fn($query)=>$query->where('judul','like',"%{$q}%"))
            ->orderByDesc('waktu_arsip')->orderByDesc('id')
            ->paginate(10)->withQueryString();

        return view('arsip.index', compact('archives','q'));
    }

    public function create()
    {
        $categories = KategoriModel::orderBy('nama_kategori')->pluck('nama_kategori','id');
        return view('arsip.form', [
            'archive'=>new ArsipModel(),
            'categories'=>$categories,
            'mode'=>'create'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nomor'       => ['required','string','max:100'],
            'id_kategori' => ['required','exists:kategori,id'],
            'judul'       => ['required','string','max:255'],
            'file'        => ['required','file','mimetypes:application/pdf','max:5120'],
        ],[
            'file.mimetypes'=>'File yang diupload harus berupa PDF.'
        ]);

        $path = $request->file('file')->store('arsip','public');

        ArsipModel::create([
            'nomor'         => $data['nomor'],
            'id_kategori'   => $data['id_kategori'],
            'judul'         => $data['judul'],
            'lokasi_file_arsip' => $path,
            'waktu_arsip'   => now(),
        ]);

        return redirect()->route('arsip.index')
            ->with('success','Data berhasil disimpan');
    }

    public function show(ArsipModel $arsip)
    {
        $arsip->load('kategori');
        return view('arsip.lihat', ['archive'=>$arsip]);
    }

    public function edit(ArsipModel $arsip)
    {
        $categories = KategoriModel::orderBy('nama_kategori')->pluck('nama_kategori','id');
        return view('arsip.form', [
            'archive'=>$arsip,
            'categories'=>$categories,
            'mode'=>'edit'
        ]);
    }

    public function update(Request $request, ArsipModel $arsip)
    {
        $data = $request->validate([
            'nomor'       => ['required','string','max:100'],
            'id_kategori' => ['required','exists:kategori,id'],
            'judul'       => ['required','string','max:255'],
            'file'        => ['nullable','file','mimetypes:application/pdf','max:5120'],
        ]);

        if ($request->hasFile('file')) {
            if ($arsip->lokasi_file_arsip) Storage::disk('public')->delete($arsip->lokasi_file_arsip);
            $arsip->lokasi_file_arsip = $request->file('file')->store('arsip','public');
        }

        $arsip->fill([
            'nomor'       => $data['nomor'],
            'id_kategori' => $data['id_kategori'],
            'judul'       => $data['judul'],
        ])->save();

        return redirect()->route('arsip.index')->with('success','Data berhasil diperbarui');
    }

    public function destroy(ArsipModel $arsip)
    {
        if ($arsip->lokasi_file_arsip) Storage::disk('public')->delete($arsip->lokasi_file_arsip);
        $arsip->delete();
        return back()->with('success','Data berhasil dihapus');
    }

    public function download(ArsipModel $arsip)
    {
        $path = storage_path('app/public/' . $arsip->lokasi_file_arsip);
        $filename = \Illuminate\Support\Str::slug($arsip->judul, '_') . '.pdf';

        return response()->download($path, $filename);
    }

}