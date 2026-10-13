<?php $__env->startSection('title', 'Daftar Artikel & Postingan - E-Store P11'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 border border-slate-200 rounded-lg shadow-sm">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Artikel & Berita E-Commerce</h1>
            <p class="text-sm text-slate-500">Implementasi otorisasi <code>PostPolicy</code> pada tombol edit dan hapus.</p>
        </div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Post::class)): ?>
            <a href="<?php echo e(route('posts.create')); ?>" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm rounded transition">
                + Buat Post Baru
            </a>
        <?php endif; ?>
    </div>

    <div class="space-y-4">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="bg-white p-6 border border-slate-200 rounded-lg shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="space-y-2 flex-grow">
                    <div class="flex items-center gap-2 text-xs text-slate-400">
                        <span>Penulis: <strong><?php echo e($post->user->name); ?></strong> (<?php echo e($post->user->role); ?>)</span>
                        <span>&bull;</span>
                        <span><?php echo e($post->created_at->format('d M Y')); ?></span>
                    </div>
                    <h2 class="text-lg font-semibold text-slate-900"><?php echo e($post->title); ?></h2>
                    <p class="text-sm text-slate-600 line-clamp-2 leading-relaxed"><?php echo e($post->content); ?></p>
                </div>

                <div class="flex items-center gap-2 flex-shrink-0">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
                        <a href="<?php echo e(route('posts.edit', $post)); ?>" class="px-3 py-1.5 bg-sky-50 text-sky-700 border border-sky-200 rounded text-xs font-semibold hover:bg-sky-100 transition">
                            Edit
                        </a>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                        <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" onsubmit="return confirm('Hapus artikel ini?');" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="px-3 py-1.5 bg-red-50 text-red-700 border border-red-200 rounded text-xs font-semibold hover:bg-red-100 transition">
                                Hapus
                            </button>
                        </form>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('update', $post)): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('delete', $post)): ?>
                            <span class="text-xs text-slate-400 italic">Hanya Baca</span>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="text-center py-12 bg-white border border-slate-200 rounded-lg text-slate-500">
                Belum ada postingan artikel.
            </div>
        <?php endif; ?>
    </div>

    <div class="mt-6">
        <?php echo e($posts->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr11\resources\views/posts/index.blade.php ENDPATH**/ ?>