﻿<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/padding.css" rel="stylesheet" />
    <link href="css/img.css" rel="stylesheet" />
    <link href="css/blog.css" rel="stylesheet" />
    <title>Garabed DerHohannesian</title>
    <meta charset="utf-8" />
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Garabed DerHohannesian</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="biography.html">Biography<span class="sr-only">(current)</span></a></li>
                    <li><a href="paintings.html">Paintings</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="text-center">Blog - <a href="blog/wp-login.php" class="btn btn-primary">Admin Login</a></h1>
                                
                <div class="blog">
                    <?php
                    require('blog/wp-blog-header.php');
                    ?>

                    <?php
					$posts = get_posts('numberposts=10');
					foreach ($posts as $post) : setup_postdata( $post ); ?>
					<div class="date"><?php the_date(); echo "<br />"; ?></div>
					<div class="title"><?php the_title(); ?></div>
					<?php the_content(); ?> 
					<?php
					endforeach;
					?>
                </div>
            </div>

            <div class="col-sm-4">
                
            </div>
        </div>
    </div>

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<footer>
    <div class="navbar navbar" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                <p>
                    Copyright ©2016 GarabedDerHohannesian.com | by Dwight Norris | All Rights Reserved
                </p>
            </div>

            <div class="navbar-text pull-right">
                <p>
                    <a href="privacy.html" rel="nofollow" style="color: lightgray; text-decoration: none">Privacy</a>
                    |
                    <a href="disclaimer.html" rel="nofollow" style="color: lightgray; text-decoration: none">Disclaimer</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67685422-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
