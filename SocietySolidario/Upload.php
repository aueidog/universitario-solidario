<?php
ini_set('default_charset','UTF-8');
$target_dir = "img/logo/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Arquivo é uma imagem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Esse arquivo não é uma imagem.<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Lamentamos, mas esse arquivo já existe.<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Lamentamos, mas esse arquivo é muito grande (maior do que 5MB).<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "cdr" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Lamentamos, mas apenas as extensões JPG, JPEG, PNG, CDR & GIF são permitidas.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Lamentamos, seu arquivo não foi enviado.<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi enviado.<br>";
    } else {
        echo "Lamentamos, ocorreu um erro no envio do seu arquivo.<br>";
    }
}
?>