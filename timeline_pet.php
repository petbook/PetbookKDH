<!DOCTYPE html>
<html lang="en" id="ng-app" ng-app="PB">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/fabicon.png">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Petbook - sns for your lovely pet</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!--<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>-->

    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/styles_pethouse.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- script references -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js" ></script>

  <!-- Min VS original -->
<script src="assets/js/firebase.js"></script>
<script src="assets/js/angular.min.js"></script>
<script src="assets/js/angularfire.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.js"></script>
<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.5.js"></script>



  <!-- Angular -->
<!-- <script src="assets/js/app.js" type="text/javascript"></script> -->

<script src="assets/js/forpet.js" type="text/javascript"></script>


<!-- AngualrJS directives -->
<script src="assets/js/ng-file-upload-shim.min.js"></script>
<script src="assets/js/ng-file-upload.min.js"></script>

<!-- <script src="http://code.angularjs.org/1.1.5/angular.min.js"></script> -->
        <script src="assets/js/angular-file-upload.js"></script>

        <!--thumbnails for images-->
        <script src="assets/js/petbook_script.js"></script>

<!-- AngularJS factory -->
<!-- <script src="assets/js/fileRW.js"></script> -->
<style>

            .file_input_button{
                width: 100px;
                /*position: absolute;*/
                top: 0px;
                background-color: #33BB00;
                color: #FFFFFF;
                border-style: solid;
            }

            .file_input_hidden{
                opacity: 0;
                background-size: 50px;
                width: 50px;
                height:50px;
            }

            .button{
                background-image: url("assets/img/backgrounds/uploadPic.jpg");
                background-size: 50px;
                width: 50px;
                height:50px;
            }
        </style>
  </head>
  <body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

                <!-- top nav -->
                <div class="navbar navbar-blue navbar-static-top">
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                      </button>
                      <a href="timeline_page.php" class="navbar-brand logo">P</a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="pethouse.php"><i class="glyphicon glyphicon-home"></i> Pet house</a>
                      </li>
                      <li>
                        <a href="Pet_regist.php"><i class="glyphicon glyphicon-plus"></i> Pet등록</a>
                      </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-align-justify"></i></a>
                        <ul class="dropdown-menu">
                          <li><a ng-click="FBLogout()">로그아웃</a></li>

                        </ul>
                      </li>
                    </ul>
                    </nav>
                </div>
                <!-- /top nav -->

                <div class="padding">
                    <div class="full col-xs-18 col-lg-12">
                      <!-- post -->
                        <div class="full col-xs-14 col-lg-8 col-lg-offset-2 timeline_pet ">
                        <div class="full well col-xs-14">
                        <div class="form ng-pristine ng-valid panel">
                        <!-- name space -->
                        <div class="full well col-xs-14 namespace">
                        <p>petbook</p>
                       </div>
                       <!-- choice space -->
                       <div ng-controller="Ctrl" nv-file-drop="" uploader="uploader">
                       <div class="button"><input type="file" ng-model="animalPhoto" id="file-upload" accept="image/*"/></div><br/>
                       <img id="myImg" src="compman.gif" width="107" height="98">
                       </div>
                       </div>
                     </div>
                     <!-- END post -->

                        <!-- content -->
                        <div class="full col-xs-14 col-lg-8 col-lg-offset-2 timeline_pet ">
                        <div class="full well col-xs-14">
                        <div class="panel">
                        <!-- name space -->
                        <div class="full well col-xs-14 namespace">
                        <p>petbook</p>
                       </div>
                       <!-- picture space -->
                        <img  src="./assets/img/backgrounds/pet6.jpg" alt="..." class="img-rounded" >
                        </div>

                      <!-- reply space -->
                       <div class="full well col-xs-14 reply" ng-controller="ModalDemoCtrl">
                       <img src="./assets/img/backgrounds/interface.png"  ng-click="open()">
                       </div>
                       </div>
                     </div>
                     <!-- END content -->






                        <div class="row">
                          <div class="col-sm-6">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div>
                        </div>

                        <div class="row" id="footer">
                          <div class="col-sm-6">

                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright 2016 Petbook co.</a>
                            </p>
                          </div>
                        </div>

                      <hr>


                    </div><!-- /col-9 -->
                </div> <!--/padding -->
            </div>
            <!-- /main -->

        </div>
    </div>

    <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
            <p class="modal-title">petbook</p>
        </div>
        <div class="modal-body">
<!-- START carousel -->
<div ng-controller="CarouselDemoCtrl">
  <div style="height: inherit;">
    <uib-carousel active="active" interval="myInterval" no-wrap="noWrapSlides">
      <uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id">
        <img ng-src="{{slide.image}}" style="margin:auto;">
        <div class="carousel-caption">
          <h4>Slide {{slide.id}}</h4>
          <p>{{slide.text}}</p>
        </div>
      </uib-slide>
    </uib-carousel>
  </div>

</div>
<!-- END carousel -->



        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="addSlide()">reply</button><!-- ng-click="writeReply()" -->
            <button class="btn btn-warning" type="button" ng-click="ok()">ok</button>
        </div>
    </script>

</div>

  </body>
</html>
