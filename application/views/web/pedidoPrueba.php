<div class="container pt-70" id = "restaurantes">
<div class='row' id='pedidoAlmuerzoEjecutivo' style='display: none;'>
          <div class='col-md-8'>
            <p id='pedidoPlatoPrincipal'>Arroz Con Huevo y Sopa de Lentejas</p>
            <p id='pedidoBebida'> Jugo de Tamarindo </p>
            <p id='pedidoPostre' class='mb-10' > Gelatina </p>
            <p class='bold'> TOTAL: </p>
          </div>
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
                  <input type="date" class="" id="pago-date" name="pago-date" placeholder="Fecha de Expiracion" required="true">
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
        </div>
      </div>

    </div>
  </div>


  <!-- Modal -->
  <div id="buenModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Pago Exitoso</h4>
        </div>
        <div class="modal-body">
          <p class = 'mt-30' style ="text-align: center;">Su pedido ha sido realizado con éxito. </p>
        <p class = 'mt-60' style ="color:#FF6A6A;font-size:26px;text-align: center;"> ORDEN No. 25</p>
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-default" href="<?php echo site_url('web/user')?>">
            <span class="glyphicon glyphicon-ok"></span> Listo!
          </a>
        </div>
      </div>

    </div>
  </div>