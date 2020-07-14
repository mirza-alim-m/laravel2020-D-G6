
<?php $__env->startSection("title"); ?> Dosen list <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<?php if(session('status')): ?>
<div class="alert alert-success">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-4">
        <select name="matkul" class="form-control mr-2 col-8 filter">
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
        <a href="<?php echo e(route('dosens.create')); ?>" class="btn btn-primary">Tambah Dosen</a>
    </div>
</div>
<br>

<table class="table table-bordered" id="datatable">
    <thead>
        <tr>
            <th><b>#</b></th>
            <th><b>NIP</b></th>
            <th><b>Nama</b></th>
            <th><b>Mata Kuliah</b></th>
            <th><b>No Telpon</b></th>
            <th><b>Alamat</b></th>
            <th><b>Opsi</b></th>
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
        ajax: "<?php echo route('datatables.dosens'); ?>",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'dosen_nip', name: 'dosen_nip' },
            { data: 'dosen_nama', name: 'dosen_nama' },
            { data: 'matkuls.mata_kuliah', name: 'matkuls.mata_kuliah' },
            { data: 'dosen_no_telpon', name: 'dosen_no_telpon' },
            { data: 'dosen_alamat', name: 'dosen_alamat' },
            { data: 'action', name: 'action' },
        ]
    });
    datatable.draw();
    $('.filter').on('change', function (e) {
        datatable.destroy();
        $('tbody').remove();
        datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
				url: '<?php echo route('datatables.dosens'); ?>',
				data: function(d) {
					d.matkul = $('select[name=matkul]').val();
					console.log('cekrek');
				},
			},
            columns: [
                { data: 'id', name: 'id' },
                { data: 'dosen_nip', name: 'dosen_nip' },
                { data: 'dosen_nama', name: 'dosen_nama' },
                { data: 'matkuls.mata_kuliah', name: 'matkuls.mata_kuliah' },
                { data: 'dosen_no_telpon', name: 'dosen_no_telpon' },
                { data: 'dosen_alamat', name: 'dosen_alamat' },
                { data: 'action', name: 'action' },
            ]
        });
        datatable.draw();
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel2020-D-G6\resources\views/dosen/index.blade.php ENDPATH**/ ?>