<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Web Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">services</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="about.php">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>


      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="limton.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="london.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="los angeles.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-6 col-md-6 col-12">
        <img src="ak.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h2>Welcome To My Responsive Website Using Bootstrap</h2>
        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officiis eveniet, et, aperiam, numquam repellat consectetur quam itaque sint dolorum modi odio accusantium libero? Ea sed nostrum reprehenderit. Doloribus, voluptatem.</p>
        <a href="index.php" class="btn btn-success"> check more</a>
    </div>
    </div>
</div>
</section>





<section class="my-5">
  <div class="py-5">
      <h2 class="text text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="los angeles.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">New York</h4>
            <p class="card-text">Beautiful nature :).</p>
            <a href="#" class="btn btn-success">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="los angeles.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">New York</h4>
            <p class="card-text">Beautiful nature :).</p>
            <a href="#" class="btn btn-success">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="los angeles.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">New York</h4>
            <p class="card-text">Beautiful nature :).</p>
            <a href="#" class="btn btn-success">See Profile</a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<!-- Gallery -->


<section class="my-5">
  <div class="py-5">
      <h2 class="text text-center">Gallery</h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="ak.jpg" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="ak.jpg" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="ak.jpg" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="ak.jpg" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="ak.jpg" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="ak.jpg" class="img-fluid pb-4">
          </div>

        </div>
      </div>
  </div></section>


  <!-- form -->

  <section class="my-5">
    <div class="py-5">
        <h2 class="text text-center">Contact Form</h2>
        </div>

        <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
            <div class="form-group">
              <label>user</label>
              <input type="text" name="user" autocomplete="off" class="form-control">
            </div>

      
                <div class="form-group">
                  <label>email</label>
                  <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
    
              
                    <div class="form-group">
                      <label>mobile</label>
                      <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>

                        <div class="form-group">
                          <label>comment</label>
                          <textarea class="form-control" name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
    </section>


    <footer>
      <p class="p-3 bg-dark text-white text-center">Created By Sachin</p>
    </footer>


<!-- 
    <h1>Welcome to my file</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
      </script>  
</body>
</html>