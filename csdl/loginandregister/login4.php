
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="icon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Đăng nhập</title>
</head>
<body>
        
<!-- ---- Include the above in your HEAD tag -------- -->
 
      <section class="login-block">
          <div class="container">
          <form action="login_submit.php" method="POST">
          <div class="row">
              <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login-form">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                    <input type="text" class="form-control" placeholder="" name="username">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                    <input type="password" class="form-control" placeholder="" name="password">
                  </div>
                  
                  
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      <small>Remember Me</small>
                    </label>
                    <button type="submit" class="btn btn-login float-right" name="submit">Submit</button>
                  </div>
                  
                </form>
                <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>
              </div>
              <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="banner-text">
                          <h2>This is Heaven</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>    
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="banner-text">
                          <h2>This is Heaven</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>    
                      </div>
                    </form>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="image.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div>    
          </div>
        </div>
                  </div>       
                  
              </div>
          </div>
      </div>
      </section>
</body>
</html>
