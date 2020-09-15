<?php
include ("inc/randomcolors.php"); ?>
<?php $pageTitle = "Math Quiz"; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
 <body style= "background: <?php echo $colorChange; ?>">
   <div class="container">
       <div id="quiz-box">
         
<?php include("inc/quiz.php"); ?>
   </div>
      </div>

	
  </body>

   