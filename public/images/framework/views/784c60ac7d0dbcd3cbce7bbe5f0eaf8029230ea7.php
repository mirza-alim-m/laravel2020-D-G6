
<?php $__env->startSection("title"); ?> Users list <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<?php if(session('status')): ?>
<div class="alert alert-success">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-6">
        <select name="matkul" class="form-control mr-2 col-8">
            <option value="" selected>Mata Kuliah</option>
            <?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($d->id); ?>"><?php echo e($d->mata_kuliah); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12 text-right">
        <a href="<?php echo e(route('mata_kuliah.create')); ?>" class="btn btn-primary">Tambah Mata Kuliah</a>
    </div>
</div>
<br>

<table class="table table-bordered" id="datatable">
    <thead>
        <tr>
            <th><b>ID</b></th>
            <th><b>Mata Kuliah</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
$(document).ready(function(){
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo route('datatables.matkul'); ?>',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'mata_kuliah', name: 'mata_kuliah' },
            { data: 'action', name: 'action' },
        ]
    });
    datatable.draw();
    $('select[name=matkul').on('change', function (e) {
        datatable.destroy();
        $('tbody').remove();
        datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?php echo route('datatables.matkul'); ?>',
                data: function(d) {
                    d.matkul = $('select[name=matkul]').val();
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'mata_kuliah', name: 'mata_kuliah' },
                { data: 'action', name: 'action' },
            ]
        });
        datatable.draw();
    });
});    
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\smtr 6\Framework Cloud Computing\laravel2020-D-G6\resources\views/mk/index.blade.php ENDPATH**/ ?>