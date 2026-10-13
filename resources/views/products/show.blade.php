@extends('layouts.app')

@section('title', $product->name . ' - E-Store P11')

@section('content')
<div class="space-y-6">
    <div class="bg-white p-6 md:p-8 border border-slate-200 rounded-lg shadow-sm">
        <div class="mb-4">
            <a href="{{ route('products.index') }}" class="text-sm text-indigo-600 hover:underline">&larr; Kembali ke Katalog</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-slate-100 rounded-lg p-12 flex items-center justify-center border border-slate-200">
                <div class="text-center">
                    <span class="text-4xl font-bold text-slate-400">PRODUK</span>
                    <p class="text-xs text-slate-500 mt-2">{{ $product->category->name }}</p>
                </div>
            </div>

            <div class="space-y-4">
                <span class="inline-block text-xs px-2.5 py-1 bg-slate-100 text-slate-700 rounded font-medium">
                    {{ $product->category->name }}
                </span>

                <h1 class="text-2xl font-bold text-slate-900">{{ $product->name }}</h1>

                <div class="text-2xl font-extrabold text-indigo-600">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>

                <div class="text-sm text-slate-600 leading-relaxed border-t border-b border-slate-100 py-4">
                    <p class="font-medium text-slate-800 mb-1">Deskripsi Produk:</p>
                    <p>{{ $product->description }}</p>
                </div>

                <div class="flex items-center gap-6 text-sm">
                    <div>
                        <span class="text-slate-500">Ketersediaan Stok:</span>
                        <span class="font-semibold text-slate-800 ml-1">{{ $product->stock }} unit</span>
                    </div>
                    <div>
                        <span class="text-slate-500">Status:</span>
                        <span class="font-semibold text-emerald-600 ml-1">{{ $product->is_active ? 'Tersedia' : 'Habis' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
