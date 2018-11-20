    <?php 
    $edad=$_POST['edad'];
    $peso=$_POST['peso'];
    $ta=$_POST['ta'];
    $fr=$_POST['fr'];
    $temp=$_POST['temp'];
    $fc=$_POST['fc'];
    $sato=$_POST['sato'];
    $med=$_POST['med'];
    $paciente=$_POST['paciente'];
    $fecha=$_POST['fecha'];
    $template_file_name = 'Resources/receta.docx';
    $rand_no = rand(111111, 999999);
    $fileName = "receta" . trim($paciente) . ".docx";
    $folder   = "Resources";
    $full_path = $folder . '/' . $fileName;
    try
    {
        if (!file_exists($folder)) {
            mkdir($folder);
        }      
        copy($template_file_name, $full_path);
        $zip_val = new ZipArchive;
        if($zip_val->open($full_path) == true)
        {
            $key_file_name = 'word/document.xml';
            $message = $zip_val->getFromName($key_file_name);                

            $timestamp = date('d-M-Y H:i:s');

            $message = str_replace("%EDAD%", $edad,       $message);
            $message = str_replace("%PESO%", $peso,           $message);
            $message = str_replace("%PACIENTE%", $paciente,                  $message);      
            $message = str_replace("%HOY%", $fecha,           $message); 
            $message = str_replace("%TA%", $ta,       $message);
            $message = str_replace("%FC%", $fc,           $message);
            $message = str_replace("%FR%", $fr,       $message);
            $message = str_replace("%TEMPERATURA%", $temp,           $message);
            $message = str_replace("%SATO%", $sato,       $message);
            $message = str_replace("%MED%", $med,       $message);

            $zip_val->addFromString($key_file_name, $message);
            $zip_val->close();
        }

    }
    catch (Exception $exc) 
    {
        $error_message =  "Error creating the Word Document";
        var_dump($exc);
    }
    echo "dany";

    ?>