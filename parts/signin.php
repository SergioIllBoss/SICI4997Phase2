<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['numest'] ?? '';
?>
<main>
      <br>
          <h4><i>¡Dandole a tus libros, una segunda oportunidad</i></h4>
          <br>
      <p>Desde esta página podrás acceder a tu cuenta y poder disfrutar de los beneficios
          con los que cuenta esta páagina, de manera segura y confiable.</p>
      <br>
<div>
  <div class="row">
    <div class="col-sm-3">
     <?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['numest'] ?? '';
?>

<main>
  <br>
  <h4><i>¡Dándole a tus libros, una segunda oportunidad</i></h4>
          <br>
      <p>Desde esta página podrás acceder a tu cuenta y poder disfrutar de los beneficios
          con los que cuenta esta páagina, de manera segura y confiable.</p>
      <br>
<div>
  <div class="row">
    <div class="col-sm-3">
      &nbsp;
    </div>
    
    <div class="center">
        <form method="post" action="index.php?a=doLogin">
          <div class="form-group">
            <label for="numest">Número de Estudiante:</label>
            <input type="text" class="form-control" name="numest" aria-describedby="emailHelp"
                      placeholder="Número de estudiante" value="<?php echo $uname; ?>">
            <input type="hidden" name="action" value="login">
          </div>
          
          <br>
          
          <div class="form-group">
            <label for="Contraseña">Contraseña:</label>
            <input type="Password" class="form-control" name="Contraseña" placeholder="Contraseña">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div></main> &nbsp;
    </div>
    
    <div class="center">
        <form method="post" action="index.php?a=doLogin">
          <div class="form-group">
            <label for="numest">Numero de Estudiante:</label>
            <input type="text" class="form-control" name="numest" aria-describedby="emailHelp"
                      placeholder="Número de estudiante" value="<?php echo $uname; ?>">
            <input type="hidden" name="action" value="login">
          </div>
          
          <br>
          
          <div class="form-group">
            <label for="Contraseña">Contraseña:</label>
            <input type="Password" class="form-control" name="Contraseña" placeholder="Contraseña">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div></main>