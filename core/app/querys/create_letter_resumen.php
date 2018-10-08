    <?php 
    $telefono="";
    $domicilio="";
    $edad="";
    if(isset($_POST['id'])){
        require 'conexion'; 
        $lista=R::find('pacient',"id={_POST['id']}");
        foreach ($lista as $key) {
            $telefono=$key->phone;
            $domicilio=$key->address;
            $date = new DateTime($key->day_of_birth);
            $now = new DateTime();
            $interval = $now->diff($date);
            $edad=$interval->y;
            
        }

    }else{
        $telefono=$_POST['phone'];
        $domicilio=$_POST['address'];

    }
    $asunto=$_POST['asunto'];
    $paciente=$_POST['paciente'];
    $fecha=$_POST['fecha'];
    $template_file_name = 'Resources/constancia-resumen.docx';
    $rand_no = rand(111111, 999999);
    $fileName = "constancia" . trim($paciente) . ".docx";
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

            $message = str_replace("%PACIENTE%", $paciente,                  $message);      
            $message = str_replace("%HOY%", $fecha,           $message); 
            $message = str_replace("%EDAD%", $edad,                  $message);      
            $message = str_replace("%TELEFONO%", $telefono,           $message);
            $message = str_replace("%DOMICILIO%", $domicilio,                  $message);      
            $message = str_replace("%MOTIVO%", $asunto,           $message); 
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