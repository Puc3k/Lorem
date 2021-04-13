<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Serwis informacyjny</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<?php session_start(); ?>
<div class="content-fluid">
<div class="add-post col-sm-10 offset-sm-1">
    <form action="dodaj.php" method="post">
         <div class="form-group-1 row">
                <P class="label col-sm-2">Tytuł</p>
                <input type="text" class="form-control col-8" name="title" id="tit" placeholder="Wprowadź tytuł">
        </div>
        <div class="form-group row">
                <P class="label col-sm-2">Treść</p>
        <textarea type="text" class="form-control col-sm-8" name="tresc" id="tres" placeholder="Wprowadź treść artykułu"></textarea>
        <div class="form-group row">
        <p><?php if(isset($tytul_error)) {echo $tytul_error.'<br/>';} ?></p>
        <p><?php if(isset($tresc_error)) {echo $tresc_error.'<br/>';} ?></p>
        </div>
        </div>

               <div class="form-group button row">
                <button type="submit" class="btn btn-primary col-sm-12" id="send"  name="wyslij">Dodaj Artykuł</button>  
                <button type="button" class="btn btn-light col-sm-12 guzik"><a href="index.php" style="text-decoration: none;">Powrót</a></button>    
                </div>     
    </form>
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