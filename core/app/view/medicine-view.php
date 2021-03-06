<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Categorias</h4>
  </div>
  <div class="card-content table-responsive">
	<a href="index.php?view=newmedicine" class="btn btn-default"><i class='fa fa-th-list'></i> Nuevo Medicamento</a>

		<?php

		$users = MedicineData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead style="background-color:#12548E; color:white;">
			<th>Nombre</th>
			<th>URL de consulta</th>
			<th style="width:80px;"></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><a href="<?php echo $user->url; ?>" _blank><?php echo $user->url; ?></a></td>
				<td style="width:80px;" class="td-actions"><a href="index.php?view=editmedicine&id=<?php echo $user->id;?>" rel="tooltip" title="Editar" class="btn btn-simple btn-warning btn-xs"><i class='fa fa-pencil'></i></a> <a href="index.php?view=delmedicine&id=<?php echo $user->id;?>" rel="tooltip" title="Eliminar" class=" btn-simple btn btn-danger btn-xs"><i class='fa fa-remove'></i></a></td>
				</tr>
				<?php

			}
?>
</table>
<?php


		}else{
			echo "<p class='alert alert-danger'>No hay Medicamentos</p>";
		}


		?>

</div>
</div>
	</div>
</div>