<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText1">
  <ul class="nav navbar-nav">
    <li>
      <a class="nav-link" href="#">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>    
    <li>
      <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>    
    <li>
      <a class="nav-link" href="#">RSS Feed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>        
     <li>
      <a class="nav-link" href="#">Archived News</a>
    </li>   
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item-search">
      <div class="has-search">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </li>
  </ul>
</nav>
<nav id="nav2" class="navbar navbar-expand-sm bg-red" style="background-color: #B4051D !important;">
  <div class="container-fluid">
    <div class="navbar-header logo">
      <a class="navbar-brand" href="#">
        <img src="https://sa.kapamilya.com/absnews/abscbnnews/media/abs-cbnnews/abscbnmaster/logo-abscbn.png">
        <span>News</span>
      </a>
    </div>
    <ul class="nav navbar-nav header-social list-unstyled">
      <li>
        <a href="#" target="_blank">
          <i class="fa fa-facebook uni-icon" style="font-size:36px; color: white;"></i>
          <span class="sr-only">facebook</span>
        </a>
      </li>
      <li>
        <a href="#" target="_blank">
          <i class="fa fa-twitter uni-icon"></i>
          <span class="sr-only">twitter</span>
        </a>
      </li>
      <li>
        <a href="#" target="_blank">
          <i class="fa fa-youtube-play uni-icon"></i>
          <span class="sr-only">youtube</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
<hr>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText2" aria-controls="navbarText2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText2">
    <ul class="navbar-nav nav mr-auto">
      <li id="home">
        <a class="nav-link active" href="<?php echo get_template_directory_uri(); ?>/home/">Home <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>      
      <li>
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/about/">About Us</a>
      </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
      <li>
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/blog/">Blog</a>
      </li>       
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>       
      <li>
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/contact-us/">Contact</a>
      </li>              
    </ul>
  </div>
</nav>


<hr><br>





