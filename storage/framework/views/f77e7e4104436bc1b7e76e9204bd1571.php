

<?php $__env->startSection('title', 'Edit Distributor - POS'); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-8">

    <a href="<?php echo e(route('distributor.index')); ?>"
       class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600 transition">

        <i data-lucide="arrow-left" class="w-4 h-4"></i>

        Kembali
    </a>

    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-4">
        Edit Distributor
    </h1>

    <p class="text-sm text-slate-500 mt-1">
        Ubah data distributor
    </p>

</div>


<div class="max-w-3xl">

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

        <form action="<?php echo e(route('distributor.update', $distributor->id)); ?>"
              method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>


            
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Perusahaan
                </label>

                <input
                    type="text"
                    name="nama_perusahaan"
                    value="<?php echo e(old('nama_perusahaan', $distributor->nama_perusahaan)); ?>"
                    required
                    placeholder="Contoh: PT Aep Baplang"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100">

                <?php $__errorArgs = ['nama_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nama
                </label>

                <input
                    type="text"
                    name="nama"
                    value="<?php echo e(old('nama', $distributor->nama)); ?>"
                    required
                    placeholder="Nama kontak distributor"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100">

                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    rows="3"
                    required
                    placeholder="Alamat distributor"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"><?php echo e(old('alamat', $distributor->alamat)); ?></textarea>

                <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Telepon
                </label>

                <input
                    type="text"
                    name="telepon"
                    value="<?php echo e(old('telepon', $distributor->telepon)); ?>"
                    required
                    placeholder="Contoh: 08765432198"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100">

                <?php $__errorArgs = ['telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-6">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="<?php echo e(old('email', $distributor->email)); ?>"
                    required
                    placeholder="email@gmail.com"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100">

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="flex justify-end gap-3">

                <a href="<?php echo e(route('distributor.index')); ?>"
                   class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 transition">

                    Batal

                </a>

                <button
                    type="submit"
                    class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white transition">

                    Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS_faiq\resources\views/distributors/edit.blade.php ENDPATH**/ ?>