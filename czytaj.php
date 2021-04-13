<html lang="pl">

<head>
	<meta charset="UTF-8">
    <title>Serwis informacyjny</title>
	<link rel="stylesheet" href="style2.php">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
	<div class="blog-section paddingTB60 "><?php session_start();
?><div class="container">
			<div class="row">
				<div class="site-heading text-center">
					<h3>Lorem.pl</h3>
					<p> Twoje codzienne wiadomości</p>
					<div class="border"></div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-12 col-md-12">
					<div class="blog-box">
						<div class="blog-box-image zdj "><img src="<?php
$connect=mysqli_connect("localhost", "root", "", "lorem");
$connect->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
$connect->query("SET CHARSET utf8");
$id=$_GET['id'];
$result=mysqli_query($connect, "SELECT id, title, description, img FROM article WHERE id ='$id'");

while($row=mysqli_fetch_array($result)) {
	echo "$row[img]";
}

?>" class="img img-responsive img_on_readpage" alt="">
						</div>
						<div class="blog-box-content">
							<h3><?php $connect=mysqli_connect("localhost", "root", "", "lorem");
$connect->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
$connect->query("SET CHARSET utf8");
$id=$_GET['id'];
$result=mysqli_query($connect, "SELECT id, title, description, img FROM article WHERE id ='$id'");
while($row=mysqli_fetch_array($result)) {
	echo "<p>".$row['title'] .'</p>'.'<p>'."</p><br/>";
}

?></h3>
							<h4><?php $connect=mysqli_connect("localhost", "root", "", "lorem");
$connect->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
$connect->query("SET CHARSET utf8");
$id=$_GET['id'];
$result=mysqli_query($connect, "SELECT title, description FROM article WHERE id ='$id'");

while($row=mysqli_fetch_array($result)) {
	echo "<p class='text-left'>".$row['description']."</p>";
}

?></h4><?php echo "<a href='index.php' class='btn btn-default site-btn guzik'>Powrót</a>";
?>
						</div>
					</div>
				</div>
</body>

</html>