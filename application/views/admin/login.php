
<div class="container pt-30">
		<br>
		<h1 class = 'align-center'>Administración: El Comelón</h1>

		<div class = 'row pt-10 pb-10'>
			<div class = 'align-center'>
				<br>
				<img src = 'https://png.icons8.com/admin/color/1600' class = 'align-center img-responsive', style='width: 20%; height: 20%;'>
				<br>
			</div>
		</div>
</div>

<div class="row pt-40">
	<div class= "col-md-4 col-md-offset-4">
		<?php echo form_open('admin/authenticate' , array('id' => 'frm-login')); ?>
		<fieldset>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?php echo form_input(array(
					'name' => 'ra_username',
					'value' => '',
					'required' => 'required',
					'placeholder' => 'Usuario',
					'class' => 'form-control input-sgl',
					));?>
			</div>
			<div class="clearfix"></div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<?php echo form_password(array(
						'name' => 'ra_password',
						'value' => '',
						'required' => 'required',
						'placeholder' => 'contraseña',
						'class' => 'form-control input-sgl',
						));?>
			</div>
				<div class="clearfix"></div><br>
				<div class="clearfix"></div><br>
				<div class="input-group pull-right">
					<button type="submit" class="btn btn-cdr btn-sgl">Iniciar sesión</button>
				</div>
			</fieldset>
			<?php echo form_close(); ?>
		</div>
	</div>

</div>
