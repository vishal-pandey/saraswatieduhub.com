<?php
$target_dir = "../../pics/teachers/";
$target_file = $target_dir . basename($_FILES["imagee"]["name"]);
    // $target_file = $target_dir . $_GET['rn'];

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagee"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

    $target_file = $target_dir .$_GET['tname'].".jpg";


    if (move_uploaded_file($_FILES["imagee"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagee"]["name"]). " has been uploaded.";
        echo "The file ". $target_file . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<script type="text/javascript">
    window.location.href = '../teacherpics.php';
</script>