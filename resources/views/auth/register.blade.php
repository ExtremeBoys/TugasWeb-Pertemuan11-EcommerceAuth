@extends('layouts.app')

@section('title', 'Daftar Akun Baru - E-Store P11')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 border border-slate-200 rounded-lg shadow-sm">
    <h1 class="text-2xl font-bold text-slate-900 mb-1">Daftar Akun Baru</h1>
    <p class="text-sm text-slate-500 mb-6">Lengkapi formulir berikut untuk membuat akun pelanggan.</p>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Kata Sandi</label>
            <input id="password" type="password" name="password" required class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-1">Konfirmasi Kata Sandi</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded transition">
                Daftar Sekarang
            </button>
        </div>

        <div class="pt-4 border-t border-slate-100 text-center text-xs text-slate-500">
            Sudah memiliki akun? <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Masuk di sini</a>
        </div>
    </form>
</div>
@endsection
