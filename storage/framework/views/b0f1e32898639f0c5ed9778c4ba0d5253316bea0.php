

<?php $__env->startSection('contenido'); ?>
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="partidos/create" class="btn btn-success">CREAR</a>


<table class="table table-info table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Paises</th>
      <th scope="col">Goles</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    <?php $__currentLoopData = $partidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($partido->id); ?></td>
        <td><?php echo e($partido->codigo); ?></td>
        <td><?php echo e($partido->pais); ?></td>
        <td><?php echo e($partido->goles); ?></td>
        <td><?php echo e($partido->fecha); ?></td>
        <td><?php echo e($partido->estado); ?></td>
        <td>
         <form action="<?php echo e(route('partidos.destroy',$partido->id)); ?>" method="POST">
          <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=qatar&table=partidos&pos=0" class="btn btn-primary">Editar</a>         
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>          
        </td>        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
  <a href="/home" class="btn btn-primary">Volver</a>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qatar\resources\views/partido/index.blade.php ENDPATH**/ ?>