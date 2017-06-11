<header id="semanas-header" class="container pt-70">
	<h1 class="align-center"> Platos por Restaurante </h1>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<p class = 'pt-20 curso-desc'>En esta sección encontrarás todos los platillos disponibles en los comedores de ESPOL agrupados por restaurante. Podras acceder al detalle de un platillo dando click sobre el mismo y agregar platillos que le pertenezcan a tu restaurante.</p>
		</div>
	</div>
</header>
<section id="semanas-body" class="container pt-20">
	<div class="row">
		<div class="col-lg-offset-1 col-lg-10">

      <a type="button" class="btn btn-default" href="<?php echo site_url("web/agregarPlatillo"); ?>">
        <span> Agregar Platillo </span>
			</a>
      <hr>
      <p>Selecciona un Restaurante:
        <select id="selectedRes" name="selectedRes">
          <option disabled selected value> -- Seleccione -- </option>

          <option>Malicia</option>
          <option>Coca Cola</option>
          <option>Piscina</option>
        </select>
        <button type="button" id="restaurantSearch" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span> Buscar
        </button>
      </p>
      <hr>

      <br>

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseAlmuerzoRes" aria-expanded="true" aria-controls="collapseAlmuerzoRes">
								Almuerzos: <h6 id=almuerzoNRes>0 Platillos </h6>
							</a>
						</h4>
					</div>
					<div id="collapseAlmuerzoRes" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-5">
										<h4> <strong> Nombre </strong> </h4>
									</div>
									<div class="col-md-5">
                    <h4> <strong> Restaurante </strong> </h4>
									</div>
									<div class="col-md-1">
										<h6> <strong> Modificar </strong> </h4>
									</div>
									<div class="col-md-1">
										<h6> <strong> Eliminar </strong> </h4>
									</div>
                </div>
								<div class="row">
									<div class="col-md-5">
										<h5><a href="plates/1"> Arroz con Menestra </a></h5>
									</div>
									<div class="col-md-5">
										<h5> Coca Cola</h5>
									</div>
									<div class="col-md-1">
										<button type="button" class="btn btn-default" id="dish-edit-1">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
									</div>
									<div class="col-md-1">
										<button type="button" class="btn btn-default" id="dish-remove-1">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</div>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
