<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head();?>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>

 
  <!--<script language="JavaScript" type="text/javascript" script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>-->

  <title>Document</title>
  
</head>
<body>
  <header class="header">
    <!--nav bar-->
    <nav id="main_nav" class="navbar col-sm-6 navbar-expand-md navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <a class="nav-link" href="<?php echo site_url('/search'); ?>" > <i class="fa fa-search"></i> </a>
      <div class="navbar-nav">
        
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link" href="<?php echo site_url('/about');?>">About me</a>
        <a class="nav-link skills" href="#skills">Skills</a>
        <a class="nav-link" href="#projects">Projects</a>
        <a class="nav-link" href="#contact_me">Contact me</a>
      </div>
    </div>
  </div>
</nav>
    <!--end nav bar-->
    <!--header_text-box-->
    <div class="header__text-box">
    <h1 class="heading-primary">
      <span class="heading-primary-main">MartinaAsaad</span>
      <span class="heading-primary-sub">web developer</span>
    </h1>
  </div>
  <!--end header_text-box-->
  <!--arrow button-->
  </header>