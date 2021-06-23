
<?php $__env->startSection('content'); ?>
<h1 class="text-primary">Posiciones</h1>
 
<table class="table table-bordered" id="tableVentas">
  <thead>
    <tr>
        <th class="text-center" style="background-color: #76D7C4;">Codigo</th>
        <th class="text-center" style="background-color: #76D7C4;">Pais</th>
        <th class="text-center" style="background-color: #76D7C4;">Puntos</th>
        <th class="text-center" style="background-color: #76D7C4;">PJ</th>
        <th class="text-center" style="background-color: #76D7C4;">G</th>
        <th class="text-center" style="background-color: #76D7C4;">E</th>
        <th class="text-center" style="background-color: #76D7C4;">P</th>
        <th class="text-center" style="background-color: #76D7C4;">DG</th>
        <th class="text-center" style="background-color: #76D7C4;">Resultado</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $posiciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posicion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td class="text-center" style="background-color: #CCD1D1;"><?php echo e($posicion->idposicion); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->pais); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->puntos); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->PJ); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->G); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->E); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->P); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->DG); ?></td>
            <td class="text-center"  style="background-color: #CCD1D1;"><?php echo e($posicion->Resultado); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<img src="https://cdn.forbes.com.mx/2018/04/Rusia-2018-Portada.jpg" width="80%" height="20%" style="padding-left: 200px;">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qatar\resources\views/posiciones/index.blade.php ENDPATH**/ ?>