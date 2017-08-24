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

  <div class = 'container'>		
    <div class="row">	
      <div class="col-md-2"></div>	
      <div class="col-md-4">		
      	<h3>Detalle</h3>		
        <p> Elige el tipo de almuerzo: </p>		
        <select name="tipoAlmuerzoPedido" id="tipoAlmuerzo">		
          <option disabled selected value> -- Seleccione -- </option>		
          <option value="ejecutivo">Ejecutivo</option>		
          <option value="estudiantil">Estudiantil</option>		
        </select>		
      		
        <div class="mt-30" id="containerPedido">		
          <div class='row' id='pedidoAlmuerzoEstudiantil' style='display: none;'>		
            <div class='col-md-4'>		
              <p class='mb-10' id='pedidoPlatoPrincipal'>Arroz Con Huevo y Sopa de Lentejas</p>		
              <p class='bold'> TOTAL: </p>		
            </div>		
            <div class='col-md-4'>		
              <p class='mb-10' id='valorPedidoPlatoPrincipal'>2.50</p>		
              <p class='bold' id='totalPedido'> </p>		
            </div>		
          </div>		
        </div>		
      		
        <div class='row' id='pedidoAlmuerzoEjecutivo' style='display: none;'>
          <div class='col-md-8'>		
            <p id='pedidoPlatoPrincipal'>Arroz Con Huevo y Sopa de Lentejas</p>		
            <p id='pedidoBebida'> Jugo de Tamarindo </p>		
            <p id='pedidoPostre' class='mb-10' > Gelatina </p>		
            <p class='bold'> TOTAL: </p>		
          </div>		
          <div class='col-md-4'>		
            <p id='valorPedidoPlatoPrincipal'>2.50</p>		
            <input type='checkbox' name='bebida' id='valorPedidoBebida' value="0.50">		
            <input type='checkbox' name='postre' class='mb-10' id='valorPedidoPostre' value = "0.75">		
            <p class='bold' id='totalPedido'> </p>		
          </div>		
        </div>		
      	
        <br>
        <br>		
              
        <p> Elige la hora en que recogerás tu pedido: </p>		
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

        <br>
        <br>

      </div>		
      <div class="col-md-6">		
        <h3>Información de Pago</h3>		
        <select name="pagoAlmuerzoPedido" id="tipoPagoAlmuerzo">		
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
        <a type="button" class="btn btn-default mt-20" id="finalizarPedidoBtn" ><span class="glyphicon glyphicon-ok"></span> Finalizar Pedido		
        </a>		

        <br>
        <br>

      </div>
      <div class="col-md-2"></div>		
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