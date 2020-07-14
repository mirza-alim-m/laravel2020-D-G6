
<?php $__env->startSection("title"); ?> Ubah Dosen <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<?php if(session('status')): ?>
<div class="alert alert-success">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>
	
	<h1>Ubah Password</h1>

	<a href="<?php echo e(url()->previous()); ?>"> Kembali</a>
	
	<br/>
	<br/>

	<form enctype="multipart/form-data" action="<?php echo e(route('ubah.word')); ?>" method="post" class="form m-3">
		<?php echo csrf_field(); ?>
		<div class="row mt-2">
		<div class="col-2">Password Lama</div>
		<input class="form-control col-6" type="password" name="old_password" required="required" value="<?php echo e($user->dosen_nama); ?>">
		</div>
		<div class="row mt-2">
		<div class="col-2">Password Baru</div>
		<input class="form-control col-6" type="password" name="new_password" required="required" value="<?php echo e($user->dosen_nama); ?>">
		</div>
		<div class="row mt-2">
		<div class="col-2">Konfirmasi Password</div>
		<input class="form-control col-6" type="password" name="confirm_password" required="required">
		</div>
		<div class="row mt-2">
		<div class="col-6"></div>
		<?php echo e(Form::hidden('url',URL::previous())); ?>

		<button type="submit" class="btn btn-primary">Simpan</button>
		<a class="ml-3 btn btn-primary" href="/dosens"> Kembali</a>
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel2020-D-G6\resources\views/ubah.blade.php ENDPATH**/ ?>