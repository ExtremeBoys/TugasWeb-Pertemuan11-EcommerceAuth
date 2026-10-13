@extends('layouts.app')

@section('title', 'Tulis Postingan Baru - E-Store P11')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 border border-slate-200 rounded-lg shadow-sm">
    <h1 class="text-2xl font-bold text-slate-900 mb-1">Tulis Postingan Baru</h1>
    <p class="text-sm text-slate-500 mb-6">Penulis: {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Judul Artikel</label>
            <input id="title" type="text" name="title" value="{{ old('title') }}" required class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-slate-700 mb-1">Isi Konten</label>
            <textarea id="content" name="content" rows="6" required class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:border-indigo-500">{{ old('content') }}</textarea>
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded transition">
                Terbitkan Postingan
            </button>
            <a href="{{ route('posts.index') }}" class="px-5 py-2.5 bg-slate-100 text-slate-700 font-medium text-sm rounded border border-slate-300 hover:bg-slate-200 transition">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
