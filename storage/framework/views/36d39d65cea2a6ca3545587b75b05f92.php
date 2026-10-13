<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'E-Commerce Auth & DB'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap justify-between items-center gap-4">
            <div class="flex items-center gap-6">
                <a href="<?php echo e(route('home')); ?>" class="text-xl font-bold text-indigo-600">E-Store P11</a>
                <div class="flex items-center gap-4 text-sm font-medium">
                    <a href="<?php echo e(route('products.index')); ?>" class="hover:text-indigo-600 transition">Katalog Produk</a>
                    <a href="<?php echo e(route('posts.index')); ?>" class="hover:text-indigo-600 transition">Artikel</a>
                </div>
            </div>

            <div class="flex items-center gap-4 text-sm font-medium">
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->role === 'admin'): ?>
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="px-2.5 py-1 text-xs rounded bg-red-100 text-red-700 font-semibold">Admin Panel</a>
                    <?php endif; ?>
                    <?php if(in_array(Auth::user()->role, ['admin', 'editor'])): ?>
                        <a href="<?php echo e(route('editor.dashboard')); ?>" class="px-2.5 py-1 text-xs rounded bg-amber-100 text-amber-700 font-semibold">Editor Panel</a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-slate-700 hover:text-indigo-600"><?php echo e(Auth::user()->name); ?> (<?php echo e(Auth::user()->role); ?>)</a>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="text-xs px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded border border-slate-300">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-slate-700 hover:text-indigo-600">Masuk</a>
                    <a href="<?php echo e(route('register')); ?>" class="px-3.5 py-1.5 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Daftar</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-6xl mx-auto px-4 py-8 w-full">
        <?php if(session('success')): ?>
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-800 rounded text-sm">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-white border-t border-slate-200 py-6 text-center text-sm text-slate-500">
        <p>&copy; 2026 E-Commerce Auth & Database - Tugas Rutin 11</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr11\resources\views/layouts/app.blade.php ENDPATH**/ ?>