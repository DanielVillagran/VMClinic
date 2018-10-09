<?php $pacients = PacientData::getAll(); ?>

<div class="row">

    <form role="form" id="data" method="post" action="core/app/querys/Upload_files.php" c enctype="multipart/form-data">

    <center>
        <p id="textfiles">Seleccione su Imagen a subir</p>

            <div id="divfiles">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"></div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="col-lg-10">
                                    <select name="pacient_id" class="form-control" id='pacient_id' required>
                                        <option value="">-- SELECCIONE --</option>
                                        <?php foreach ($pacients as $p): ?>
                                            <option value="<?php echo $p->id; ?>"><?php echo $p->id . " - " . $p->name . " " . $p->lastname; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <select name="document_type" id="document_type" class='form-control'>
                                    <option value="">Tipo de Documento</option>
                                    <option value="RayosX">Rayos X</option>
                                    <option value="Analisis">Análisis Clínicos</option>
                                </select>
                            </div>


                            <div class="file-button">
                                <input type="file" class="btnfile" name="archivo" id="archivo" required>
                                <button id="btnsubir" type="submit" class="btn btn-primary">Subir</button>
                                <div class="" id="main">

                                </div>
                            </div>

    </center>
</div>
</form>


</div>


<div class="col-md-3"></div>

</div>
</div>


</div>
<script type="text/javascript" src="assets/js/upload_files.js"></script>
