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
		<h1>Citas</h1>
<br>
		<?php

		$users = ReservationData::getOld();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead style="background-color:#12548E; color:white;">
			<th>Asunto</th>
			<th>Paciente</th>
			<th>Medico</th>
			<th>Fecha</th>
			<th></th>
			</thead>
			<?php

			foreach($users as $user){
				$tipo="editreservation";
				if(isset($user->pacient_id)&&$user->pacient_id!=""){
					$pacient  = $user->getPacient();
				}
				$medico="";
				if(isset($user->medic_id)&&$user->medic_id!=""){
						$medic = $user->getMedic();
						$medico=$medic->name." ".$medic->lastname;
					}
				?>
				<tr>
				<td><?php echo $user->title; ?></td>
				<td><?php 
				if(isset($user->pacient_id)&&$user->pacient_id!=""){
					echo $pacient->name." ".$pacient->lastname; 
				}else{
					echo $user->name;
					$tipo="editfastreservation";
				}
				?>	
				</td>
				<td><?php echo $medico; ?></td>
				<td><?php echo $user->date_at." ".$user->time_at; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=<?php echo $tipo;?>&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delreservation&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay citas.</p>";
		}


		?>


	</div>
</div>