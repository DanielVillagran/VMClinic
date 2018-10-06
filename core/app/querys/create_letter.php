    <?php 
    $doctor=$_POST['doctor'];
    $consentimiento=$_POST['consentimiento'];
    $paciente=$_POST['paciente'];
    $fecha=$_POST['fecha'];
    $template_file_name = 'Resources/carta.docx';
    $rand_no = rand(111111, 999999);
    $fileName = "carta" . trim($paciente) . ".docx";
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

            $message = str_replace("%DOCTOR%", $doctor,       $message);
            $message = str_replace("%CONSENTIMIENTO%", $consentimiento,           $message);
            $message = str_replace("%PACIENTE%", $paciente,                  $message);      
            $message = str_replace("%HOY%", $fecha,           $message); 

            $zip_val->addFromString($key_file_name, $message);
            $zip_val->close();
        }
        echo "chingaste a tu madre";
    }
    catch (Exception $exc) 
    {
        $error_message =  "Error creating the Word Document";
        var_dump($exc);
    }


    ?>