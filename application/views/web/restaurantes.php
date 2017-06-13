<div class="container pt-70" id = "restaurantes">
	<h1 class = 'align-center pt-20'>Restaurantes dentro de ESPOL</h1>

	<p class = 'mt-30'>En esta sección encontrarás los lugares de comida que existen dentro de ESPOL. ¡Conócelos! </p>

	<div class = 'container'>
		<div class="row">
		<?php foreach($restaurantes as $res){ ?>
			<div class="col-md-6">
				<h3><?php echo $res['name'];?></h3>
				<p><?php echo $res['phone'];?></p>
				<p><?php echo $res['address'];?></p>
				<p>Propietario: <?php echo $res['owner'];?></p>
			</div>
		<?php } ?>
		</div>
	</div>	
</div>

