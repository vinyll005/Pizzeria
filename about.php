<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Apart &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
<!-- Модальное окно, основное содержимое которого организовано с использованием системы сеток Bootstrap 3 или 4 -->
<!--<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h4 class="modal-title" id="gridModalLabel"><? echo $_SESSION['name']?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">×</span></button>
        
      </div>
      <form action="" ajax-to="#" method="POST">
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8"><img src="/images/pizza4cheese.jpg" style="max-width: 100%;" alt=""></div>
            <div class="col-md-4">Hearty pizza with juicy chicken, mushrooms, white tartar sauce and fragrant parmesan on thin crust with almost no crust.<br>
              Property Name: <strong>4 cheese pizza</strong>
              <br>
              Cost: <strong>10$</strong>
              <br>
              Cantimeters: <strong>25</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="2" class="btn btn-primary px-4 py-3">Add to cart</button>
      </div>
      </form>
    </div>
  </div>
</div>-->
  
    
  
    <div class="site-wrap">

      <div class="site-navbar mt-4">
          <div class="container py-1">
            <div class="row align-items-center">
              <div class="col-8 col-md-8 col-lg-4">
                <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Pizza 4 Party<span class="text-primary">.</span></strong></a></h1>
              </div>
              <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">
  
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
  
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    
                      <a href="index.php">Home</a>
                    <li class="active"><a href="about.php">Menu</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <b class="caret"></b></a>
                    <div class="dropdown-menu">
                      <form action="registration.php" ajax-to="registration.php" method="post">
                        <fieldset class="control-group">
                          <label name="login" for="form_email" class="control-label">Login</label>
                          <div class="controls">
                            <div class="input-prepend" style="white-space: nowrap">
                              <span class="add-on"><i class="icon-envelope"></i></span>
                              <input type="login" name="login" id="login" autocomplete="on" class="span2">
                            </div>
                          </div>
                        </fieldset>
                        <fieldset class="control-group">
                          <label name="password" for="form_password" class="control-label">Password</label>
                          <div class="controls">
                            <div class="input-prepend" style="white-space: nowrap">
                              <span class="add-on"><i class="icon-lock"></i></span>
                              <input type="password" name="password" id="form_password" class="span2">
                            </div>
                          </div>
                        </fieldset>
                        <p class="navbar-text">
                          <button type="submit" class="btn btn-primary">Register</button>
                        </p>
                      </form>
                    </div>
                  </li>
                  <?php
                  if($_SESSION['user_id'] == true) {
                    ?><li><a href="#"><?php echo $_SESSION['login'];?></a></li>
                    <form action="log_out.php" ajax-to="log_out.php" method="POST">
                    <button type="submit" class="btn btn-primary">Exit</button>
                    </form>
                    <?php
                  } else {
                    ?>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                    <div class="dropdown-menu">
                      <form action="log_in.php" ajax-to="log_in.php" method="post">
                        <fieldset class="control-group">
                          <label name="login" for="form_email" class="control-label">Login</label>
                          <div class="controls">
                            <div class="input-prepend" style="white-space: nowrap">
                              <span class="add-on"><i class="icon-envelope"></i></span>
                              <input type="login" name="login_in" id="login" autocomplete="on" class="span2">
                            </div>
                          </div>
                        </fieldset>
                        <fieldset class="control-group">
                          <label name="password" for="form_password" class="control-label">Password</label>
                          <div class="controls">
                            <div class="input-prepend" style="white-space: nowrap">
                              <span class="add-on"><i class="icon-lock"></i></span>
                              <input type="password" name="password_in" id="form_password" class="span2">
                            </div>
                          </div>
                        </fieldset>
                        <p class="navbar-text">
                          <button type="submit" class="btn btn-primary">Enter</button>
                        </p>
                      </form>
                    </div>
                  </li>
                  <?php
                  }
                  ?>
                  </ul>
                </nav>
              </div>
             
  
            </div>
          </div>
        </div>
      </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/pizzaHeader.jpg');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white">Menu</h1>
          <p>Best pizza within a hour delivery.</p>
        </div>
      </div>
    </div>
  </div>



  <?
  include_once("cartMenu.php");
  ?>

    
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Menu</h2>
          <p>Choose pizza for you</p>
        </div>
      </div>
      
      <div class="row">
        
<?
include_once("pizzas.php");
menuPizza();

?>

      
      </div>
      
    </div>
  </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>
                Kitchens are the main thing for us. They embody all our experience. It is here that professional chefs in modern production create dishes that thousands of people order daily.</p>
            </div>
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">Menu</a></li>
                  <li><a href="contact.php">Contacts</a></li>
                </ul>
              </div>

            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Watch Cooking</h3>

              <div class="block-16">
                <figure>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/e5t3mx8HBb0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>
              </div>

            </div>

            

          </div>
          
        </div>
        
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>

    <script>
  $(document).on('submit', 'form', function(e) {
    e.preventDefault();
    submitForm($(this));
    location.reload();
});
    function submitForm(form) {
      var ajaxTarget = form.attr('ajax-to').length>0 ? form.attr('ajax-to'):false;
      if (!ajaxTarget) {
        console.log('ajaxTarget не записался');
      }
      var data = new FormData;
    $.each(form.serializeArray(), function() {
        data.append(this.name, this.value);
    });
    $.ajax({
        url: ajaxTarget,
        type: 'post',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        success: function(response) {
            alert(response);
        }
});
    };


        </script>
  </body>
</html>