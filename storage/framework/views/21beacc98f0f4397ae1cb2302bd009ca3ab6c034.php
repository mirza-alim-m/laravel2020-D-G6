
<?php $__env->startSection("title"); ?> Tambah Data Dosen <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="col-md-8">
    <?php if(session('status')): ?>
<div class="alert alert-success">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
	
	<h1>Data Dosen</h1>

	
	<br/>
	<br/>

	<form enctype="multipart/form-data" action="/dosens" method="post" class="bg-white shadow-sm p-3">
		<?php echo csrf_field(); ?>
		<div class="row mt-2">
		<div class="col-2">Pdf</div><input class="form-control col-6" type="file" name="file">
		</div>
		<div class="row mt-2">
		<div class="col-2">Image</div><input class="form-control col-6" type="file" name="image">
		</div>
		<div class="row mt-2">
		<div class="col-2">Nama</div><input class="form-control col-6" type="text" name="dosen_nama" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">NIPY</div>
		<input class="form-control col-6" type="text" name="dosen_nip" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Mata Kuliah</div>
		<select class="form-control col-6" name="mata_kuliah_id" required="required">
		<option value="">Pilih Mata Kuliah</option>
		<?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($mk->id); ?>"><?php echo e($mk->mata_kuliah); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
		</div>
		<div class="row mt-2">
		<div class="col-2">No. Telpon</div>
		<input class="form-control col-6" type="number" name="dosen_no_telpon" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-2">Alamat</div>
		<textarea class="form-control col-6" name="dosen_alamat" required="required"></textarea> <br/><br>
		</div>
		<div class="row mt-2">
		<div class="col-6"></div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a class="ml-3 btn btn-primary" href="/dosens"> Kembali</a>
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel2020-D-G6\resources\views/dosen/add.blade.php ENDPATH**/ ?>