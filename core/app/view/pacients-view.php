<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">

		</div>
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">Pacientes</h4>
			</div>
			<div class="card-content table-responsive">
				<a href="index.php?view=newpacient" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Paciente</a>
				<form class="form-horizontal" role="form">
					<input type="hidden" name="view" value="pacients">


					<div class="form-group">
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
								<input type="text" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control" placeholder="Nombre">
							</div>
						</div>
						<div class="col-lg-2">
							<button class="btn btn-primary btn-block">Buscar</button>
						</div>

					</div>
				</form>
				<?php
				$users= array();
				if((isset($_GET["q"])) && ($_GET["q"]!="") ) {
					$sql = "select * from pacient where  ";
					if($_GET["q"]!=""){
						$sql .= " name like '%$_GET[q]%' or lastname like '%$_GET[q] %' ";
					}
					$users = PacientData::getBySQL($sql);

				}else{
					$users = PacientData::getAll();

				}

				//$users = PacientData::getAll();
				if(count($users)>0){
			// si hay usuarios
					?>

					<table class="table table-bordered table-hover table-responsive">
						<thead>
							<th>Folio</th>
							<th>Nombre completo</th>
							<th>Direccion</th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
						</thead>
						<?php
						foreach($users as $user){
							?>
							<tr>
								<td><?php $constante="RG-";
								for($i=4;$i>=strlen($user->id);$i--){
									$constante.="0";
								} 
								$constante.=$user->id;
								echo $constante; ?>		
							</td>
							<td><?php echo $user->name." ".$user->lastname; ?></td>
							<td><?php echo $user->address; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->phone; ?></td>
							<td style="width:270px;">
								<a href="index.php?view=pacienthistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a>
								<a href="index.php?view=editpacient&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
								<a href="index.php?view=delpacient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
                                <a href="mailto:<?php echo $user->email;?>?subject=Dieta" class="btn btn-default btn-xs">Enviar Dieta</a>



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
		echo "<p class='alert alert-danger'>No hay pacientes</p>";
	}


	?>


</div>
</div>