<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Serwis informacyjny</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="style3.php">
</head>
<body>
<div class="blog-section paddingTB60 ">
<div class="container">
	<div class="row">
		<div class="site-heading text-left jumbotron">
		<button class="btn btn-default" style="float: right;"><a  href="add_post.php" style="text-decoration: none;color:#2b2b2b;" >Dodaj artykuł</a></button>
		<a  href="index.php" style="text-decoration: none;color:#2b2b2b;"><h3>Lorem.pl</h3>
					<p> Twoje codzienne wiadomości</p></a>
						<div class="border"></div>

					</div>
					
	</div>
	<div class="row text-center">
<?php
$baza=mysqli_connect("localhost","root","","lorem");
if (mysqli_connect_errno())
{echo "Wystąpił błąd połączenia z bazą";}
$baza->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
$baza->query("SET CHARSET utf8");
$wynik=mysqli_query($baza,'SELECT * FROM article ORDER BY id desc');
while($row = mysqli_fetch_array($wynik))
{
$description=$row["description"];
$description_short=substr($description, 0, 80 );
echo <<< END
<div class='col-sm-6 col-md-4'>
							<div class='blog-box'>
								<div class='blog-box-image'>
									<img src='$row[img]' class='img-responsive zdj'>
								</div>
								<div class='blog-box-content'>
									<h3><a href=czytaj.php?id=$row[id]>$row[title] </a></h3>
									<h4>$description_short</h4>
									<a href=czytaj.php?id=$row[id] class="btn btn-default site-btn guzik">Czytaj dalej</a>
								</div>
							</div>
						</div> <!-- End Col -->		   
END;
            
}
mysqli_close($baza);

    ?>
    </div>
</div>
</div>
<script>
   $(document).ready(function(){
       setTimeout(function() {
           $('.close_alert').hide('fade');
       }, 1000);
   });
   
   </script>  
</body>
</html>