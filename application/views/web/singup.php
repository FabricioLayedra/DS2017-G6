<div class = 'container pt-70'>
	<br>
	<h1 class = 'align-center'>Crea tu cuenta en El Comelón</h1>

	<div class = 'row pt-10 pb-10'>
	</div>

	<div class = 'row pt-10'>
		<div class = 'col-md-offset-3 col-md-6'>
			<div class = 'align-center'>
			<?php echo form_open('web/newUser' , array('id' => 'frm-login')); ?>
				<fieldset>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
						<?php echo form_input(array(
							'name' => 'ra_name',
							'value' => '',
							'required' => 'required',
							'placeholder' => 'Nombre',
							'class' => 'form-control input-sgl',
							'minlength' =>'4'
							));?>
						</div>

						<div class="clearfix"></div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
							<?php echo form_input(array(
								'name' => 'ra_lastname',
								'value' => '',
								'required' => 'required',
								'placeholder' => 'Apellido',
								'class' => 'form-control input-sgl',
								'minlength' =>'4'
								));?>
							</div>

						<div class="clearfix"></div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<?php echo form_input(array(
								'name' => 'ra_mail',
								'value' => '',
								'required' => 'required',
								'placeholder' => 'Correo',
								'type' =>'email',
								'class' => 'form-control input-sgl',
								'minlength' =>'8'
								));?>
							</div>

						<div class="clearfix"></div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<?php echo form_input(array(
							'name' => 'ra_username',
							'value' => '',
							'required' => 'required',
							'placeholder' => 'Usuario',
							'class' => 'form-control input-sgl',
							'minlength' =>'4'
							));?>
						</div>

						<div class="clearfix"></div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<?php echo form_password(array(
								'name' => 'ra_password',
								'value' => '',
								'required' => 'required',
								'placeholder' => 'Contraseña',
								'class' => 'form-control input-sgl',
								'minlength' =>'4'
								));?>
						</div>

						<div class="clearfix"></div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-alert"></i></span>
							<?php echo form_password(array(
								'name' => 'ra_val_password',
								'value' => '',
								'required' => 'required',
								'placeholder' => 'Validar Contraseña',
								'class' => 'form-control input-sgl',
								'minlength' =>'4'
								));?>
						</div>

							<div class="clearfix"></div><br>
							<div class="clearfix"></div><br>
							<div class="input-group pull-right">
								<button type="submit" class="btn btn-cdr btn-sgl">Crear Cuenta</button>
							</div>
						</fieldset>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
<div  class='pt-30'> </div>
