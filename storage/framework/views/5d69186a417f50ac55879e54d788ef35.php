

<?php $__env->startSection('title', 'Tambah Distributor - POS'); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-8">

    <a href="<?php echo e(route('distributor.index')); ?>"
       class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600 mb-4">
        ← Kembali
    </a>

    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900">
        Tambah Distributor
    </h1>

    <p class="mt-1 text-sm text-slate-500">
        Tambahkan distributor baru
    </p>

</div>

<div class="max-w-xl">

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

        <form action="<?php echo e(route('distributor.store')); ?>"
              method="POST"
              class="space-y-5">

            <?php echo csrf_field(); ?>

            
            <div>

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Perusahaan
                </label>

                <input type="text"
                       name="nama_perusahaan"
                       value="<?php echo e(old('nama_perusahaan')); ?>"
                       required
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                       placeholder="Contoh: PT Sumber Makmur">

                <?php $__errorArgs = ['nama_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-rose-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div>

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Distributor
                </label>

                <input type="text"
                       name="nama"
                       value="<?php echo e(old('nama')); ?>"
                       required
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                       placeholder="Nama PIC / distributor">

                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-rose-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div>

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Alamat
                </label>

                <textarea name="alamat"
                          rows="3"
                          class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                          placeholder="Alamat perusahaan"><?php echo e(old('alamat')); ?></textarea>

            </div>


            
            <div>

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nomor Telepon
                </label>

                <input type="text"
                       name="telepon"
                       value="<?php echo e(old('telepon')); ?>"
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                       placeholder="08xxxxxxxxxx">

            </div>


            
            <div>

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email
                </label>

                <input type="email"
                       name="email"
                       value="<?php echo e(old('email')); ?>"
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                       placeholder="email@contoh.com">

            </div>


            <div class="flex justify-end gap-3 pt-2">

                <a href="<?php echo e(route('distributor.index')); ?>"
                   class="px-5 py-2.5 rounded-xl border border-slate-200 text-sm font-medium text-slate-600 hover:bg-slate-50">
                    Batal
                </a>

                <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium">
                    Simpan Distributor
                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS_faiq\resources\views/distributors/create.blade.php ENDPATH**/ ?>