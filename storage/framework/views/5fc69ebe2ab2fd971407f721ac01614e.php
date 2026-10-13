<?php $__env->startSection('title', 'Dashboard Pengguna - E-Store P11'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <div class="bg-white p-6 border border-slate-200 rounded-lg shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-900 mb-1">Halo, <?php echo e(Auth::user()->name); ?>!</h1>
            <p class="text-sm text-slate-500">Anda berhasil login ke dalam sistem e-commerce.</p>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-xs uppercase tracking-wider font-semibold text-slate-400">Hak Akses:</span>
            <span class="px-3 py-1 text-xs font-bold rounded-full 
                <?php if(Auth::user()->role === 'admin'): ?> bg-red-100 text-red-700
                <?php elseif(Auth::user()->role === 'editor'): ?> bg-amber-100 text-amber-700
                <?php else: ?> bg-blue-100 text-blue-700 <?php endif; ?>">
                <?php echo e(strtoupper(Auth::user()->role)); ?>

            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 border border-slate-200 rounded-lg shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-2">Profil Akun</h2>
            <div class="space-y-2 text-sm text-slate-600">
                <p><strong>Nama:</strong> <?php echo e(Auth::user()->name); ?></p>
                <p><strong>Email:</strong> <?php echo e(Auth::user()->email); ?></p>
                <p><strong>Role:</strong> <?php echo e(Auth::user()->role); ?></p>
            </div>
        </div>

        <div class="bg-white p-5 border border-slate-200 rounded-lg shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-2">Akses & Otorisasi</h2>
            <div class="space-y-2 text-xs text-slate-600">
                <p class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full <?php if(Auth::user()->isAdmin()): ?> bg-emerald-500 <?php else: ?> bg-slate-300 <?php endif; ?>"></span>
                    <span>Akses Panel Administrator: <strong><?php echo e(Auth::user()->isAdmin() ? 'Ya' : 'Tidak'); ?></strong></span>
                </p>
                <p class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full <?php if(Auth::user()->isAdmin() || Auth::user()->isEditor()): ?> bg-emerald-500 <?php else: ?> bg-slate-300 <?php endif; ?>"></span>
                    <span>Akses Panel Editor: <strong><?php echo e((Auth::user()->isAdmin() || Auth::user()->isEditor()) ? 'Ya' : 'Tidak'); ?></strong></span>
                </p>
                <p class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full <?php if(Auth::user()->isAdmin() || Auth::user()->isEditor()): ?> bg-emerald-500 <?php else: ?> bg-slate-300 <?php endif; ?>"></span>
                    <span>Buat/Kelola Artikel (PostPolicy): <strong><?php echo e((Auth::user()->isAdmin() || Auth::user()->isEditor()) ? 'Ya' : 'Tidak'); ?></strong></span>
                </p>
            </div>
        </div>

        <div class="bg-white p-5 border border-slate-200 rounded-lg shadow-sm">
            <h2 class="text-base font-semibold text-slate-800 mb-2">Aksi Cepat</h2>
            <div class="space-y-2 text-sm">
                <a href="<?php echo e(route('products.index')); ?>" class="block px-3 py-2 bg-slate-50 border border-slate-200 rounded text-slate-700 hover:bg-slate-100 transition">Lihat Katalog Produk</a>
                <a href="<?php echo e(route('posts.index')); ?>" class="block px-3 py-2 bg-slate-50 border border-slate-200 rounded text-slate-700 hover:bg-slate-100 transition">Daftar Artikel & Post</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr11\resources\views/dashboard.blade.php ENDPATH**/ ?>