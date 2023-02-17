<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);

$myFiles = $database->prepare("SELECT * FROM files WHERE fileType = 'image/jpeg' ");
$myFiles->execute();

foreach($myFiles AS $data){
  $getFile = "data:" . $data['fileType'] . ";base64,".base64_encode($data['file']);
//echo "<a href='" . $getFile. "' download>" .$data['fileName'] . "</a> <br>";

//echo '<img src="' .$getFile .  '" width="300px" />';

}

if(isset($_POST['upload'])){
$fileName = $_FILES['file']["name"];
$fileType = $_FILES['file']["type"];
$fileData = file_get_contents( $_FILES['file']["tmp_name"]);

$addFile = $database->prepare("INSERT INTO files(file,fileName,fileType) 
VALUES(:file ,:fileName,:fileType)");

$addFile->bindParam("file",$fileData);
$addFile->bindParam("fileName",$fileName);
$addFile->bindParam("fileType",$fileType);

if($addFile->execute()){
echo 'تم حفظ ملف';
}else{
  echo 'فشل تخزين ملف';
}

}


$sql =$database->prepare("SELECT * FROM files "); 
$sql->execute();

foreach($sql AS $result){
 ;
// echo "<h1>" . $result['Title'] . "</h1>";
// echo "<p>" . $result['Text'] . "</p>";
}



?>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="file" required/>

<button type="submit" name="upload" >حفظ ملف</button>
</form>