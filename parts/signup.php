
<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>
<main>
<div>
  <div class="row">
    <div class="col-sm-3">
      &nbsp;
    </div>
    <div class="center">
        <form method="post" action="index.php?a=doRegister">
          <div class="form-group">
            <label for="NumEst">Numero De Estudiante</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Ingrese # de estudiante" value="<?php echo $uname; ?>">
          </div>
          <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Ingrese su nombre" value="">
          </div>  <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Ingrese sus apellidos" value="">
          </div>
        
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Correo Electronico Institucional" value="">
          </div>
          <div class="form-group">
            <label for="password1">Contraseña</label>
            <input type="password" class="form-control" name="password1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="password2">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="password2" placeholder="">
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <div class="col-sm-3">
      &nbsp;
    </div>
  </div>
</div></main>