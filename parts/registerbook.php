<form method="post" action="booking.php?a=doregisterbook">
          <div class="form-group">
            <label for="titulo">Titulo del Libro</label>
            <input type="text" class="form-control" name="titulo"  placeholder="Titulo" >          </div>            
<div class="form-group">
            <label for="autor">Autor o Autores</label>
            <input type="text" class="form-control" name="autor"  placeholder="Autor o Autores" >
</div>
<div class="form-group">
            <label for="dept">Departamento o Materia</label>
            <input type="text" class="form-control" name="dept" placeholder="Especifique el curso o Departamento">
		  </div>
       <div class="form-group">
            <label for="ISNB">Numero ISBN</label>
            <input type="text" class="form-control" name="ISBN"  placeholder="Ingrese # de ISBN del Libro" >
          </div>
          <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" placeholder="Describa el estado del libro">
		  </div>
          <div class="form-group">
            <label for="precio">Precio $</label>
            <input type="number" class="form-control" name="precio" placeholder="Ingrese Precio $">
		  </div>
          <button type="submit" class="btn btn-primary">Register Book</button>
        </form>