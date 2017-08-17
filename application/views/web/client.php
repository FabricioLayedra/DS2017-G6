<header id="semanas-header" class="container pt-70">
	<h1 class="align-center"> Platos por Categoría </h1>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<p class = 'pt-20 curso-desc'>En esta sección encontrarás todos los platillos disponibles en los comedores de ESPOL agrupados por categoria. Entre las categorias se encuentran: Almuerzos, platos tipicos, platos de mar, cocina internacional, postres y piqueos. Adicionalmente, podras acceder al detalle de un platillo dando click sobre el mismo.</p>
		</div>
	</div>
</header>
<section id="semanas-body" class="container pt-20">
	<div class="row">
		<div class="col-lg-offset-1 col-lg-10">
			<div class="row">
				<div class="col-md-9">
					<p>Busca un plato:
						<input type="text" id="dishQuery" name="dishQuery">
						<button type="button" id="dishSearch" class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span> Buscar
						</button>
					</p>
				</div>
				<div class="col-md-3 pb-20">
					<a type="button" class="btn btn-default col-md-offset-1" href = "<?php echo site_url('web/respedidos')?>">
						<span class="glyphicon glyphicon-cutlery"></span> Hacer Pedido
					</a>
				</div>
			</div>


			<?php foreach ($categorias as $index => $cat) {?>
			<div class="panel-group" id="<?php echo 'accordion'.$cat['id_category']; ?>" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="<?php echo 'heading'.$cat['id_category']; ?>">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="<?php echo '#accordion'.$cat['id_category']; ?>" href="<?php echo '#collapse'.$cat['id_category']; ?>" aria-expanded="false" aria-controls="<?php echo 'collapse'.$cat['id_category']; ?>">
								<?php echo $cat['name']; ?>
							</a>
						</h4>
					</div>
					<div id="<?php echo 'collapse'.$cat['id_category']; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="<?php echo 'heading'.$cat['id_category']; ?>">
						<div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
										<h4> Nombre </h4>
									</div>
									<div class="col-md-8">
										<h4>  Restaurante  </h4>
									</div>
								</div>
								<?php foreach($restaurantes[$cat['id_category']] as $x => $rest) {?>
								<div class="row">
									<div class="col-md-4">
										<h5><a href="<?php echo site_url('web/dish/').$rest['id_dish'] ?>"> <?php echo $rest['name']?></a></h5>
									</div>
									<div class="col-md-8">
										<h5> <?php echo Restaurant::getNameRestaurantNameById($rest['id_restaurant']);?></h5>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>
