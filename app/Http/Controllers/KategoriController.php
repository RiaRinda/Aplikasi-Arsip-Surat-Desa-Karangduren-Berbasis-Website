<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $categories = KategoriModel::when($q, fn($query)=>$query->where('nama_kategori','like',"%{$q}%"))
            ->orderBy('id')
            ->paginate(10)->withQueryString();

        return view('kategori.index', compact('categories','q'));
    }

    public function create()
    {
        $nextId = KategoriModel::max('id') + 1;
        return view('kategori.form', [
            'category'=>new KategoriModel(),
            'mode'=>'create',
            'nextId' => $nextId
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => ['required','string','max:255','unique:kategori,nama_kategori'],
            'deskripsi'     => ['nullable','string'],
        ]);

        KategoriModel::create($data);

        return redirect()->route('kategori.index')
            ->with('success','Kategori berhasil ditambahkan');
    }

    public function edit(KategoriModel $kategori)
    {
        return view('kategori.form', [
            'category'=>$kategori,
            'mode'=>'edit'
        ]);
    }

    public function update(Request $request, KategoriModel $kategori)
    {
        $data = $request->validate([
            'nama_kategori' => ['required','string','max:255','unique:kategori,nama_kategori,'.$kategori->id],
            'deskripsi'     => ['nullable','string'],
        ]);

        $kategori->update($data);

        return redirect()->route('kategori.index')
            ->with('success','Kategori berhasil diperbarui');
    }

    public function destroy(KategoriModel $kategori)
    {
        $kategori->delete();
        return back()->with('success','Kategori berhasil dihapus');
    }
}