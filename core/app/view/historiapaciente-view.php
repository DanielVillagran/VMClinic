<?php 
$user = PacientData::getById($_GET["id"]); 
$data = PacientData::getData($_GET["id"]); 
?>
<div class="row">
	<div class="col-md-12">

    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Historia clinica</h4>
      </div>
      <div class="card-content table-responsive">
        <form class="form-horizontal" role="form" method="post">
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Religion</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->religion; ?>" required class="form-control" id="religion" placeholder="Religion">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Ocupacion</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->ocupacion; ?>" required class="form-control" id="ocupacion" placeholder="Ocupacion">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Escolaridad</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->escolaridad; ?>" required class="form-control" id="escolaridad" placeholder="Escolaridad">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Estado civil</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->estadocivil; ?>" required class="form-control" id="estadocivil" placeholder="Estado civil">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Etnia</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->etnia; ?>" required class="form-control" id="etnia" placeholder="Etnia">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Peso</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->peso; ?>" required class="form-control" id="peso" placeholder="Peso">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Talla</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->talla; ?>" required class="form-control" id="talla" placeholder="Talla">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Regimen</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->regimen; ?>" required class="form-control" id="regimen" placeholder="Regimen">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">No de afiliacion</label>
            <div class="col-lg-10">
              <input type="text" name="title" value="<?php if($data!=null) echo $data->afiliacion; ?>" required class="form-control" id="afiliacion" placeholder="No de afiliacion">
            </div>
          </div>
         

      

      <div class="form-group">
        <div class="col-lg-offset-2">
          <input type="hidden" name="id" id="id" value="<?php if($data!=null) echo $data->id; ?>">
          <input type="hidden" name="id" id="pacient_id" value="<?php echo $user->id; ?>">
          <button type="submit" class="btn btn-default">Actualizar Historia medica</button>

        </div>
      </div>
    </form>
    <div style="display: none;">
      <a href="" id="vinculoConsentimiento" download>

      </div>
      <div style="display: none;">
        <a href="" id="vinculoReceta" download>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/consentimiento.js"></script>
<script type="text/javascript" src="assets/js/receta.js"></script>