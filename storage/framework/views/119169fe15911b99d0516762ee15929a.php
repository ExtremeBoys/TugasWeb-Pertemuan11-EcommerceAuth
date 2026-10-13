<?php $__env->startSection('title', 'Editor Panel - E-Store P11'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <div class="bg-amber-50 border border-amber-200 rounded-lg p-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-amber-900 mb-1">Panel Redaksi & Editor</h1>
                <p class="text-sm text-amber-700">Rute ini dilindungi middleware khusus: <code>role:admin,editor</code></p>
            </div>
            <span class="px-3 py-1 bg-amber-600 text-white text-xs font-bold rounded">ROLE: ADMIN & EDITOR</span>
        </div>
    </div>

    <div class="bg-white p-6 border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800 mb-3">Tugas Redaksi</h2>
        <p class="text-sm text-slate-600 mb-4">Pengguna dengan peran Editor dapat membuat postingan baru dan mengedit serta menghapus artikel yang dibuat sendiri sesuai dengan aturan <code>PostPolicy</code>.</p>
        <div class="flex gap-3">
            <a href="<?php echo e(route('posts.create')); ?>" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-700 transition">+ Buat Postingan Baru</a>
            <a href="<?php echo e(route('posts.index')); ?>" class="px-4 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded border border-slate-300 hover:bg-slate-200 transition">Kelola Postingan</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr11\resources\views/editor/dashboard.blade.php ENDPATH**/ ?>