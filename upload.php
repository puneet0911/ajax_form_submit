<?php session_start();
//print_r($_FILES['upload_file']);
if(move_uploaded_file($_FILES['upload_file']['tmp_name'],"upload/".$_FILES['upload_file']['name'])){
echo$_SESSION['filepath']=$_SERVER['HTTP_REFERER']."upload/".$_FILES['upload_file']['name'];
}

?>