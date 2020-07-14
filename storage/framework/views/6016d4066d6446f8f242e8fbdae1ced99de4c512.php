
<?php $__env->startSection('title'); ?> Edit Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-8">
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <form class="bg-white shadow-sm p-3" action="<?php echo e(route('jamkuliah.update', ['jamkuliah' => $jam_Kuliah->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mt-2">
        <div class="col-2">pdf</div><input class="form-control col-6" type="file" name="file" required="required">
        </div>

        <div class="row mt-2">
        <div class="col-2">Image</div><input class="form-control col-6" type="file" name="image" required="required">
        </div>
        <?php echo method_field('PATCH'); ?>
        <label for="dosen_id">Dosen</label>
        <select class="form-control" name="dosen_id" required>
          <option value="">Pilih Dosen</option>
          <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($d->id); ?>" <?php if($jam_Kuliah->dosen_id == $d->id): ?> selected <?php endif; ?> ><?php echo e($d->dosen_nama); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
        <label for="ruang_id">Ruangan</label>
        <select class="form-control" name="ruang_id" required>
          <option value="">Pilih Ruangan</option>
          <?php $__currentLoopData = $ruang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($r->id); ?>" <?php if($jam_Kuliah->ruang_id == $r->id): ?> selected <?php endif; ?> ><?php echo e($r->kelas); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
        <label for="hari">Hari</label>
        <select class="form-control" name="hari" required>
          <option value="">Pilih Hari</option>
          <option value="Senin" <?php if($jam_Kuliah->hari == 'Senin'): ?> selected <?php endif; ?>>Senin</option>
          <option value="Selasa" <?php if($jam_Kuliah->hari == 'Selasa'): ?> selected <?php endif; ?>>Selasa</option>
          <option value="Rabu" <?php if($jam_Kuliah->hari == 'Rabu'): ?> selected <?php endif; ?>>Rabu</option>
          <option value="Kamis" <?php if($jam_Kuliah->hari == 'Kamis'): ?> selected <?php endif; ?>>Kamis</option>
          <option value="Jumat" <?php if($jam_Kuliah->hari == 'Jumat'): ?> selected <?php endif; ?>>Jumat</option>
          <option value="Sabtu" <?php if($jam_Kuliah->hari == 'Sabtu'): ?> selected <?php endif; ?>>Sabtu</option>
          <option value="Minggu" <?php if($jam_Kuliah->hari == 'Minggu'): ?> selected <?php endif; ?>>Minggu</option>
        </select>
        <br>
        <label for="jam">Jam</label>
        <input class="form-control" type="time" placeholder="00:00" name="jam" value="<?php echo e($jam_Kuliah->jam); ?>" required>
        <br>
        <button class="btn btn-primary" type="submit" value="Save">Simpan</button>
        <a href="<?php echo e(route('jamkuliah.index')); ?>" class="btn btn-danger">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel2020-D-G6\resources\views/jam/edit.blade.php ENDPATH**/ ?>