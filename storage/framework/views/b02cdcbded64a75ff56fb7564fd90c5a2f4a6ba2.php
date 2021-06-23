

<?php $__env->startSection('contenido'); ?>
<h2>CREAR REGISTROS</h2>

<form action="/partidos" method="POST">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Paises</label>
    <input id="pais" name="pais" type="text" class="form-control" tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Goles</label>
    <input id="goles" name="goles" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" tabindex="4">
  </div>
  <a href="/partidos" class="btn btn-primary" tabindex="6">Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="5">Guardar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qatar\resources\views/partido/create.blade.php ENDPATH**/ ?>