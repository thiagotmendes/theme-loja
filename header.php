<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php wp_head() ?>

    <title>Loja dos Geeks</title>
  </head>
  <body>
    <head>
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
        </a>
      </div>

      <nav class="navbar navbar-loja" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#"> teste </a></li>
              <li><a href="#"> teste </a></li>
              <li><a href="#"> teste </a></li>
              <li><a href="#"> teste </a></li>
              <li><a href="#"> teste </a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </head>
