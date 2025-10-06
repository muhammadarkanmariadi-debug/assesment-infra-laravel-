@extends('layout')

@section('content')
<div class="bg-white shadow p-6 rounded-lg">
  <div class="flex justify-between items-center mb-4">
    <h2 class="font-semibold text-gray-800 text-lg">Daftar Produk</h2>
    <a href="{{ route('products.create') }}" class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg text-white">+ Tambah</a>
  </div>

  @if (session('success'))
    <div class="bg-green-100 mb-4 p-3 rounded text-green-700">
      {{ session('success') }}
    </div>
  @endif

  <table class="border border-gray-200 w-full text-left">
    <thead class="bg-gray-50">
      <tr>
        <th class="px-4 py-2 border-b">Nama</th>
        <th class="px-4 py-2 border-b">Harga</th>
        <th class="px-4 py-2 border-b">Stok</th>
        <th class="px-4 py-2 border-b text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-2 border-b">{{ $product->name }}</td>
          <td class="px-4 py-2 border-b">Rp{{ number_format($product->price, 0, ',', '.') }}</td>
          <td class="px-4 py-2 border-b">{{ $product->stock }}</td>
          <td class="space-x-2 px-4 py-2 border-b text-center">
            <a href="{{ route('products.edit', $product) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
              @csrf @method('DELETE')
              <button class="font-medium text-red-600 hover:text-red-800" onclick="return confirm('Hapus produk ini?')">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="py-3 text-gray-500 text-center">Belum ada produk</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <div class="mt-4">{{ $products->links() }}</div>
</div>
@endsection
