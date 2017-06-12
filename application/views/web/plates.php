<div class="container pt-70 pb-50">
	<button type="button" class="btn btn-default" onclick="window.history.back();">
		<span class="glyphicon glyphicon-triangle-left"></span> Regresar
	</button>
	<a type="button" class="btn btn-default" href = "<?php echo site_url('web/editDish/').$platillo->getId() ?>">
		<span class="glyphicon glyphicon-pencil"></span> Editar
	</a>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class = 'align-center  bold' id='foodName'>
					 	<?php echo $platillo->getName();?>
					</h3>
				</div>
				<div class="panel-body">
					<div class = 'row'>
						<div class="col-md-4 mt-20">
							<img alt="User Pic" src="<?php echo $platillo->getImg(); ?>" class="img-responsive align-center">
						</div>
						<div class=" col-md-8">
							<table class="table table-user-information mt-20" style='word-wrap: break-word;'>
								<tbody>
									<tr>
										<td class = 'pull-right bold' >Restaurante </td>
										<td id='foodRestaurant' > <?php echo $platillo->getRestaurant()->getName(); ?></td>
									</tr>
									<tr>
										<td class = 'pull-right bold'>Categoría</td>
										<td id='foodCategory'><?php echo $platillo->getCategory()->getName(); ?></td>
									</tr>
									<tr>
										<td class = 'pull-right bold'>Ingredientes</td>
										<td id='foodIngredients'><?php echo $platillo->getIngredient(); ?></td>
									</tr>
									<tr>
										<td class = 'pull-right bold'>Descripción</td>
										<td id='foodDescription'><?php echo $platillo->getDescripcion();?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
