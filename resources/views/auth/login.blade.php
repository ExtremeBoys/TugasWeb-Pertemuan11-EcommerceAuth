@extends('layouts.app')

@section('title', 'Masuk ke Akun - E-Store P11')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 border border-slate-200 rounded-lg shadow-sm">
    <h1 class="text-2xl font-bold text-slate-900 mb-1">Masuk ke Akun</h1>
    <p class="text-sm text-slate-500 mb-6">Gunakan email dan kata sandi yang telah terdaftar.</p>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Kata Sandi</label>
            <input id="password" type="password" name="password" required class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remember" class="rounded border-slate-300 text-indigo-600">
                <span>Ingat saya</span>
            </label>
        </div>

        <div>
            <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded transition">
                Masuk
            </button>
        </div>

        <div class="pt-4 border-t border-slate-100 text-center text-xs text-slate-500">
            Akun uji bawaan: <br>
            <strong>admin@ecommerce.test</strong> | <strong>editor@ecommerce.test</strong> | <strong>user@ecommerce.test</strong><br>
            Password: <strong>password123</strong>
        </div>
    </form>
</div>
@endsection
