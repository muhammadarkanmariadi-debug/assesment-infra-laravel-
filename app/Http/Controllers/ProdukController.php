<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $Produks = Produk::latest()->paginate(5);
        return view('index', compact('Produks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Produk::create($request->all());
        return redirect()->route('index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Produk $Produk)
    {
        return view('update', compact('Produk'));
    }

    public function update(Request $request, Produk $Produk)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $Produk->update($request->all());
        return redirect()->route('index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Produk $Produk)
    {
        $Produk->delete();
        return redirect()->route('index')->with('success', 'Produk berhasil dihapus!');
    }
}
