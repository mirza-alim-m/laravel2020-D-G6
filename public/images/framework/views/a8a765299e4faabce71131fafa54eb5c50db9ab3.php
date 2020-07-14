<?php $__env->startSection("title"); ?> Create New User <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="col-md-8">
    <?php if(session('status')): ?>
<div class="alert alert-success">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="<?php echo e(route('ruang.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mt-2">
        <div class="col-2">File</div><input class="form-control col-6" type="file" name="file">
         <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div style="display:inline;" class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="row mt-2">
        <div class="col-2">Image</div><input class="form-control col-6" type="file" name="image">
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div style="display:inline;" class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <label for="kelas">Kelas</label>
        <input class="form-control" placeholder="Ruang Kelas" type="text" name="kelas" id="kelas" />
        <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div style="display:inline;" class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <label for="gedung">Gedung</label>
        <input class="form-control" placeholder="gedung" type="text" name="gedung" id="gedung" />
        <?php $__errorArgs = ['gedung'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div style="display:inline;" class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="<?php echo e(route('ruang.index')); ?>" class="btn btn-danger">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/heni/Documents/Pak Mirza/laravel2020-D-G6/resources/views/ruang/create.blade.php ENDPATH**/ ?>