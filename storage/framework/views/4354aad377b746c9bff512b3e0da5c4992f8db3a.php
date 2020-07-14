<?php $__env->startSection('title'); ?> Detail Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-8">
    <div class="card">
    <div class="card-body">
    <div class="row">
<div class="col-2">Pdf</div>
    <div class="col-1">:</div>
    <div class="col-7"><a href="<?php echo e(asset('storage/'. $ruang->pdf)); ?>"><?php echo e(explode('/',$ruang->pdf)[0]); ?></a></div>
    </div>

    <div class="col-2">Image</div>
    <div class="col-1">:</div>
    <div class="col-7"><img width="250px" src="<?php echo e(asset('storage/'. $ruang->image)); ?>" alt=""></div>
    </div>
`
    <b>Kelas:</b> <br/>
    <?php echo e($ruang->kelas); ?>

    <br><br>

    <b>Gedung:</b><br>
    <?php echo e($ruang->gedung); ?>

    <br/><br/>
    <b>Relasi Jam Kuliah:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>id</td>
          <td>ID Dosen</td>
          <td>NIP</td>
          <td>Dosen</td>
          <td>ID Ruang</td>
          <td>Hari</td>
          <td>Jam</td>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $ruang->jamkuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($j->id); ?></td>
          <td><?php echo e($j->dosen_id); ?></td>
          <td><?php echo e($j->dosens->dosen_nip); ?></td>
          <td><?php echo e($j->dosens->dosen_nama); ?></td>
          <td><?php echo e($j->ruang_id); ?></td>
          <td><?php echo e($j->hari); ?></td>
          <td><?php echo e($j->jam); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <br><br>
    <a href="<?php echo e(route('ruang.edit', ['ruang' => $ruang->id])); ?>" class="btn btn-succes">Edit</a>
    <a href="<?php echo e(route('ruang.index')); ?>" class="btn btn-danger">Back</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/heni/Documents/Pak Mirza/laravel2020-D-G6/resources/views/ruang/show.blade.php ENDPATH**/ ?>