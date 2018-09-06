<?php $user = PacientData::getById($_GET["id"]); ?>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Editar Paciente</h4>
            </div>
            <div class="card-content table-responsive">
                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient"
                      role="form">
                    <h3 class="subtitles">Datos Personales</h3>
                    <hr>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
                        <div class="col-md-6">
                            <input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control"
                                   id="name" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno*</label>
                        <div class="col-md-6">
                            <input type="text" name="lastname" value="<?php echo $user->lastname; ?>" required
                                   class="form-control" id="lastname" placeholder="Apellido Paterno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno*</label>
                        <div class="col-md-6">
                            <input type="text" name="second_lastname" value="<?php echo $user->second_lastname; ?>"
                                   required class="form-control" id="second_lastname" placeholder="Apellido Materno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">CURP*</label>
                        <div class="col-md-6">
                            <input type="text" name="curp" value="<?php echo $user->curp; ?>" required
                                   class="form-control" id="curp" placeholder="CURP">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                                <input type="radio" id="inlineCheckbox1" name="gender"
                                       required <?php if ($user->gender == "h") {
                                    echo "checked";
                                } ?> value="h"> Hombre
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" id="inlineCheckbox2" name="gender"
                                       required <?php if ($user->gender == "m") {
                                    echo "checked";
                                } ?> value="m"> Mujer
                            </label>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-md-6">
                            <input type="date" name="day_of_birth" class="form-control"
                                   value="<?php echo $user->day_of_birth; ?>" id="address1"
                                   placeholder="Fecha de Nacimiento">
                        </div>
                    </div>

                    <h3 class="subtitles">Datos Generales</h3>
                    <hr>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
                        <div class="col-md-6">
                            <input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control"
                                   id="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
                        <div class="col-md-6">
                            <input type="text" name="phone" value="<?php echo $user->phone; ?>" class="form-control"
                                   id="inputEmail1" placeholder="Telefono">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
                        <div class="col-md-6">
                            <input type="text" name="address" value="<?php echo trim($user->address); ?>"
                                   class="form-control" required id="username" placeholder="Direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
                        <div class="col-md-6">
                            <input type="text" name="state" value="<?php echo trim($user->state); ?>"
                                   class="form-control" id="state" placeholder="Estado">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Municipio*</label>
                        <div class="col-md-6">
                            <input type="text" name="municipal" value="<?php echo trim($user->municipal); ?>"
                                   class="form-control" id="municipal" placeholder="Municipio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Localidad*</label>
                        <div class="col-md-6">
                            <input type="text" name="localidad" class="form-control"
                                   value="<?php echo trim($user->localidad); ?>" id="localidad" placeholder="Localidad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Estado de Nacimiento*</label>
                        <div class="col-md-6">
                            <input type="text" name="born_state" class="form-control"
                                   value="<?php echo trim($user->born_state); ?>" id="born_state"
                                   placeholder="Estado de Nacimiento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nacionalidad de Origen*</label>
                        <div class="col-md-6">
                            <input type="text" name="nacionality" class="form-control"
                                   value="<?php echo trim($user->nacionality); ?>" id="nacionality"
                                   placeholder="Nacionalidad de Origen">
                        </div>
                    </div>

                    <h3 class="subtitles">Datos Médicos</h3>
                    <hr>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
                        <div class="col-md-6">
                            <textarea name="sick" class="form-control" id="sick"
                                      placeholder="Enfermedad"><?php echo $user->sick; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
                        <div class="col-md-6">
                            <textarea name="medicaments" class="form-control" id="sick"
                                      placeholder="Medicamentos"><?php echo $user->medicaments; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Alergia</label>
                        <div class="col-md-6">
                            <textarea name="alergy" class="form-control" id="sick"
                                      placeholder="Alergia"><?php echo $user->alergy; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                            <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>