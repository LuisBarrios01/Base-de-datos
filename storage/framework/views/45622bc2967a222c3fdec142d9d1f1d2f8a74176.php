

<?php $__env->startSection('contenido'); ?>
<h2>EDITAR REGISTROS</h2>

<form action="/partidos/<?php echo e($partido->id); ?>" method="POST">
    <?php echo csrf_field(); ?>    
    <?php echo method_field('PUT'); ?>
  <div class="mb-3">
    <label for="" class="form-label">Pais</label>
    <input id="pais" name="pais" type="text" class="form-control" value="<?php echo e($partido->pais); ?>">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Goles</label>
    <input id="goles" name="goles" type="text" class="form-control" value="<?php echo e($partido->goles); ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="text" class="form-control" value="<?php echo e($partido->fecha); ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" value="<?php echo e($partido->estado); ?>">
  </div>
  <a href="/partidos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qatar\resources\views/partido/edit.blade.php ENDPATH**/ ?>