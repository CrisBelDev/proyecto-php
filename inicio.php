
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Titulo de Curso</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/estilos.css">
    <link rel="stylesheet" href="views/css/fonts.css">
    <link rel="stylesheet" href="views/css/portafolio.css">
    <!-- <link rel="stylesheet" href="css/style.default.css"> -->
    
</head>
<body>
   
   <?php require_once "views/inc/menu1.php"; ?>

   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/img-7.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Encabezado 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cumque soluta repudiandae nemo quis! Illo obcaecati soluta sunt reprehenderit inventore, aut aliquid eveniet quidem fugit recusandae autem maxime culpa, id.</p>
            <button class="btn btn-outline-success">Leer mas</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img02.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Encabezado 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cumque soluta repudiandae nemo quis! Illo obcaecati soluta sunt reprehenderit inventore, aut aliquid eveniet quidem fugit recusandae autem maxime culpa, id.</p>
            <button class="btn btn-outline-success">Leer mas</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img03.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Encabezado 3</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cumque soluta repudiandae nemo quis! Illo obcaecati soluta sunt reprehenderit inventore, aut aliquid eveniet quidem fugit recusandae autem maxime culpa, id.</p>
            <button class="btn btn-outline-success">Leer mas</button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
   </div>
   <div class="container mt-5 mb-5">
     <div class="row">
       <div class="col-12 col-md-6 align-self-center">
         <h3 class="text-center">BIENVENIDOS A LA TIENDA</h3>
          <h2 class="text-center">Cafeteria</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius consectetur sunt, omnis alias molestiae deleniti quidem, esse iste sint voluptatum, est magni quisquam! Autem ut assumenda eos, dicta debitis fugit impedit praesentium error beatae dolorem laudantium obcaecati at officia architecto maxime totam corporis. At possimus dolores consequatur in non magni.</p>

       </div>
       <div class="col-12 col-md-6 ">
         <img src="img/img-8.jpg" class="img img-fluid ">
        
       </div>
     </div>
   </div>
   <main>
    <section class="container">
      <div class="heading text-center">
        <h3>LATEST FROM OUR WORKSHOP</h3>
      </div>
      
     <!-- Portafolio -->
     <div class="row portfolio text-center no-space">
        <div class="col-md-4 portafolio">
          <div class="box-image">
            <div class="image"><img src="img/img-7.jpg" alt="" class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="content">
                  <div class="name">
                    <h3><a href="portfolio-detail.html" class="color-white">Portfolio item</a></h3>
                  </div>
                  <div class="text">
                    <p class="d-none d-lg-block">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                    <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 portafolio">
          <div class="box-image">
            <div class="image"><img src="img/img-7.jpg" alt="" class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="content">
                  <div class="name">
                    <h3><a href="portfolio-detail.html" class="color-white">Portfolio item</a></h3>
                  </div>
                  <div class="text">
                    <p class="d-none d-lg-block">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                    <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 portafolio">
          <div class="box-image">
            <div class="image"><img src="img/img-7.jpg" alt="" class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="content">
                  <div class="name">
                    <h3><a href="portfolio-detail.html" class="color-white">Portfolio item</a></h3>
                  </div>
                  <div class="text">
                    <p class="d-none d-lg-block">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                    <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3 mb-5">
        <button class="btn btn-outline-success">Ver mas</button>
      </div>
   </section>
    
   </main>
   
   
   <?php include('../views/inc/footer.php'); ?>
   
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>




