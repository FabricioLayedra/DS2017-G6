<div class = 'container pt-70'>
  <br>
  <h1 class = 'align-center'>Inicia Sesión</h1>

  <div class = 'row pt-10 pb-10'>
    <div class = 'align-center'>
      <br>
      <img src = 'http://icons.iconarchive.com/icons/graphicloads/food-drink/icons-390.jpg' class = 'align-center img-responsive', style='width: 25%; height: 25%;'>
      <br>
    </div>
  </div>

  <div class = 'row pt-10'>
    <div class = 'col-md-offset-3 col-md-6'>
      <div class = 'align-center'>
        <form action="/login" method="post" class="form-horizontal">
          <div class="form-group">
          <label for="username" class="col-sm-2 control-label" >Usuario</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name = 'username' placeholder="Usuario">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Contraseña</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name = 'password'  placeholder="Contraseña">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Entrar</button>
          </div>
        </form>
      </div>
    </div>

  </div>
