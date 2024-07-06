<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Daddys Landheer</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="fontawesome-free/css/fontawesome.min.css"> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">

    <link rel="stylesheet" href="assets/dist-aos/aos.css">
    <link rel="stylesheet" href="assets/css/bg-animation.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/preloader.css" rel="stylesheet">
  </head>
  <body>
    <?php require 'preloader.php'?>
    <?php require 'navbar.php'?>
    <main role="main">
        <?=$_content??''?>
        <section class="jumbotron jumbo-album text-center">
          <div class="container">
            <h1 data-aos="fade-down">Laissez-vous bercer ...</h1>
            <p class="lead text-muted" data-aos="fade-up">
              Decouvrez de la musique pour tous les âges, génération et circonstances <br>
              Joignez-vous à notre grande communauté dans les réseaux sociaux et soyez alerté 
              de nos dernières tubes.
            </p>
            <div class="row" data-aos="fade-up">
              <div class="col-md-4 p-5"><img src="img/img-2.jpg" width="100%" alt=""></div>
              <div class="col-md-4 p-5"><img src="img/img-2.jpg" width="100%" alt=""></div>
              <div class="col-md-4 p-5"><img src="img/img-2.jpg" width="100%" alt=""></div>
            </div>
            <p class="text-center">
              <a href=""><span class="fab fa-youtube text-danger fa-2x mx-4"></span></a>
              <a href=""><span class="fab fa-facebook text-primary fa-2x mx-4"></span></a>
              <a href=""><span class="fab fa-x text-secondary fa-2x mx-4"></span></a>
            </p>

          </div>
        </section>
    </main>
    <?php require 'footer.php'?>
      <script src="assets/plugin/js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="assets/plugin/js/three.min.js"></script>
      <script src="assets/plugin/js/vanta.cells.min.js"></script>
      <script src="assets/dist-aos/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const preloader = document.querySelector('.preloader');
            preloader.style.display = 'none';
            VANTA.CELLS({
              el: "#cells",
              mouseControls: true,
              touchControls: true,
              gyroControls: false,
              minHeight: 200.00,
              minWidth: 200.00,
              scale: 1.00,
              color1: 0xd0d2d2,
              color2: 0xffffff,
              size: 4.70,
              speed: 4.10
            })

            AOS.init({
              easing: 'ease-in-out-sine'
            });
        });
      var audio = new Audio('audio_file.mp3');
      var press_music_btn=false
      function press_music(){ 
        if(press_music_btn){
          audio.pause()
          press_music_btn=false
        }
        else{
          audio.play()
          press_music_btn=true
        }
      }
    </script>
  </body>
</html>
