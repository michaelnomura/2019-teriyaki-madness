<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Teriyaki Madness | <?=$title;?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous|Roboto" rel="stylesheet">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>   
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/table.css" />
</head>
<body>

<header>
<div class="header-container">  
<h1 class="top">
<a href="index.php"> 
Teriyaki Madness</a>
</h1>
</div> 

  <nav class='cent'>

      <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1);?>
        <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
    </ul>
  </nav>
</header>       
