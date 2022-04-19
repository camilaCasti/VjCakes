<div class="d-flex justify-content-center">
<form method="post">

                <div class="form-group">
                  <label for="email">Correo electrónico:</label>
                  <div class="input-group">

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" id="email" name="ingresoEmail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <div class="input-group">

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text"></i><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="ingresoPassword">
                </div>
                </div>

                <?php 

                    $ingreso = new ControladorFormulariosAdmin();
                    $ingreso -> ctrIngresoAdmin();

                ?>

                <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>
