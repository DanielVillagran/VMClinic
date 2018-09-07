<?php
$state = StateData::getStates();
$muni = MuniData::getMuni();




?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Nuevo Articulo</h4>
            </div>
            <div class="card-content table-responsive">

                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=additem"
                      role="form">


                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Articulo*</label>
                        <div class="col-md-6">
                            <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Cantidad*</label>
                        <div class="col-md-6">
                            <input type="number" name="quantity" class="form-control" id="quantity"
                                   placeholder="Cantidad" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Fecha de caducidad</label>
                        <div class="col-md-6">
                            <input type="date" name="date" class="form-control" id="date"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Articulo</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
