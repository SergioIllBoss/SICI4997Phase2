<div="container">
<div class="center"><main>
       <br>
<h1> Registrar Libros para la venta.</h1><br><br>
<form method="post" action="index.php?a=doregisterbook">
          <div class="form-group">
            <label for="titulo">Título del Libro: </label>
            <input type="text" class="form-control" name="titulo"  placeholder="Titulo" >
          </div>
       <br>
<div class="form-group">
            <label for="autor">Autor o Autores: </label>
            <input type="text" class="form-control" name="autor"  placeholder="Autor o Autores" >
</div>
       <br>
<div class="form-group">
            <label for="dept">Departamento o Materia: </label>
            <input type="text" class="form-control" name="dept" placeholder="Especifique el curso o Departamento">
		  </div>
       <br>
       <div class="form-group">
            <label for="ISNB">Número ISBN: </label>
            <input type="text" class="form-control" name="ISBN"  placeholder="Ingrese # de ISBN del Libro" >
          </div>
       <br>
          <div class="form-group">
            <label for="estado">Estado: </label>
            <input type="text" class="form-control" name="estado" placeholder="Describa el estado del libro">
              </div>
       <br>
          <div class="form-group">
            <label for="precio">Precio $: </label>
            <input type="number" class="form-control" name="precio" placeholder="Ingrese Precio $">
		  </div>
       <br>
          <button type="submit" class="btn btn-primary">Register Book</button>
        </form></main></div></div>