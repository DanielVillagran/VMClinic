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
              <input type="text" name="title" value="<?php echo $data->religion; ?>" required class="form-control" id="Religion" placeholder="Asunto">
            </div>
          </div>
         

      

      <div class="form-group">
        <div class="col-lg-offset-2">
          <input type="hidden" name="id" id="id" value="<?php echo $user->id; ?>">
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