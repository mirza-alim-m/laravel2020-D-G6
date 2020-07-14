
<?php $__env->startSection('title'); ?> Detail Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-12">
    <div class="card">
    <div class="card-body">
      <div class="row">

      <div class="col-2">pdf</div>
      <div class="col-1">:</div>
      <div class="col-7"><img width="250px" src="<?php echo e(asset('storage/'.$jamkuliah->file)); ?>">dokumen.pdf<?php echo e(-- explode ('/',$jamkuliah->file)[1] -- </a></div>

      <div class="col-2">Image</div>
      <div class="col-1">:</div>
      <div class="col-7"><img width="250px" src="{{asset('storage/'.jamkuliah->image)); ?>" alt=""></div>
    <b>Dosen:</b> <br/>
    <?php echo e($jam_Kuliah->dosens->dosen_nama); ?>

    <br/>
    <b>Mata_kuliah:</b> <br/>
    <?php echo e($jam_Kuliah->dosens->matkuls->mata_kuliah); ?>

    <br/>
    <b>Ruang:</b> <br/>
    <?php echo e($jam_Kuliah->ruangs->kelas); ?>

    <br/>
    <b>Gedung:</b> <br/>
    <?php echo e($jam_Kuliah->ruangs->gedung); ?>

    <br/>
    <b>Hari:</b> <br/>
    <?php echo e($jam_Kuliah->hari); ?>

    <br/>
    <b>Jam:</b> <br/>
    <?php echo e($jam_Kuliah->jam); ?>

    <br><br>
    <b>Relasi Dosen:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>dosen_nip</td>
          <td>dosen_nama</td>
          <td>mata_kuliah_id</td>
          <td>Mata Kuliah</td>
          <td>dosen_no_telpon</td>
          <td>dosen_alamat</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo e($jam_Kuliah->dosens->dosen_nip); ?></td>
          <td><?php echo e($jam_Kuliah->dosens->dosen_nama); ?></td>
          <td><?php echo e($jam_Kuliah->dosens->mata_kuliah_id); ?></td>
          <td><?php echo e($jam_Kuliah->dosens->matkuls->mata_kuliah); ?></td>
          <td><?php echo e($jam_Kuliah->dosens->dosen_no_telpon); ?></td>
          <td><?php echo e($jam_Kuliah->dosens->dosen_alamat); ?></td>
        </tr>

      </tbody>
    </table>
    <br><br>
    <b>Relasi Ruang:</b> <br/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>id</td>
          <td>kelas</td>
          <td>gedung</td>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td><?php echo e($jam_Kuliah->ruangs->id); ?></td>
          <td><?php echo e($jam_Kuliah->ruangs->kelas); ?></td>
          <td><?php echo e($jam_Kuliah->ruangs->gedung); ?></td>
        </tr>

      </tbody>
    </table>
    <br><br>
    <a href="<?php echo e(route('jamkuliah.edit', ['jamkuliah' => $jam_Kuliah->id])); ?>" class="btn btn-success">Edit</a>
    <a href="<?php echo e(route('jamkuliah.index')); ?>" class="btn btn-danger">Back</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\smtr 6\Framework Cloud Computing\laravel2020-D-G6\resources\views/jam/show.blade.php ENDPATH**/ ?>