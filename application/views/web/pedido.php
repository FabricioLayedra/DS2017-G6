<div class="container pt-70" id = "restaurantes">
<a type="button" class="btn btn-default" href = "<?php echo site_url('web/respedidos/') ?>">
<span class="glyphicon glyphicon-triangle-left"></span> Regresar a Restaurantes</a>

<h1 class = 'align-center pt-20'>Realizar Pedido a : XXXX</h1>

<p class = 'mt-30'>Por favor, llena la informacion correspondiente para realizar tu pedido! </p>

<div class = 'container pb-100'>
<div class="row">
<div class="col-md-6">
				<h3>Detalle de Pedido</h3>
       <p> Elige tu tipo de almuerzo: </p>
        <select name="tipoAlmuerzoPedido" id="tipoAlmuerzo">
          <option disabled selected value> -- Seleccione -- </option>
          <option value="ejecutivo">Ejecutivo</option>
          <option value="estudiantil">Estudiantil</option>
        </select>

        <div class="mt-30" id="containerPedido">
          <div class='row' id='pedidoAlmuerzoEstudiantil' style='display: none;'>
            <div class='col-md-12'>
							<select name="segundos" id="segundos">
			          <option disabled selected value> -- Seleccione -- </option>
			          <option value="ejecutivo">Ejecutivo</option>
			          <option value="estudiantil">Estudiantil</option>
			        </select>
            </div>
            <div class='col-md-12'>
							<select name="sopas" id="sopas">
			          <option disabled selected value> -- Seleccione -- </option>
			          <option value="ejecutivo">Ejecutivo</option>
			          <option value="estudiantil">Estudiantil</option>
			        </select>
            </div>
						<div class='col-md-12'>
							<select name="postres" id="postres">
			          <option disabled selected value> -- Seleccione -- </option>
			          <option value="ejecutivo">Ejecutivo</option>
			          <option value="estudiantil">Estudiantil</option>
			        </select>
	          </div>
						<div class='col-md-12'>
							<select name="bebidas" id="bebidas">
			          <option disabled selected value> -- Seleccione -- </option>
			          <option value="ejecutivo">Ejecutivo</option>
			          <option value="estudiantil">Estudiantil</option>
			        </select>
	          </div>
          </div>
        </div>

        <div class='row' id='pedidoAlmuerzoEjecutivo' style='display: none;'>

          <div class='col-md-4'>
            <p id='valorPedidoPlatoPrincipal'>2.50</p>
            <input type='checkbox' name='bebida' id='valorPedidoBebida' >0.50</p>
            <input type='checkbox' name='postre' class='mb-10' id='valorPedidoPostre'>0.75</p>
            <p class='bold' id='totalPedido'> </p>
          </div>
        </div>

        <br>

        <br>
        <p> Elige la hora que recogeras tu almuerzo almuerzo: </p>
        <select name="horaAlmuerzoPedido">
          <option disabled selected value> -- Seleccione -- </option>
          <option value="1130">11:30 a 12:00</option>
          <option value="1200">12:00 a 12:30</option>
          <option value="1230">12:30 a 13:00</option>
         <option value="1300">13:00 a 13:30</option>
          <option value="1330">13:30 a 14:00</option>
          <option value="1400">14:00 a 14:30</option>
          <option value="1430">14:30 a 15:00</option>
        </select>
			</div>
      <div class="col-md-6">
       <h3>Informacion de Pago</h3>
       <select name="pagoAlmuerzoPedido" id="tipoPagoAlmuerzo">
          <option disabled selected value> -- Seleccione -- </option>
          <option value="tarjeta">Tarjeta de Credito</option>
         <option value="carne">Carne Inteligente</option>
        </select>
        <br>


        <div class="mt-30" id="containerPago" style="display:none;">
            <div id="pagoTarjetaDeCredito">

              <p> Ingrese la informacion de pago </p>

              <fieldset>
                <div class="form-group">
                  <label for="pago-numero">Numeros</label>
                  <input type="number" class="" id="pago-numero" name="pago-numero" placeholder="Numero de Tarjeta" required="true">
                </div>
                <div class="form-group">
                  <label for="pago-cvc">CVC</label>
                  <input type="number" class="" id="pago-cvc" name="pago-cvc" placeholder="Numero de Seguridad" required="true">
                </div>
                <div class="form-group">
                <label for="pago-fecha">Fecha de Expiracion</label>
                  <input type="date" class="" id="pago-date" name="pago-date" laceholder="Fecha de Expiracion" required="true">
                </div>
              </fieldset>
            </div>

        </div>

        <a type="button" class="btn btn-default mt-20" id="finalizarPedidoBtn">
          <span class="glyphicon glyphicon-ok"></span> Finalizar Pedido
        </a>

      </div>


		</div>
	</div>

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
          <button type="button" class="btn btn-default" data-dismiss="modal">olver</button>
        </div>
      </div>

      </div>
      </div>
      </div>
