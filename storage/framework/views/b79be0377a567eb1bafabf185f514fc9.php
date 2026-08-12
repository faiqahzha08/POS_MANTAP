<?php $__env->startSection('title', 'Edit Produk - POS'); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-8">

    <a href="<?php echo e(route('produk.index')); ?>"
       class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600">

        <i data-lucide="arrow-left" class="w-4 h-4"></i>

        Kembali

    </a>


    <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-4">
        Edit Produk
    </h1>

    <p class="text-sm text-slate-500 mt-1">
        Ubah informasi produk
    </p>

</div>


<div class="max-w-3xl">

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">

        <form action="<?php echo e(route('produk.update', $produk->id)); ?>"
              method="POST"
              enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <?php echo method_field('PUT'); ?>


            <!-- NAMA -->
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Produk
                </label>

                <input type="text"
                       name="nama"
                       value="<?php echo e(old('nama', $produk->nama)); ?>"
                       required
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400">

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


            <!-- JENIS PRODUK -->
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Jenis Produk
                </label>

                <select name="jenis_produk_id"
                        required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400">

                    <option value="">
                        -- Pilih Jenis Produk --
                    </option>

                    <?php $__currentLoopData = $jenisProduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($jenis->id); ?>"
                            <?php echo e(old(
                                'jenis_produk_id',
                                $produk->jenis_produk_id
                            ) == $jenis->id ? 'selected' : ''); ?>>

                            <?php echo e($jenis->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

                <?php $__errorArgs = ['jenis_produk_id'];
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


            <!-- DISTRIBUTOR -->
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Distributor
                </label>

                <select name="distributor_id"
                        required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400">

                    <option value="">
                        -- Pilih Distributor --
                    </option>

                    <?php $__currentLoopData = $distributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($distributor->id); ?>"
                            <?php echo e(old(
                                'distributor_id',
                                $produk->distributor_id
                            ) == $distributor->id ? 'selected' : ''); ?>>

                            <?php echo e($distributor->nama_perusahaan); ?>

                            -
                            <?php echo e($distributor->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

                <?php $__errorArgs = ['distributor_id'];
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


            <!-- HARGA BELI -->
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Harga Beli
                </label>

                <input type="number"
                       name="harga_beli"
                       value="<?php echo e(old('harga_beli', $produk->harga_beli)); ?>"
                       required
                       min="0"
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400">

                <?php $__errorArgs = ['harga_beli'];
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


            <!-- HARGA JUAL -->
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Harga Jual
                </label>

                <input type="number"
                       name="harga_jual"
                       value="<?php echo e(old('harga_jual', $produk->harga_jual)); ?>"
                       required
                       min="0"
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400">

                <?php $__errorArgs = ['harga_jual'];
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


            <!-- STOK -->
            <div class="mb-5">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Stok
                </label>

                <input type="number"
                       name="stok"
                       value="<?php echo e(old('stok', $produk->stok)); ?>"
                       required
                       min="0"
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200 outline-none focus:border-indigo-400">

                <?php $__errorArgs = ['stok'];
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


            <!-- FOTO LAMA -->
            <?php if($produk->foto): ?>

                <div class="mb-4">

                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Foto Saat Ini
                    </label>

                    <img src="<?php echo e(asset('storage/' . $produk->foto)); ?>"
                         class="w-24 h-24 object-cover rounded-xl border">

                </div>

            <?php endif; ?>


            <!-- FOTO BARU -->
            <div class="mb-6">

                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Ganti Foto
                </label>

                <input type="file"
                       name="foto"
                       accept=".jpg,.jpeg,.png"
                       class="w-full px-4 py-2.5 rounded-xl border border-slate-200">

                <?php $__errorArgs = ['foto'];
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


            <!-- BUTTON -->
            <div class="flex justify-end gap-3">

                <a href="<?php echo e(route('produk.index')); ?>"
                   class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50">

                    Batal

                </a>


                <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white">

                    Update Produk

                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS_faiq\resources\views/produk/edit.blade.php ENDPATH**/ ?>