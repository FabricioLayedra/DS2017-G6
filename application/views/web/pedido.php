<div class="container pt-70" id = "restaurantes">
	<h1 class = 'align-center pt-20'>Realizar Pedido a : XXXX</h1>

	<p class = 'mt-30'>Por favor, llena la informacion correspondiente para realizar tu pedido! </p>

	<div class = 'container'>
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
          <option value="ejecutivo">Tarjeta de Credito</option>
          <option value="estudiantil">Carne Inteligente</option>
        </select>
        <br>


        <div class="mt-30" id="containerPago">

        </div>

        <a type="button" class="btn btn-default mt-20" href = "<?php echo site_url('web/pedido')?>">
          <span class="glyphicon glyphicon-ok"></span> Finalizar Pedido
        </a>

      </div>

        <p> Ingrese la informacion de pago </p>

		</div>
	</div>
</div>
<div  class='pt-30'> </div>
