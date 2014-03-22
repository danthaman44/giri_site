<?php
include('../globals.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>People - GIRI</title>

    <?php 
    include('../header_links.php');
    ?>
</head>

<body>

    <?php
    include('../navbar.php');
    ?>

    <!-- Page Content -->

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">People
                <?php
                if (loggedin()){
                    ?>
                        <a href="#" data-toggle="modal" data-target="#addPersonModal" style="font-size:18px">
                        <i class="fa fa-plus"></i> Add Person
                        </a>
                <?php
                }
                ?>
                </h1>
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#service-one" data-toggle="tab">Faculty</a>
                    </li>
                    <li><a href="#service-two" data-toggle="tab">Staff</a>
                    </li>
                    <li><a href="#service-three" data-toggle="tab">Fellows</a>
                    </li>
                    <li><a href="#service-four" data-toggle="tab">Team</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="service-one">
                        <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <i class="fa fa-gear pull-left fa-4x"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
                            <p><a href="#">Links</a> | <a href="#">Links</a> | <a href="#">Links</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <i class="fa fa-gear pull-left fa-4x"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
                            <a href="#">Links</a>
                        </div>
                    </div>
                    
                    </div>

                    <div class="tab-pane fade" id="service-two">
                        <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <i class="fa fa-gear pull-left fa-4x"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
                            <p><a href="#">Links</a> | <a href="#">Links</a> | <a href="#">Links</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <i class="fa fa-gear pull-left fa-4x"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
                            <a href="#">Links</a>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <i class="fa fa-gear pull-left fa-4x"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
                            <p><a href="#">Links</a> | <a href="#">Links</a> | <a href="#">Links</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <i class="fa fa-gear pull-left fa-4x"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
                            <a href="#">Links</a>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <h3> <b> Sean Miller </b> <small>Web Developer</small> <img src="google.png" align="middle" style="max-width:15%; margin-left:370px" > </h3>
<!--                             <i class="fa fa-gear pull-left fa-4x"></i> -->
                            <p> Sean is a senior at Duke University majoring Computer Science. After graduation, Sean plans to work for
                            Google in Mountain View, CA as a software engineer. Sean has previously interned at Google in 2012 and 2013. Sean
                            has extensive full-stack web development experience in PHP, as well as experience with Django and Ruby on Rails.</p>
                            <p><a href="http://www.linkedin.com/pub/sean-miller/65/95/63b">LinkedIn</a> | <a href="https://github.com/vfseanm/">Github</a> | <a href="http://hurryless.com/">HurryLess</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-md-3">
                               <img class="img-responsive" src="http://placehold.it/750x450">
                         </div>
                            <div class="col-md-9">
                            <h3> <b> Dan Deng </b>  <small>Web Developer</small> <img src="linkedin.png" align="middle" style="max-width:15%; margin-left:400px" > </h3>
<!--                             <i class="fa fa-gear pull-left fa-4x"></i> -->
                            <p>Dan is a senior at Duke University majoring in Computer Science. After graduation, Dan plans to join LinkedIn in
                            Mountain View, CA as a software engineer. Dan previously interned at VMware as a web developer. Dan is a big fan of
                            Ruby on Rails, but has also done PHP and iOS development.</p>
                            <p><a href="https://www.linkedin.com/pub/dan-deng/44/23/ba5/">LinkedIn</a> | <a href="https://github.com/danthaman44">Github</a> | <a href="http://people.duke.edu/~wdd3/isis240/">Duke</a></p>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <!-- /.row -->
<!-- **********************Modal************************** -->

<div class="modal fade" id="addPersonModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add a person</h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" role="form" action="new_event.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Upload Picture</label>
                <div class="col-sm-10">
                    <input type="file" name="file" id="image">
                </div>
            </div>

              <div class="form-group">
                <label for="headline" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
              </div>

              <div class="form-group">
                <label for="headline" class="col-sm-2 control-label">Position</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="position" name="position">
                </div>
              </div>

            <div class="form-group">
              <label for="headline" class="col-sm-2 control-label">Role</label>
                <div class="col-sm-2">
                  <select class="form-control">
                    <option value="one">Faculty</option>
                    <option value="two">Staff</option>
                    <option value="three">Fellow</option>
                  </select>
                </div>
            </div>

              <div class="form-group">
                <label for="content" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                  <textarea id ="description" class="form-control" name="description" style="width:600px"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="headline" class="col-sm-2 control-label">Link #1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="link1" name="link1">
                </div>
              </div>
              <div class="form-group">
                <label for="headline" class="col-sm-2 control-label">Link #2</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="link2" name="link2">
                </div>
              </div>
              <div class="form-group">
                <label for="headline" class="col-sm-2 control-label">Link #3</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="link3" name="link3">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>

      </div>
    </div>
  </div>
</div>
<!-- **********************End Modal************************** -->
</div>

     <?php 
    include("../wysiwyg.php");
    ?>

    <?php
    include('../footer.php');
    ?>

    <!-- JavaScript -->
    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/modern-business.js"></script>

</body>

</html>