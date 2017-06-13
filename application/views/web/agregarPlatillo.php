<div class = 'container-fluid pt-70 pb-50'>

	<a type="button" class="btn btn-default" href = "<?php echo site_url('web/assistant')?>">
		<span class="glyphicon glyphicon-triangle-left"></span> Regresar
	</a>
	<div class = 'container'>
		<h1 class="align-center">Información del Platillo</h1>
	</div>
	<div class = 'container'>

		<div class = 'row pt-20'>
			<div class = 'col-md-offset-1 col-md-10'>
			<?php echo form_open_multipart('web/newdish' , array('id' => 'frm-new')); ?>  
				<fieldset>
					<div class="form-group">
						<label for="dish-title">Nombre</label>
						<input class="form-control validarTitulox" type="text" placeholder="Nombre del platillo" id="project-title" name= 'dish-name' required="true">
					</div>
					<div class="form-group">
						<label for="dish-res">Restaurante</label>
						<select id="dish-res" class="form-control" name="dish-res">
							<?php foreach ($asociados as $aso) { ?>
							<option id = "<?php echo $aso['id_restaurant'];?>" value = "<?php echo $aso['id_restaurant'];?>"><?php echo $aso['name'];?></option>
							<?php }?>

						</select>
					</div>
					<div class="form-group">
						<label for="dish-description">Descripción</label>
						<textarea class="form-control validarDescx" id="dish-description" name = 'dish-description' rows="2" placeholder="Describe brevemente de qué consiste el platillo"  required="true"></textarea>
					</div>
					<div class="form-group">
						<label for="dish-ingredient">Ingredientes</label>
						<textarea class="form-control validarDescx" id="dish-ingredient" name="dish-ingredient" rows="2" placeholder="Indica los ingredientes que contiene tu platillo" required="true"></textarea>
					</div>
					<div class="form-group">
						<label for="dish-servido">Temperatura al servir</label>
						<select id="dish-servido" class="form-control" name="dish-servido">
							<option id= '2' value = '2'>Caliente</option>
							<option id= '1' value = '1'>Templado</option>
							<option id= '0' value = '0'>Frío</option>
						</select>
					</div>
					<div class="form-group">
						<label for="dish-cat">Categoría</label>
						<select class="form-control" id="dish-cat" name="dish-cat">
							<?php foreach ($categorias as $cat){?>
							<option id = "<?php echo $cat['id_category'];?>" value = "<?php echo $cat['id_category'];?>"><?php echo $cat['name'];?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label for="dish-type">Tipo</label>
						<select class="form-control" id="dish-type" name="dish-type">
							<?php foreach ($tipos as $cat){?>
							<option id = "<?php echo $cat['id_type'];?>" value = "<?php echo $cat['id_type'];?>"><?php echo $cat['name'];?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label for="dish-imagen">Imagen del platillo</label>
						<input type="file" id = 'dish-imagen' name="dish-imagen" size="20" />
					</div>
					<div class = 'align-center pt-20'>
						<button type="submit"  id="submitAgregarPlatillo" class="btn btn-default common-btn">Agregar Platillo</button>
					</div>
				</fieldset>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
