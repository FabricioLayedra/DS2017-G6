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
									<div class="col-md-6">
										<h4> <strong> Nombre </strong> </h4>
									</div>
									<div class="col-md-6">
                    <h4> <strong> Restaurante </strong> </h4>
									</div>
                </div>
								<hr>
							</div>
						</div>
					</div>
				</div>


      	<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a 	 role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTipicosRes" aria-expanded="false" aria-controls="collapseTipicosRes">
                Platos Tipicos <h6 id=tipicosNRes> 0 Platillos </h6>
							</a></h4>

						</div>
						<div id="collapseTipicosRes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
									<hr>
								</div>
							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseMarRes" aria-expanded="false" aria-controls="collapseMarRes">
                  Platos de Mar: <h6 id=marNRes> 0 Platillos </h6>
                </a></h4>
						</div>
						<div id="collapseMarRes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
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
									<hr>
								</div>
							</div>
						</div>
					</div>



					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseInternacionalRes" aria-expanded="false" aria-controls="collapseInternacionalRes">
                  Cocina Internacional <h6 id=internacionalNRes> 0 Platillos </h6>
                </a></h4>
						</div>
						<div id="collapseInternacionalRes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
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
									<hr>
								</div>
							</div>
						</div>
					</div>



					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePostresRes" aria-expanded="false" aria-controls="collapsePostresRes">
                  Postres <h6 id=postresNRes> 0 Platillos </h6>
                </a></h4>
						</div>
						<div id="collapsePostresRes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
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
									<hr>
								</div>
							</div>
						</div>
					</div>



					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSix">
								<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePiqueosRes" aria-expanded="false" aria-controls="collapsePiqueosRes">
                  Piqueos <h6 id=piqueosNRes> 0 Platillos </h6>
                </a></h4>
						</div>
						<div id="collapsePiqueosRes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
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
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
