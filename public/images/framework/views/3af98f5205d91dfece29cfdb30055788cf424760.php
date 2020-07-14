<?php $__env->startSection('title'); ?> Edit Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-8">
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="<?php echo e(route('ruang.update', [$ruang->id])); ?>"
        method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mt-2">
        <div class="col-2">Pdf</div><input class="form-control col-6" type="file" name="file" required="required">
        </div>
        <div class="row mt-2">
        <div class="col-2">Image</div><input class="form-control col-6" type="file" name="image" required="required">
        </div>
        <input type="hidden" value="PUT" name="_method">
        <label for="kelas">Kelas</label>
        <input value="<?php echo e($ruang->kelas); ?>" class="form-control" placeholder="Ruang Kelas" type="text" name="kelas" id="kelas" />
        <br>
        <label for="gedung">Gedung</label>
        <input value="<?php echo e($ruang->gdeung); ?>" class="form-control" placeholder="Gedung" type="text"
            name="gedung" id="gedung" />
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="<?php echo e(route('ruang.index')); ?>" class="btn btn-danger">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/heni/Documents/Pak Mirza/laravel2020-D-G6/resources/views/ruang/edit.blade.php ENDPATH**/ ?>