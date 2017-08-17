<div class="container pt-70" id = "restaurantes">

	<a type="button" class="btn btn-default" href = "<?php echo site_url('web/user/') ?>">
		<span class="glyphicon glyphicon-triangle-left"></span> Regresar
	</a>
	<h1 class = 'align-center pt-20'>Restaurantes para hacer pedidos</h1>

	<p class = 'mt-30'>Selecciona el restaurante al cual quieres ver y pedir almuerzos </p>

	<div class = 'container'>


		<div class="row">
		<?php foreach($restaurantes as $res){ ?>
			<div class="col-md-6">
				<h3><?php echo $res['name'];?></h3>
				<p><?php echo $res['phone'];?></p>
				<p><?php echo $res['address'];?></p>
				<p>Propietario: <?php echo $res['owner'];?></p>
        <a type="button" class="btn btn-default col-md-offset-1" href = "<?php echo site_url('web/pedido')?>">
          <span class="glyphicon glyphicon-cutlery"></span> Hacer Pedido
        </a>
			</div>
		<?php } ?>

		</div>
	</div>
</div>
<div  class='pt-30'> </div>
