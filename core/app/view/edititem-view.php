<?php $item = ItemData::getById($_GET["id"]); ?>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Editar Articulo</h4>
            </div>
            <div class="card-content table-responsive">
                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updateitem"
                      role="form">

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
                        <div class="col-md-6">
                            <input type="text" name="name" value="<?php echo $item->name; ?>" class="form-control"
                                   id="name" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Cantidad*</label>
                        <div class="col-md-6">
                            <input type="number" name="quantity" value="<?php echo $item->quantity; ?>" required
                                   class="form-control" id="quantity" placeholder="Cantidad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Fecha de caducidad*</label>
                        <div class="col-md-6">
                            <input type="date" name="date" value="<?php echo $item->date; ?>"
                                   required class="form-control" id="date" placeholder="Apellido Materno">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="hidden" name="user_id" value="<?php echo $item->id; ?>">
                            <button type="submit" class="btn btn-primary">Actualizar Articulo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>