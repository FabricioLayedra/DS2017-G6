<div class="container pt-70" id = "restaurantes">   
	<div class = 'container'>   
		<div class="row">  
			<div class="col-md-2">

			</div> 
			<div class="col-md-8">

				<h1 class = 'subtitle align-center pt-20'>
					Reserva de Almuerzo</h1> 
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
		<hr class="featurette-divider">

		<p class = 'align-center mt-30'>Por favor, llena la información correspondiente para realizar tu pedido</p>

		<hr class="featurette-divider"> 

		<?php echo form_open_multipart('web/newOrder' , array('id' => 'frm-new')); ?>
		<div class = 'container'>		
			<div class="row">	
				<div class="col-md-2"></div>	
				<div class="col-md-4">		
					<h3>Detalle</h3>		
					<p> Elige el tipo de almuerzo: </p>		
					<select name="tipoAlmuerzoPedido" id="tipoAlmuerzoPedido">		
						<option disabled selected value> -- Seleccione -- </option>		
						<option value="ejecutivo">Ejecutivo</option>		
						<option value="estudiantil">Estudiantil</option>		
					</select>		

					<div class="mt-30" id="containerPedido">		
						<div class='row' id='pedidoAlmuerzoEstudiantil' style='display: none;'>		
							<div class='col-xs-8'>		
								<select name="sopaEstudiantil" id="sopaEstudiantil" required>		
									<?php foreach ($estudiantil[0] as $value) { ?>
										<option value="<?php echo $value['id_plate'];?>"><?php echo $value['name'];?></option>
									<?php } ?>	
								</select>	
								<select name="sopaEstudiantil" id="segundoEstudiantil" required>		
									<?php foreach ($estudiantil[1] as $value) { ?>
										<option value="<?php echo $value['id_plate'];?>"><?php echo $value['name'];?></option>
									<?php } ?>	
								</select>			
							</div>		
							<div class='col-xs-4'>		
								<p class='mb-10' id='valorPedidoPlatoPrincipal'>2.50</p>		

							</div>		
						</div>
						<div class  = 'row'>
							Total: <p class='bold' id='totalPedido'> </p>	
						</div>		
					</div>		

					<div class='row' id='pedidoAlmuerzoEjecutivo' style='display: none;'>
						<div class='col-xs-8'>		
							<select name="sopaEjecutivo" id="sopaEjecutivo" required>		
								<?php foreach ($ejecutivo[0] as $value) { ?>
									<option value="<?php echo $value['id_plate'];?>"><?php echo $value['name'];?></option>
								<?php } ?>	
							</select>	
							<select name="segundoEjecutivo" id="segundoEjecutivo" required>		
								<?php foreach ($ejecutivo[1] as $value) { ?>
									<option value="<?php echo $value['id_plate'];?>"><?php echo $value['name'];?></option>
								<?php } ?>	
							</select>	
							<select name="bebida" id="bebida" >	
								<option value = "0" selected > Ninguno </option>		
								<?php foreach ($ejecutivo[2] as $value) { ?>
									<option value="<?php echo $value['id_plate'];?>"><?php echo $value['name'];?></option>
								<?php } ?>	
							</select>	
							<select value = "0" name="postre" id="postre" >		
								<option value = "0" selected > Ninguno </option>	
								<?php foreach ($ejecutivo[3] as $value) { ?>
									<option value="<?php echo $value['id_plate'];?>"><?php echo $value['name'];?></option>
								<?php } ?>	
							</select>	
						</div>		
						<div class='col-xs-4'>		
							<p id='valorPedidoPlatoPrincipal'>2.50</p>			
							<p class='bold' id='totalPedido'> </p>		
						</div>		
					</div>		

					<br>
					<br>		

					<p> Elige la hora en que recogerás tu pedido: </p>		
					<select name="horaAlmuerzoPedido" id = "horaAlmuerzoPedido">		
						<option disabled selected value> -- Seleccione -- </option>		
						<option value="11:30">11:30 a 12:00</option>		
						<option value="12:00">12:00 a 12:30</option>		
						<option value="12:30">12:30 a 13:00</option>		
						<option value="13:00">13:00 a 13:30</option>		
						<option value="13:30">13:30 a 14:00</option>		
						<option value="14:00">14:00 a 14:30</option>		
						<option value="14:30">14:30 a 15:00</option>		
					</select>	

					<br>
					<br>

				</div>		
				<div class="col-md-6">		
					<h3>Información de Pago</h3>		
					<select name="tipoPagoAlmuerzo" id="tipoPagoAlmuerzo">		
						<option disabled selected value> -- Seleccione -- </option>		
						<option value="tarjeta">Tarjeta de Crédito</option>		
						<option value="carne">Carnet Inteligente</option>		
					</select>		
					<br>		


					<div class="mt-30" id="containerPago" style="display:none;">		
						<div id="pagoTarjetaDeCredito">		
							<br/>
							<p> Ingrese la información de pago: </p>		

							<fieldset>		
								<div class="form-group">		
									<label for="pago-numero">Número </label>		
									<input type="number" class="" id="pago-numero" name="pago-numero" placeholder="Número de Tarjeta" required="true" >		
								</div>		
								<div class="form-group">		
									<label for="pago-cvc">CVC </label>		
									<input type="number" class="" id="pago-cvc" name="pago-cvc" placeholder="Número de Seguridad" required="true">		
								</div>		
								<div class="form-group">		
									<label for="pago-fecha">Fecha de Expiración </label>		
									<input type="date" class="" id="pago-date" name="pago-date" placeholder="Fecha de Expiración" required="true">		
								</div>		
							</fieldset>		
						</div>		
					</div>	

					<a type="button" class="btn btn-default mt-20" href = "<?php echo site_url('web/almuerzos') ?>"> <span class="glyphicon glyphicon-triangle-left"></span>Volver </a>	
					<button type="submit" class="btn btn-default " id="finalizarPedidoBtn">
						<span class="glyphicon glyphicon-ok"></span> Finalizar Pedido
					</button>
					<br>
					<br>

				</div>
				<div class="col-md-2"></div>		
			</div>		
		</div>		

		<?php echo form_close(); ?>
		<!-- Trigger the modal with a button -->		
		<!-- Modal -->		
		<div id="malModal" class="modal fade" role="dialog">		
			<div class="modal-dialog">		

				<!-- Modal content-->		
				<div class="modal-content">		
					<div class="modal-header">		
						<button type="button" class="close" data-dismiss="modal">&times;</button>		
						<h4 class="modal-title">Pago Inválido</h4>		
					</div>		
					<div class="modal-body">		
						<p>Por favor, intente otro método de pago.</p>		
					</div>		
					<div class="modal-footer">		
						<button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>		
					</div>		
				</div>		
			</div>
		</div>
		<div id="buenModal" class="modal fade" role="dialog">    
			<div class="modal-dialog">    

				<!-- Modal content-->   
				<div class="modal-content">   
					<div class="modal-header">    
						<button type="button" class="close" data-dismiss="modal">&times;</button>   
						<h4 class="modal-title">Pago Válido</h4>    
					</div>    
					<div class="modal-body">    
						<p>Su solicitud ha sido procesada, por favor retire su pedido en la hora escogida.</p>    
					</div>    
					<div class="modal-footer">    
						<button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>    
					</div>    
				</div>    
			</div>
		</div>
	</div>
