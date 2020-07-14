
<?php $__env->startSection("title"); ?> Users list <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<?php if(session('status')): ?>
<div class="alert alert-success">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-6">
        <form action="<?php echo e(route('ruang.index')); ?>">
            <div class="input-group mb-3">
                <input value="<?php echo e(Request::get('keyword')); ?>" name="keyword" class="form-control col-md-10" type="text"
                    placeholder="Filter berdasarkan Ruang Kelas" />
                <div class="input-group-append">
                    <input type="submit" value="Filter" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12 text-right">
        <a href="<?php echo e(route('ruang.create')); ?>" class="btn btn-primary">Create Ruang</a>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Ruang Kelas</b></th>
            <th><b>Gedung</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $ruangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($ruang->kelas); ?></td>
            <td><?php echo e($ruang->gedung); ?></td>
            <td>
                <a class="btn btn-info text-white btn-sm" href="<?php echo e(route('ruang.edit',[$ruang->id])); ?>">Edit</a>
                <a href="<?php echo e(route('ruang.show', [$ruang->id])); ?>" class="btn btn-primary btn-sm">Detail</a>
                <form onsubmit="return confirm('Delete this ruang permanently?')" class="d-inline"
                    action="<?php echo e(route('ruang.destroy', [$ruang->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
        <tr>
        <td colspan=10>
            <?php echo e($ruangs->appends(Request::all())->links()); ?>

        </td>
        </tr>
        </tfoot>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\smtr 6\Framework Cloud Computing\laravel2020-D-G6\resources\views/ruang/index.blade.php ENDPATH**/ ?>