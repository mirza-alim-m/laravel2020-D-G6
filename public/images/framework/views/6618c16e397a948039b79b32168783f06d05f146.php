<?php $__env->startSection("title"); ?> Jam Kuliah list <?php $__env->stopSection(); ?>
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
    <div class="col-md-4">
        <select name="ruang" class="form-control mr-2 col-8 filter">
            <option value="" selected>Ruang</option>
            <?php $__currentLoopData = $ruang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($d->id); ?>"><?php echo e($d->kelas); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-md-4">
      <select class="form-control mr-2 col-8 filter" name="hari" required>
        <option value="">Pilih Hari</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
      </select>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12 text-right">
        <a href="<?php echo e(route('jamkuliah.create')); ?>" class="btn btn-primary">Tambah Jam Kuliah</a>
    </div>
</div>
<br>

<table class="table table-bordered" id="datatable">
    <thead>
        <tr>
            <th><b>ID</b></th>
            <th><b>Dosen</b></th>
            <th><b>Mata Kuliah</b></th>
            <th><b>Ruang</b></th>
            <th><b>Hari</b></th>
            <th><b>Jam</b></th>
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
        ajax: "<?php echo route('datatables.jamkuliah'); ?>",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'dosens.dosen_nama', name: 'dosens.dosen_nama' },
            { data: 'dosens.matkuls.mata_kuliah', name: 'dosens.matkuls.mata_kuliah' },
            { data: 'ruangs.kelas', name: 'ruangs.kelas' },
            { data: 'hari', name: 'hari' },
            { data: 'jam', name: 'jam' },
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
                url: "<?php echo route('datatables.jamkuliah'); ?>",
                data: function(d) {
                    d.matkul = $('select[name=matkul]').val();
                    d.hari = $('select[name=hari]').val();
                    d.ruang = $('select[name=ruang]').val();
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'dosens.dosen_nama', name: 'dosens.dosen_nama' },
                { data: 'dosens.matkuls.mata_kuliah', name: 'dosens.matkuls.mata_kuliah' },
                { data: 'ruangs.kelas', name: 'ruangs.kelas' },
                { data: 'hari', name: 'hari' },
                { data: 'jam', name: 'jam' },
                { data: 'action', name: 'action' },
            ]
        });
        datatable.draw();
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/heni/Documents/Pak Mirza/laravel2020-D-G6/resources/views/jam/index.blade.php ENDPATH**/ ?>