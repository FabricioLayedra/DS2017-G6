<div class = 'container-fluid pt-70 pb-50'>

  <button type="button" class="btn btn-default" onclick="window.history.back();">
    <span class="glyphicon glyphicon-triangle-left"></span> Regresar
  </button>
	<div class = 'container'>
		<h1 class="align-center">Información del Platillo</h1>
	</div>
	<div class = 'container'>

		<div class = 'row pt-20'>
			<div class = 'col-md-offset-1 col-md-10'>
				<form id = 'infoPlatillo' method='POST' action="<?php echo site_url("web/assistant"); ?>">
					<div class="form-group">
						<label for="dish-title">Nombre</label>
						<input class="form-control validarTitulox" type="text" placeholder="Nombre del platillo" id="project-title">
					</div>
          <div class="form-group">
						<label for="project-description">Categoria</label>
						<textarea class="form-control" id="dish-description" rows="2"></textarea>
					</div>

					<div class="form-group">
						<label for="dish-description">Descripción</label>
						<textarea class="form-control validarDescx" id="dish-description" rows="2" placeholder="Describe brevemente de qué consiste el platillo"></textarea>
					</div>

					<div class="form-group">
						<label for="dish-servido">Servido</label>
            <select id="dish-servido" name="dish-servido">
              <option>Frio</option>
              <option>Caliente</option>
            </select>
					</div>

          <div class="form-group">
						<label for="dish-res">Restaurante</label>
            <select id="dish-res" name="dish-res">
              <option>Coca Cola</option>
              <option>Malicia</option>
              <option>Piscina</option>
            </select>
					</div>

					<div class = 'align-center pt-20'>
						<button type="submit"  id="submitAgregarPlatillo" class="btn btn-default common-btn">Agregar Platillo</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		CKEDITOR.replace( 'editor1' );
	</script>
</div>
