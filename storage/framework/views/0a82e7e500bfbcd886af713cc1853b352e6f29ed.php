
<?php $__env->startSection('title'); ?> Edit Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-8">
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <form class="bg-white shadow-sm p-3" action="<?php echo e(route('mata_kuliah.update', ['mata_kuliah'=> @$mk->id])); ?>"
        method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row mt-2">
        <div class="col-2">File<div><input class="form-control col-6" type="file" name="file" required="required">
        </div>
        <div class="row mt-2">
        <div class="col-2">Image<div><input class="form-control col-6" type="file" name="image" required="required">
        </div>
        <input type="hidden" value="PUT" name="_method">
        <label for="mata_kuliah">Mata Kuliah</label>
        <input class="form-control" placeholder="Mata Kuliah" type="text" name="mata_kuliah"
        value="<?php echo e($mk->mata_kuliah); ?>" />
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="<?php echo e(route('mata_kuliah.index')); ?>" class="btn btn-danger">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\smtr 6\Framework Cloud Computing\laravel2020-D-G6\resources\views/mk/edit.blade.php ENDPATH**/ ?>