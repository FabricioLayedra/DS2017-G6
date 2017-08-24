<header id="semanas-header" class="container pt-70">
	<h1 class="align-center">Almuerzos del día </h1>
</header>
<section class="container pt-20">
	<div class="row">
		<div class = 'col-md-offset-1 col-md-10'>

			<?php foreach($asociados as $aso) {?>
				<a type="button" class="btn btn-default" onclick="updateMenuToday(<?php echo $aso['id_restaurant']; ?>)">
					<span> <?php echo $aso['name']; ?> </span>
				</a>
			<?php } ?>
		</div>
	</div>
	<div class = "row">
		<div class="container pt-30" id = "restaurantes">
			<div class="col-md-offset-1 col-md-10">
				<div class="table-responsive align-center" >
					<table class="table table-striped table-bordered" id = "view-menu">
						<col>
						<colgroup span="2"></colgroup>
						<colgroup span="2"></colgroup>
						<tr>
							<th colspan="2" scope="colgroup" class = 'text-center'>Estudiantil</th>
							<th colspan="4" scope="colgroup" class = 'text-center'>Ejecutivo</th>
						</tr>
						<tr>
							<th scope="col" class = 'text-center'>Sopas</th>
							<th scope="col" class = 'text-center'>Segundos</th>
							<th scope="col" class = 'text-center'>Sopas</th>
							<th scope="col" class = 'text-center'>Segundos</th>
							<th scope="col" class = 'text-center'>Bebidas</th>
							<th scope="col" class = 'text-center'>Postres</th>
						</tr>
						<tr>
							<td class = 'soup-student'>
								<p></p>
							</td>
							<td class = 'sec-student'>
								<p></p>
							</td>
							<td class = 'soup-exec'>
								<p></p>
							</td>
							<td class = 'sec-exec'>
								<p></p>
							</td>
							<td class = 'drinks'>
								<p></p>
							</td>
							<td class = 'desserts'>
								<p></p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>