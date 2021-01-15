<?php
session_start();

if(isset($_SESSION['usuario'])){
	include "header.php";
	?>



	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4"><center>Categorías</h1></center>
               <br>
			   <br>
			<div class="row">
				<div class="col-sm-4">
					<span class="btn btn-info" data-toggle="modal" data-target="#modalAgregarCategoria">

						<span class="fas fa-plus-circle" ></span>Agrega más Categorias 
					</span>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-12">
					<div id="tablaCategorias"></div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Modal -->
	<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ingresa Categorias :D</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmCategorias">
					<center>
						<label><b>Nombre de Categoría</b></label>
					</center>
						<input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" id="btnGuardarCategoria">Guardar</button>
				</div>
			</div>
		</div>
	</div>




<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="frmActualizaCategoria">
         	<input type="text" name="idCategoria" id="idCategoria" hidden="">
         	<center>
         		<label><b>Categoria</b></label>
         	</center>
         	<input type="text" name="categoriaU" id="categoriaU" class="form-control">
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="btnCerrarUpdateCategoria">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnActualizaCategora">Actualizar</button>
      </div>
    </div>
  </div>
</div>


	<?php 
	include "footer.php";
	?>

	<script src="../js/categorias.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#tablaCategorias').load("categorias/tablaCategoria.php");

			$('#btnGuardarCategoria').click(function() {
				agregarCategoria();
			});

			$('#btnActualizaCategora').click(function() {
				actualizaCategoria();
			});
		});
	</script>
	<?php
} else {
	header("location:../index.php");
}
?>