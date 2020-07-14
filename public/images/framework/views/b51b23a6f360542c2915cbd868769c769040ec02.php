
<?php $__env->startSection('title'); ?> Detail Ruang <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-8">
    <div class="card">
        <div class="card-body">
        <div class="row">
        <div class="col-2">Pdf</div>
            <div class="col-1">:</div>
            <div class="col-7"><a href="<?php echo e(asset('storage/' . $dosen->pdf)); ?>">dokumen.pdf</a></div>
            </div>
            <div class="col-2">Image</div>
            <div class="col-1">:</div>
            <div class="col-7"><img width="250px"  src="<?php echo e(asset('storage/' . $dosen->image )); ?>" alt=""></div>
            </div>
            <div class="row">
            <div class="col-2">Nama</div>
            <div class="col-1">:</div>
            <div class="col-7"><?php echo e($dosen->dosen_nama); ?></div>
            </div>
            <div class="row">
            <div class="col-2">NIPY</div>
            <div class="col-1">:</div>
            <div class="col-7"><?php echo e($dosen->dosen_nip); ?></div>
            </div>
            <div class="row">
            <div class="col-2">Mata Kuliah</div>
            <div class="col-1">:</div>
            <div class="col-7"><?php echo e($dosen->matkuls->mata_kuliah); ?></div>
            </div>
            <div class="row">
            <div class="col-2">No. Telpon</div>
            <div class="col-1">:</div>
            <div class="col-7"><?php echo e($dosen->dosen_no_telpon); ?></div>
            </div>
            <div class="row">
            <div class="col-2">Alamat</div>
            <div class="col-1">:</div>
            <div class="col-7"><?php echo e($dosen->dosen_alamat); ?></div>
            </div>
            <div class="row">
            <div class="col-2">Relasi</div>
            <div class="col-1">:</div>
            <div class="col-7"><?php echo e($dosen->matkuls->mata_kuliah); ?></div>
            </div>
            <div class="row m-3">
            <a href="/dosens" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\smtr 6\Framework Cloud Computing\laravel2020-D-G6\resources\views/dosen/show.blade.php ENDPATH**/ ?>