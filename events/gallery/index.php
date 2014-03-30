<?php
include('../../globals.php');
$id =$_GET["ID"];

$con=mysqli_connect("localhost", "giri_user", "47nufkXUQIVTnGlg", "giri");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "SELECT * FROM events WHERE id='$id'");
$row = mysqli_fetch_array($result);
$images = json_decode($row['gallery']);
$name = $row['name'];
$teaser = $row['teaser'];

mysqli_close($con);
?>

<!DOCTYPE HTML>
<!--
/*
 * Bootstrap Image Gallery Demo 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Image Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/events/gallery/css/blueimp-gallery.min.css">
<link href="/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap-image-gallery.css">
<link rel="stylesheet" href="css/demo.css">
<style type="text/css">
    .delete{
        color: red;
        display: none;
    }
    .picture:hover .delete {
       display:inline;
    }

    .picture {
        display:inline;
    }
</style>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/events/event.php?ID=<?php echo $id?>"><i class="fa fa-arrow-left"></i> <?php echo $name ?> </a>
        </div>
        <div class="navbar-collapse collapse">
        </div>
    </div>
</div>
<div class="container">
    <h1><?php echo $name ?> Gallery</h1>
    <blockquote>
        <p><?php echo $teaser ?></p>
    </blockquote>
    <form class="form-inline">
        <div class="form-group">
            <button id="video-gallery-button" type="button" class="btn btn-success btn-lg">
                <i class="glyphicon glyphicon-film"></i>
                Launch Video Gallery
            </button>
        </div>
        <div class="form-group">
            <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg" style="background-color: #7b1979;border-color: #622160;">
                <i class="glyphicon glyphicon-picture"></i>
                Launch Image Gallery
            </button>
        </div>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox"> Borderless
          </label>
          <label class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox"> Fullscreen
          </label>
        </div>
    </form>
    <br>
    <!-- The container for the list of example images -->
    <div id="links">
        <?php foreach($images as $image){ ?> 

        <div class="picture">
            <a href="images/<?php echo $image?>" data-gallery>
                <img src="images/<?php echo $image?>" style="height:100px; width:100px">
                <?php if(loggedin()) { ?>
                <a class='delete' href="/events/delete_gallery_image.php?ID=<?php echo $id?>&IMG=<?php echo $image?>">Delete</a>
                <?php } ?>
            </a> 
        </div>
        <?php } ?>

    </div>
    <br>
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="/js/bootstrap.min.js"></script>
<script src="/events/gallery/js/blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.js"></script>
<script src="js/demo.js"></script>
</body> 
</html>
