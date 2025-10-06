@extends('layout')

@section('content')
<div class="bg-white shadow mx-auto p-6 rounded-lg max-w-lg">
  <h2 class="mb-4 font-semibold text-gray-800 text-lg">Edit Produk</h2>

  <form action="{{ route('products.update', $products) }}" method="GET" class="space-y-4">
    @csrf @method('PUT')
    <div>
      <label class="block font-medium text-gray-700 text-sm">Nama Produk</label>
      <input type="text" name="name" value="{{ $products->name }}" class="mt-1 border-gray-300 focus:border-indigo-500 rounded-lg focus:ring-indigo-500 w-full" required>
    </div>

    <div>
      <label class="block font-medium text-gray-700 text-sm">Harga</label>
      <input type="number" name="price" value="{{ $products->price }}" class="mt-1 border-gray-300 focus:border-indigo-500 rounded-lg focus:ring-indigo-500 w-full" required>
    </div>

    <div>
      <label class="block font-medium text-gray-700 text-sm">Stok</label>
      <input type="number" name="stock" value="{{ $products->stock }}" class="mt-1 border-gray-300 focus:border-indigo-500 rounded-lg focus:ring-indigo-500 w-full" required>
    </div>

    <div>
      <label class="block font-medium text-gray-700 text-sm">Deskripsi</label>
      <textarea name="description" class="mt-1 border-gray-300 focus:border-indigo-500 rounded-lg focus:ring-indigo-500 w-full">{{ $products->description }}</textarea>
    </div>

    <div class="flex justify-between items-center pt-4">
      <a href="{{ route('products.index') }}" class="text-gray-500 hover:text-gray-700">Kembali</a>
      <button class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg text-white">Update</button>
    </div>
  </form>
</div>
@endsection
