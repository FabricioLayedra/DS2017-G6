<header id="semanas-header" class="container pt-80">
  <h1 class="align-center"> Almuerzos del día </h1>
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <p class = 'pt-30 curso-desc'>En esta sección encontrarás todos los almuerzos disponibles en los comedores de ESPOL agrupados por restaurante. Podrás hacer tu pedido en línea, si el servicio está disponible.</p>
    </div>
  </div>
</header>

<div class="container pt-30" id = "restaurantes">
  <hr class="featurette-divider">
  <br/>
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="table-responsive align-center" >
          <table class="table table-striped table-bordered" id="tablaAlmuerzos">
            <col>
            <colgroup span="2"></colgroup>
            <colgroup span="2"></colgroup>
            <tr style = "background-color: #FF6A6A;">
              <td rowspan="2" >Restaurante</td>
              <th colspan="2" scope="colgroup">Estudiantil</th>
              <th colspan="4" scope="colgroup">Ejecutivo</th>
            </tr>
            <tr style = "background-color: #FF6A6A;">
              <th scope="col">Sopas</th>
              <th scope="col">Segundos</th>
              <th scope="col">Sopas</th>
              <th scope="col">Segundos</th>
              <th scope="col">Bebidas</th>
              <th scope="col">Postres</th>
            </tr>
            <tr>
              <th scope="row"><p>Malicia</p>
        <a type="button" class="btn btn-default mt-20" href="<?php echo site_url("web/pedido"); ?>" id="todoPedidoBtn">Hacer Pedido</th>
              <td>
                <p>Sopa Pobre 1</p>
                <p>Sopa Pobre 2</p>
                <p>Sopa Pobre 3</p>
                <p>Sopa Pobre 4</p>
              </td>
              <td>
                <p>Segundo Pobre 1</p>
                <p>Segundo Pobre 2</p>
              </td>
              <td>
                <p>Sopa Buena 1</p>
                <p>Sopa Buena 2</p>
              </td>
              <td><p>Segundo Bueno 1</p></td>
              <td><p>Bebida 1</p></td>
              <td><p>Postre 1</p></td>
            </tr>
          </table>
          </div>
        </div>
      </div>
    <div class="col-md-1"></div>
</div>
