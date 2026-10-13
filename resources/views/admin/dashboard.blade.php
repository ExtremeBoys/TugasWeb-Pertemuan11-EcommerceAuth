@extends('layouts.app')

@section('title', 'Admin Panel - E-Store P11')

@section('content')
<div class="space-y-6">
    <div class="bg-red-50 border border-red-200 rounded-lg p-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-red-900 mb-1">Panel Khusus Administrator</h1>
                <p class="text-sm text-red-700">Rute ini dilindungi middleware khusus: <code>role:admin</code></p>
            </div>
            <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded">ROLE: ADMIN ONLY</span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 border border-slate-200 rounded-lg shadow-sm">
            <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Total Pengguna Terdaftar</h2>
            <p class="text-3xl font-bold text-slate-800">4 Akun</p>
            <p class="text-xs text-slate-500 mt-2">1 Admin, 1 Editor, 2 Pelanggan</p>
        </div>
        <div class="bg-white p-5 border border-slate-200 rounded-lg shadow-sm">
            <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Katalog Produk</h2>
            <p class="text-3xl font-bold text-slate-800">52 Item</p>
            <p class="text-xs text-slate-500 mt-2">Terbagi dalam 5 kategori</p>
        </div>
        <div class="bg-white p-5 border border-slate-200 rounded-lg shadow-sm">
            <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-1">Kebijakan Otorisasi</h2>
            <p class="text-3xl font-bold text-emerald-600">PostPolicy</p>
            <p class="text-xs text-slate-500 mt-2">Admin berhak mengedit & menghapus semua konten</p>
        </div>
    </div>
</div>
@endsection
