
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--
// if (isset($_POST["email"]) && $_POST["email"] != "") {
//   http_response_code(400);
//   exit;
// } else if (isset($_POST["email"]) && $_POST["email"] == "") {
//   if($_POST["email2adress"]) {
//     $recipient="madgicians@gmail.com"; //Enter your mail address
//     $subject="Contact from Website"; //Subject
//     $sender=$_POST["name"];
//     $senderEmail=$_POST["email2adress"];
//     $message=$_POST["message"];
//     $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
//     mail($recipient, $subject, $mailBody);
//     sleep(1);
//   }
// }
 -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/madgicians-mini.ico">
  <link rel="stylesheet" href="vendors/fontawesome-free-5.9.0-web/css/all.css">
  <link rel="stylesheet" href="vendors/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/index.css">

  <title>Madgicians</title>
</head>

<body >

  <header id="header">
    <div class="header-block">
      <div class="header-wrapper">

        <div class="navbar">
          <nav>
            <ul class="op-sectionlist">
              <li class="op-v-item"><a href="#home" class="op-v-link link">Home</a></li>
              <li class="op-v-item"><a href="#bio" class="op-v-link link bio">Bio</a></li>
              <li class="op-v-item"><a href="#dates" class="op-v-link link dates">Dates</a></li>
              <li class="op-v-item"><a href="#contact" class="op-v-link link contact-us">Contact</a></li>
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

  <main id="main">

    <div class="body-block">
      <div class="home current" id="home">
        <div class="title">
          <div class="center-abso title-wrapper">
            <img src="images/madgicians-title.jpeg" alt="Madgicians-title">
          </div>
        </div>
        <div class="image-wrapper" id="mini-logo">
          <div class="center-abso mini">
            <img src="images/madgicians-mini.png" alt="Madgicians-mini" class="madgicians-mini">
          </div>
        </div>
      </div>

      <div class="block block-presentation" id="bio">
        <div class="text-block">
          <div class="text-wrapper">
            <h2>Découvrez nous</h2>
            <p>
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
            </p>
          </div>
        </div>
        <div class="media-block">
          <div class="music-block" onclick="">
            <div class="music-wrapper">
              <iframe width="100%" height="300" scrolling="yes" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/508232325&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
            </div>
          </div>

          <div class="photos-block" onclick="">
            <div class="photos-wrapper">
             <div id="myCarousel" class="carousel slide" data-interval="50000" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
              </ol>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/1.jpg" alt="First Slide">
                </div>
                <div class="carousel-item">
                  <img  class="d-block w-100" src="images/2.jpg" alt="Second Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/3.jpg" alt="Third Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/4.jpg" alt="Fourth Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/5.jpg" alt="Fifth Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/6.jpg" alt="Sixth Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/7.jpg" alt="seventh Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/8.jpg" alt="Heighth Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/9.jpg" alt="Nineth Slide">
                </div>
              </div>

              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          </div>

        </div>
      </div>

      <div class="block block-dates" id="dates">
        <div class="dates-wrapper">
          <h2 class="h2">Prochaines dates</h2>
          <table class="dates-table">
            <tr>
              <th>Date</th>
              <th>Heure</th>
              <th>Lieu</th>
              <th>Détails</th>
            </tr>
            <tr>
              <td>25/09/2019</td>
              <td>19h</td>
              <td>L'épicerie sur le zinc (21 rue pasteur 72000 le mans)</td>
              <td>Formation acoustique dans un lieu chaleureux où vous trouverez des produits régionaux pour accompagner le concert</td>
            </tr>
            <tr>
              <td>19/10/2019</td>
              <td>20h</td>
              <td>Le circuit de la bière (35 rue machin 72000 le mans)</td>
              <td>Concert avec la formation complète dans un grand local qui sert une grande variété de bières</td>
            </tr>
            <tr>
              <td>12/10/2019</td>
              <td>21h</td>
              <td>Le Bigwood (32 rue truc 49100 Angers)</td>
              <td>Nous présenterons la totalité de nos morceaux dans un bar ambiance chaleureux</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="block block-contact" id="contact">
        <div class="contact-form-wrapper">
          <form class="contact-form" action="index.html#home" method="post">
            <input type="email" name="email" value="" style="Display:none">
            <div class="infos">
              <input type="text" name="name" id="name" placeholder="Enter you name" required>
              <input type="email" name="email2adress" id="email" placeholder="Enter your mail adress" required>
            </div>
            <textarea type="text" name="message" id="message" placeholder="Enter your message" required>
            </textarea>
            <input class="submit-message" type="submit" value="Send">
          </form>
        </div>
      </div>
    </div>
  </main>

  <div id="loading"></div>


  <footer id="footer">

    <div class="footer-wrapper">
      <div class="footer-element">
        <h2>follow us</h2>
        <div class="social-wrapper">
          <div class="socials-footer">
            <a href="https://www.instagram.com/madgicians/" target="_blank"><i class="fab fa-instagram" style="color:#833ab4; font-size:250%;"></i></a>
            <a href="https://www.youtube.com/channel/UCuUX4GGebU61IHol_t28Iww" target="_blank"><i class="fab fa-youtube" style="color:#ff0000; font-size:250%;"></i></a>
            <a href="https://soundcloud.com/madgicians" target="_blank"><i class="fab fa-soundcloud" style="color:#ff3e00; font-size:250%;"></i></a>
            <a href="https://www.facebook.com/MadgiciansMusic/" target="_blank"><i class="fab fa-facebook-square" style="color:#3b5998; font-size:250%;"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-element">
        <h2>
          mentions légales
        </h2>
        <a href="http://localhost/madgicians/mentions_legales.php"></a>
        <h3>Informations complémentaires</h3>
        <p>Les images du logo madgicians, l'image du titre Madgicians sont sous licence créatice commons CC BY-NC-ND 4.0. Les </p>
      </div>
      <div class="footer-element">
        <h2>
          Bio
        </h2>
      </div>
    </div>

  </footer>



  <script src="vendors/jquery/min.js"></script>
  <script src="vendors/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <script>

  $( document ).ready(function() {

    setTimeout(function(){
      $('body').css('overflow', 'scroll')
      $('#loading').css('opacity', '0');
      setTimeout(function(){
        $('#loading').css('display', 'none');
      }, 400);
    }, 1400);
  });

  var elementPosition = $('#mini-logo').offset();
  $(window).scroll(function () {
    if ($(window).scrollTop() > elementPosition.top-25) {
      $('#mini-logo').css('position', 'fixed').css('top', '15px');
    } else {
      $('#mini-logo').css('position', 'absolute').css('top', '80%');
    }

  });

  $(function() {
    var scrollToAnchor = function( id ) {
      var elem = $("div[id='"+ id +"']"); // on crée une balise d'ancrage
      if ( typeof elem.offset()  === "undefined" ) { // on verifie si l'élément existe
  		elem = $("#"+id); }
      if ( typeof elem.offset()  !== "undefined") { // si l'élément existe, on continue
        $('html, body').animate({
          scrollTop: elem.offset().top }, 600 );} // on défini un temps de défilement de page
    };
    $("a").click(function( event ) { // on attache la fonction au click
      if ( ($(this).attr("href").match("#")) && ($(this).attr("href")!="#myCarousel") ) { // on vérifie qu'il s'agit d'une ancre
        event.preventDefault();
        var href = $(this).attr('href').replace('#', '') // on scroll vers la cible
        scrollToAnchor( href ); }
    });
  });
  </script>
</body>

</html>
