@extends('layouts.app')

@section('title', 'Daftar Artikel & Postingan - E-Store P11')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 border border-slate-200 rounded-lg shadow-sm">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Artikel & Berita E-Commerce</h1>
            <p class="text-sm text-slate-500">Implementasi otorisasi <code>PostPolicy</code> pada tombol edit dan hapus.</p>
        </div>
        @can('create', App\Models\Post::class)
            <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded transition">
                + Buat Post Baru
            </a>
        @endcan
    </div>

    <div class="space-y-4">
        @forelse ($posts as $post)
            <div class="bg-white p-6 border border-slate-200 rounded-lg shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="space-y-2 flex-grow">
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span>Penulis: <strong>{{ $post->user->name }}</strong> ({{ $post->user->role }})</span>
                        <span>&bull;</span>
                        <span>{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                    <h2 class="text-lg font-semibold text-slate-900">{{ $post->title }}</h2>
                    <p class="text-sm text-slate-600 line-clamp-2 leading-relaxed">{{ $post->content }}</p>
                </div>

                <div class="flex items-center gap-2 flex-shrink-0">
                    @can('update', $post)
                        <a href="{{ route('posts.edit', $post) }}" class="px-3 py-1.5 bg-sky-50 text-sky-700 border border-sky-200 rounded text-xs font-semibold hover:bg-sky-100 transition">
                            Edit
                        </a>
                    @endcan

                    @can('delete', $post)
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?');" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1.5 bg-red-50 text-red-700 border border-red-200 rounded text-xs font-semibold hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </form>
                    @endcan

                    @cannot('update', $post)
                        @cannot('delete', $post)
                            <span class="text-xs text-slate-400 italic">Hanya Baca</span>
                        @endcannot
                    @endcannot
                </div>
            </div>
        @empty
            <div class="text-center py-12 bg-white border border-slate-200 rounded-lg text-slate-500">
                Belum ada postingan artikel.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection
