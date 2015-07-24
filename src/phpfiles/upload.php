<?php

use src\classes\UploadFile as Upload;

include '../classes/UploadFile.php';

$snt = 0;

if (isset($_FILES)) {
    
$snt = microtime(FALSE);

$cnt = count($_FILES); 

$files = new Upload('12324'); 
   
$files->upload_s($_FILES,$snt);

echo json_encode($_FILES["file"]);
}
exit;

?>
