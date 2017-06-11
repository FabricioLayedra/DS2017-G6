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

      <p>Busca un plato:
        <input type="text" id="dishQuery" name="dishQuery">
        <button type="button" id="dishSearch" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span> Buscar
        </button>
      </p>

      <br>

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseAlmuerzo" aria-expanded="true" aria-controls="collapseAlmuerzo">
								Almuerzos: <h6 id=almuerzoN>0 Platillos </h6>
							</a>
						</h4>
					</div>
					<div id="collapseAlmuerzo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6">
										<h4> <strong> Nombre </strong> </h4>
									</div>
									<div class="col-md-6">
                    <h4> <strong> Restaurante </strong> </h4>
									</div>
                </div>
								<div class="row">
									<div class="col-md-4">
										<h5><a href="plates/1"> Arroz con Menestra </a></h5>
									</div>
									<div class="col-md-6">
										<h5> Coca Cola</h5>
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
