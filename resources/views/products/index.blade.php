@extends('layouts.app')

@section('title', 'Katalog Produk - E-Store P11')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-6 border border-slate-200 rounded-lg shadow-sm">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Katalog Produk E-Commerce</h1>
            <p class="text-sm text-slate-500">Menampilkan produk dengan eager loading relasi kategori (<code>Product::with('category')</code>).</p>
        </div>
        <form action="{{ route('products.index') }}" method="GET" class="flex gap-2 w-full md:w-auto">
            <input type="text" name="cari" placeholder="Cari nama produk..." value="{{ request('cari') }}" class="px-3 py-2 border border-slate-300 rounded text-sm w-full md:w-64 focus:outline-none focus:border-indigo-500">
            <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded text-sm font-medium">Cari</button>
            @if (request('cari') || request('kategori'))
                <a href="{{ route('products.index') }}" class="px-3 py-2 bg-slate-100 border border-slate-300 text-slate-700 rounded text-sm hover:bg-slate-200">Reset</a>
            @endif
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse ($products as $item)
            <div class="bg-white border border-slate-200 rounded-lg p-5 shadow-sm flex flex-col justify-between hover:border-slate-300 transition">
                <div>
                    <div class="flex justify-between items-start gap-2 mb-2">
                        <span class="text-xs px-2.5 py-1 bg-slate-100 text-slate-700 rounded font-medium">
                            {{ $item->category->name }}
                        </span>
                        <span class="text-xs text-slate-400">Stok: {{ $item->stock }}</span>
                    </div>
                    <h2 class="text-base font-semibold text-slate-900 mb-2 leading-snug">
                        <a href="{{ route('products.show', $item) }}" class="hover:text-indigo-600 transition">
                            {{ $item->name }}
                        </a>
                    </h2>
                    <p class="text-xs text-slate-500 line-clamp-2 mb-4">
                        {{ $item->description }}
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-base font-bold text-indigo-600">
                        Rp {{ number_format($item->price, 0, ',', '.') }}
                    </span>
                    <a href="{{ route('products.show', $item) }}" class="text-xs px-3 py-1.5 bg-slate-100 text-slate-700 rounded hover:bg-slate-200 transition font-medium">
                        Detail
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-12 bg-white border border-slate-200 rounded-lg text-slate-500">
                Tidak ada produk yang cocok dengan pencarian.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
@endsection
