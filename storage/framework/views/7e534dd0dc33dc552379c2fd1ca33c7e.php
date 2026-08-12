

<?php $__env->startSection('title', 'Tambah Jenis Produk - POS'); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-8">

    <a href="<?php echo e(route('jenis-produk.index')); ?>"
       class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600 transition">

        <i data-lucide="arrow-left" class="w-4 h-4"></i>

        Kembali

    </a>

    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-4">
        Tambah Jenis Produk
    </h1>

    <p class="text-sm text-slate-500 mt-1">
        Tambahkan jenis produk baru ke sistem
    </p>

</div>


<div class="max-w-xl">

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

        <form action="<?php echo e(route('jenis-produk.store')); ?>"
              method="POST"
              class="space-y-5">

            <?php echo csrf_field(); ?>


            
            <div>

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Jenis Produk
                </label>

                <input
                    type="text"
                    name="nama"
                    value="<?php echo e(old('nama')); ?>"
                    required
                    autofocus
                    placeholder="Contoh: Makanan"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200
                           focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100
                           outline-none text-sm transition">

                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <p class="mt-1.5 text-xs text-red-600">
                        <?php echo e($message); ?>

                    </p>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="flex items-center justify-end gap-3 pt-3">

                <a href="<?php echo e(route('jenis-produk.index')); ?>"
                   class="px-5 py-2.5 rounded-xl border border-slate-200
                          text-sm font-medium text-slate-600
                          hover:bg-slate-50 transition">

                    Batal

                </a>


                <button
                    type="submit"
                    class="inline-flex items-center gap-2 px-5 py-2.5
                           bg-indigo-600 hover:bg-indigo-700
                           text-white text-sm font-medium rounded-xl
                           transition shadow-sm">

                    <i data-lucide="save" class="w-4 h-4"></i>

                    Simpan

                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS_faiq\resources\views/jenis_produk/create.blade.php ENDPATH**/ ?>