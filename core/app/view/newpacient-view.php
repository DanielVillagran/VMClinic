<?php
$state = StateData::getStates();
$muni = MuniData::getMuni();




?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Nuevo Paciente</h4>
            </div>
            <div class="card-content table-responsive">

                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient"
                      role="form">
                    <h3 class="subtitles">Datos Personales</h3>
                    <hr>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
                        <div class="col-md-6">
                            <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno</label>
                        <div class="col-md-6">
                            <input type="text" name="lastname" class="form-control" id="lastname"
                                   placeholder="Apellido Paterno" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno</label>
                        <div class="col-md-6">
                            <input type="text" name="second_lastname" class="form-control" id="second_lastname"
                                   placeholder="Apellido Materno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">CURP*</label>
                        <div class="col-md-6">
                            <input type="text" name="curp" class="form-control" id="curp" placeholder="CURP" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                                <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> Masculino
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> Femenino
                            </label>


                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-md-6">
                            <input type="date" name="day_of_birth" class="form-control" id="address1"
                                   placeholder="Fecha de Nacimiento">
                        </div>
                    </div>
                    <h3 class="subtitles">Datos Generales</h3>
                    <hr>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" id="phone1" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
                        <div class="col-md-6">
                            <input type="text" name="address" class="form-control" id="address1"
                                   placeholder="Direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
                        <div class="col-md-6">
                            <select name="" class="form-control" id="state" >
                            <?php foreach ($state as $s): ?>
                                <option value="<?php echo $s->id; ?>"><?php echo  $s->name; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Municipio*</label>
                        <div class="col-md-6">
                            <select name="" class="form-control" id="municipal" >
                                <?php foreach ($muni as $s): ?>
                                    <option value="<?php echo $s->id; ?>"><?php echo  $s->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Localidad*</label>
                        <div class="col-md-6">
                            <input type="text" name="localidad" class="form-control" id="localidad"
                                   placeholder="Localidad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Estado de Nacimiento*</label>
                        <div class="col-md-6">
                            <input type="text" name="born_state" class="form-control" id="born_state"
                                   placeholder="Estado de Nacimiento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nacionalidad de Origen*</label>
                        <div class="col-md-6">
                            <input type="text" name="nacionality" class="form-control" id="nacionality"
                                   placeholder="Nacionalidad de Origen">
                        </div>
                    </div>
                    <h3 class="subtitles">Datos Médicos</h3>
                    <hr>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
                        <div class="col-md-6">
                            <textarea name="sick" class="form-control" id="sick" placeholder="Enfermedad"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
                        <div class="col-md-6">
                            <textarea name="medicaments" class="form-control" id="sick"
                                      placeholder="Medicamentos"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Alergia</label>
                        <div class="col-md-6">
                            <textarea name="alergy" class="form-control" id="sick" placeholder="Alergia"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Paciente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
