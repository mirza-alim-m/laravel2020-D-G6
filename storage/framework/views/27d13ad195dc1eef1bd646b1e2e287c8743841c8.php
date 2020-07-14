
<?php $__env->startSection('title'); ?> Detail Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-12">
    <div class="card">
    <div class="card-body">
      <div class="col-2">Pdf</div>
      <div class="col-1">:</div>
      <div class="col-7"><a href="<?php echo e(asset('storage/'. $mk->pdf)); ?>">dokumen.pdf{</a></div> </div> 

      <div class="col-2">Image</div>
      <div class="col-1">:</div>
      <div class="col-7"><img width="250px" src="<?php echo e(asset('storage/'. $mk->image)); ?>" alt=""></div>
    </div>

    <b>Mata_kuliah:</b> <br/>
    <?php echo e($mk->mata_kuliah); ?>

    <br><br>

    <b>Relasi Dosen:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>NIP</td>
          <td>Dosen</td>
          <td>mata_kuliah_id</td>
          <td>No Telpon</td>
          <td>Alamat</td>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $mk->dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($d->dosen_nip); ?></td>
          <td><?php echo e($d->dosen_nama); ?></td>
          <td><?php echo e($d->mata_kuliah_id); ?></td>
          <td><?php echo e($d->dosen_no_telpon); ?></td>
          <td><?php echo e($d->dosen_alamat); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <br><br>
    <a href="<?php echo e(route('mata_kuliah.edit', ['mata_kuliah' => $mk->id])); ?>" class="btn btn-success">Edit</a>
    <a href="<?php echo e(route('mata_kuliah.index')); ?>" class="btn btn-danger">Back</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\smtr 6\Framework Cloud Computing\laravel2020-D-G6\resources\views/mk/show.blade.php ENDPATH**/ ?>