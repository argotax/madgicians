<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/madgicians-mini.ico">
  <link rel="stylesheet" href="vendors/fontawesome-free-5.9.0-web/css/all.css">
  <link rel="stylesheet" href="vendors/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <script src="vendors/jquery/min.js"></script>
  <script src="vendors/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/index.css">
  <title>Madgicians</title>
</head>

<body>

  <header>
    <div class="header-block">
      <div class="header-wrapper">

        <div class="navbar">
          <nav>
            <ul>
              <li><a href="index.html" class="link home">Home</a></li>
              <li><a href="bio.html" class="link bio">Bio</a></li>
              <li><a href="dates.html" class="link dates">Dates</a></li>
              <li><a href="media.html" class="link media-us">Media</a></li>
              <li><a href="contact.html" class="link contact-us">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="socials">
          <a href="https://www.instagram.com/madgicians/" target="_blank"><i class="fab fa-instagram" style="color:#833ab4; font-size:250%;"></i></a>
          <a href="https://www.youtube.com/channel/UCuUX4GGebU61IHol_t28Iww" target="_blank"><i class="fab fa-youtube" style="color:#ff0000; font-size:250%;"></i></a>
          <a href="https://soundcloud.com/madgicians" target="_blank"><i class="fab fa-soundcloud" style="color:#ff3e00; font-size:250%;"></i></a>
          <a href="https://www.facebook.com/MadgiciansMusic/" target="_blank"><i class="fab fa-facebook-square" style="color:#3b5998; font-size:250%;"></i></a>
        </div>
      </div>
      </div>
  </header>

  <main>
    <div class="block body-block home">
      <div class="title">
        <img src="images/madgicians-title.jpeg" alt="Madgicians-title">
      </div>

      <div class="image-wrapper">
        <img src="images/madgicians-mini.png" alt="Madgicians-mini" class="madgicians-mini">
      </div>
      <div class="videos-block" onclick="">
        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/508232325&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
      </div>
      <div class="photos-block" onclick="">

        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>

          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/1.jpg" alt="First Slide">

              </div>
              <div class="carousel-item">
                  <img src="images/2.jpg" alt="Second Slide">
              </div>
              <div class="carousel-item">
                  <img src="images/3.jpg" alt="Third Slide">
              </div>
              <div class="carousel-item">
                  <img src="images/4.jpg" alt="Third Slide">
              </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
        </div>



      </div>
    </div>
    <div class="block body-block block-présentation">
      <div class="photos">

      </div>
      <div class="block-text">
        Quorum nescius ne firmissimum. Aut cillum veniam eram vidisse, quibusdam multos
        iis aliquip coniunctione. Fugiat cernantur doctrina.E magna voluptate,
        incididunt id malis, se elit admodum quibusdam, hic eu concursionibus. Offendit
        ita nostrud. Aute ab constias sed quis. Ita iudicem id vidisse ad iudicem sed
        export senserit.Aute de incididunt, et cupidatat exquisitaque, consequat irure cernantur, est
        nisi illum e aliquip. Nulla laboris exquisitaque. Esse cupidatat deserunt, ex
        quo duis esse dolor.Eram o quamquam hic illum. Nulla eu consequat est quis.
        Summis consequat firmissimum, ita iudicem sed possumus se si quis incididunt et
        eram a aliquip te se irure ubi irure, voluptate ex vidisse, e eram fabulas, se
        ubi illum magna export. O export offendit probant ita eu sunt ingeniis laborum,
        o anim philosophari ne aliquip irure anim ullamco minim sed ita esse enim id
        incurreret, amet arbitror graviterque ut aute iudicem ad malis nisi aut ad
        offendit firmissimum.
      </div>
    </div>
    <div class="">

    </div>
  </main>
  <footer>

    <div class="footer-wrapper">
      <div class="">
        follow us
      </div>
      <div class="">
        contact
      </div>
      <div class="">
        Bio
      </div>
    </div>

  </footer>
  <script>
  $(document).ready(function(){
          $("#myCarousel").carousel();
  });
  </script>
</body>

</html>
