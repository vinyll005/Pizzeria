<?php
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
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
                  <li class="active">
                    <a href="index.php">Home</a>
                  </li>
                  <li><a href="about.php">Menu</a></li>
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
    
    <div class="site-blocks-cover overlay" style="background-image: url('images/pizzaHeader.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">Excellent Taste For Your Home</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="featured-property-half d-flex">
        <div class="image" style="background-image: url('images/pizzaHawai.jpg')"></div>
        <div class="text">
          <h2>Offer of the day</h2>
          <p class="mb-5">Pizza for connoisseurs of non-standard taste combinations: tender ham, chicken and juicy pineapple on a thin crust with almost no crust.</p>
          <ul class="property-list-details mb-5">
            <li class="text-black">Property Name: <strong class="text-black">Hawaiian pizza</strong></li>
            <li>Dough: <strong>Thin</strong></li>
            <li>Cantimeters: <strong>30</strong></li>
          </ul>
            <div class="form-group">
          <a href="about.php">Purchase</a>
        </div>

        </div>
      </div>
    </div>

    <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="images/pizzeria.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Our Office</h2>
          <p>The best pizzeria in the state, operating round weave. We offer the best pizza for a small price.</p>
        </div>
        </div>
      </div>
    </div>
  </div>

    <div class="site-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
              officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
    
              <img src="images/shef1.jpg" alt="Image" class="img-fluid">
    
              <div class="text">
    
                <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              </div>
    
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
    
              <img src="images/shef2.jpg" alt="Image" class="img-fluid">
    
              <div class="text">
    
                <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              </div>
    
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
    
              <img src="images/shef3.jpg" alt="Image" class="img-fluid">
    
              <div class="text">
    
                <h2 class="mb-2 font-weight-light h4">Philip Martin</h2>
                <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              </div>
    
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
    
              <img src="images/shef4.jpg" alt="Image" class="img-fluid">
    
              <div class="text">
    
                <h2 class="mb-2 font-weight-light h4">Steven Ericson</h2>
                <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              </div>
    
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
    
              <img src="images/shef5.jpg" alt="Image" class="img-fluid">
    
              <div class="text">
    
                <h2 class="mb-2 font-weight-light h4">Nathan Dumlao</h2>
                <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              </div>
    
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
    
              <img src="images/shef6.jpg" alt="Image" class="img-fluid">
    
              <div class="text">
    
                <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              </div>
    
            </div>
          </div>
    
    
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
    /*$(document).on('submit', 'form', function(e) {
      e.preventDefault();
    
      var data = new FormData;
        $.each($(this).serializeArray(), function() {
            data.append(this.name, this.value);
        });
    
      $.ajax({
        type: 'POST',
        url: 'registration.php',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        dataType: 'text',
        success: function(response) {
          alert(response);
        },
        error: function(data) {
          console.log(data);
        }
      });
      $.ajax({
        type: 'POST',
        url: 'log_in.php',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        dataType: 'text',
        success: function(response) {
          alert(response);
        },
        error: function(data) {
          console.log(data);
        }
      });
    });*/
    $(document).on('submit', 'form', function(e) {
    e.preventDefault();
    submitForm($(this));
    location.reload();
});
    function submitForm(form) {
      var ajaxTarget = form.attr('ajax-to'). length>0 ? form.attr('ajax-to'):false;
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