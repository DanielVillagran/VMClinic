<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Documentos</h4>
            </div>
            <div class="card-content table-responsive">

                <div class="btn-group">
                    <a href="index.php?view=adddocuments" class="btn btn-default"><i class='fa fa-support'></i> Nuevo
                        Documento</a>
                    <!--<div class="btn-group pull-right">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-download"></i> Descargar <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="report/medicss-word.php">Word 2007 (.docx)</a></li>
                      </ul>
                    </div> -->
                </div>
                <?php

                $users = DocsData::getAll();
                if (count($users) > 0) {
                    // si hay usuarios
                    ?>

                    <table class="table table-bordered table-hover">
                    <thead style="background-color:#12548E; color:white;">
                    <th>Paciente</th>
                    <th>Tipo</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                    </thead>
                    <?php
                    foreach ($users as $user) {
                        ?>
                        <tr>
                            <td><?php echo $user->pacient; ?></td>
                            <td><?php echo $user->type; ?></td>
                            <td><img src="core/app/querys/files/<?php echo $user->document; ?>" style="width: 100px; height: 100px;" ></td>

                            <td style="width:280px;">
                                <a target="_blank" href="core/app/querys/files/<?php echo $user->document; ?>"
                                   class="btn btn-default btn-xs">Descargar</a>
                                <a href="index.php?view=deldocument&id=<?php echo $user->id; ?>"
                                   class="btn btn-danger btn-xs">Eliminar</a>

                            </td>
                        </tr>
                        <?php
                    }
                        ?>
                        </table>
                        <?php
                    


                } else {
                    echo "<p class='alert alert-danger'>No hay Documentos</p>";
                }


                ?>

            </div>
        </div>
    </div>
</div>