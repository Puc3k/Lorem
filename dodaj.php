<?php
require_once "connect.php"; 
$tytul = $_POST['title'];
$tresc = $_POST['tresc'];
$dbName = "lorem";
if (!empty($tytul) && !empty($tresc)){
$conn = @new mysqli($host, $userName, $password, $dbName);
$conn->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
$conn->query("SET CHARSET utf8");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}else{
    $img="images\img".rand(1,5).".jpg";
    $INSERT = "INSERT into article (img,title,description) VALUES (? ,? ,?)";
      $stmt = $conn->prepare($INSERT);  
      $stmt->bind_param("sss",$img,$tytul,$tresc);
      $stmt->execute();
      $conn->close();
      echo "<div class='alert alert-success close_alert row' role='alert'>
      Artykuł został dodany!
    </div>";
    include('index.php');
}}else{
    if(empty($tytul)){
      echo "<div class='alert alert-danger close_alert' role='alert'>
      Wypełnij pole tytuł!
    </div>";
    }

if(empty($tresc)){
  echo "<div class='alert alert-danger close_alert' role='alert'>
  Wypełnij pole treść!
</div>";
}
include('add_post.php');
}
?>