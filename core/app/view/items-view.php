<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Articulos</h4>
  </div>
  <div class="card-content table-responsive">
	<a href="index.php?view=newitem" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Articulo</a>
		<?php

		$items = ItemData::getAll();
		if(count($items)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead style="background-color:#12548E; color:white;">
			<th>Articulo</th>
			<th>Cantidad</th>
			<th>Fecha de Caducidad</th>

			<th></th>
			</thead>
			<?php
			foreach($items as $item){
				?>
				<tr>
				<td><?php echo $item->name;?></td>
				<td><?php echo $item->quantity; ?></td>
				<td><?php echo $item->date; ?></td>

				<td style="width:280px;">
				<a href="index.php?view=pacienthistory&id=<?php echo $item->id;?>" class="btn btn-default btn-xs">Descontar</a>
				<a href="index.php?view=edititem&id=<?php echo $item->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delitem&id=<?php echo $item->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}
			?>
			</table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay Articulos</p>";
		}


		?>


	</div>
</div>