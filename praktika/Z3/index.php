<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Z3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-1.js"></script>
    <script>
      function slowScroll(id){
        var offset= 0;
        $('html, body').animate({scrollTop: $(id).offset().top + offset},1000);
        return false;
      }
    </script>
  </head>
  <body id="page">
    <div class="page__cell-1">
      <header class="header">
        <img src="images/LOGO.png">
        <ul class="header__menu">
          <li class="header__list"><a class="link" href="#">Label</a></li>
          <li class="header__list"><a class="link" href="#">Label</a></li>
          <li class="header__list"><a class="link" href="#">Label</a></li>
          <a class="header__link" href="#">Sign In</a>
        </ul>
      </header>
    </div>
    <div class="content-1">
      <div class="content__text-1">
        <div class="content__items">
          <img class="content__icon" src="images/Stars.png">
          <p class="content__text--caption-1">Our Mission</p>
          <img class="content__icon" src="images/Stars.png">
        </div>
        <p class="content__text--title-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        <br> has been the industry's standard dummy text ever since the 1500.</p>
      </div>
    </div>
    <div class="content-2">
      <div class="content__text-2">
        <p class="content__text--caption-2">About</p>
        <p class="content__text--title-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        <br> has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
      </div>
    </div>
    <div class="content-3">
      <div class="content__text-3">
        <p class="content__text--caption-3">Team</p>
      </div>
      <div class="content__block-image">
        <a href="#">
          <div class="content__image-1">
          <img class="content__images--circle" src="images/Layer79.png">
          <p class="content__text--caption-4">John Doe</p>
          <p class="content__text--title-4">Founder & CEO</p>
        </div>
        <div class="content__image-2">
          <img class="content__images--circle" src="images/Layer80.png">
          <p class="content__text--caption-4">John Doe</p>
          <p class="content__text--title-4">Co-Founder</p>
        </div>
        <div class="content__image-3">
          <img class="content__images--circle" src="images/Layer81.png">
          <p class="content__text--caption-4">John Doe</p>
          <p class="content__text--title-4">Investor</p>
        </a>
        </div>
      </div>
      <div class="content__link">
        <a href="javascript://0" onclick="slowScroll('#page')"><button class="content__button">Work with us</button></a>
      </div>
    </div>
    <div class="content-4">
      <iframe class="content__map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d151852.7067280771!2d49.3338048891289!3d53.509580303399545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1521118066716" frameborder="0" style="border:0" ></iframe>
    </div>
    <footer class="footer">
      <div class="page__cell-2">
        <span class="footer__menu">
          <ul class="footer__list-1">
            <li class="footer__text--title-1"><a class="link__pdf" href="document.pdf" target="_blank" >About</a></li>
            <li class="footer__text--title-1"><a class="link__pdf" href="document.pdf" target="_blank">FAQ</a></li>
            <li class="footer__text--title-1"><a class="link__pdf" href="document.pdf" target="_blank">Work with Us</a></li>
          </ul>
        </span>
        <div class="footer__images">
          <a class="link__network" href="https://www.facebook.com" target="_blank"><img class="footer__image" src="images/facebook.png"></a>
          <a class="link__network" href="https://twitter.com/" target="_blank"><img class="footer__image" src="images/twitter.png"></a>
          <a class="link__network" href="https://mail.google.com" target="_blank"><img class="footer__image" src="images/message.png"></a>
        </div>
        <hr>
        <span class="footer__menu">
          <ul class="footer__list-2">
            <li class="footer__text--title-2">Privacy Policy</li>
            <li class="footer__text--title-2">|</li>
            <li class="footer__text--title-2">Terms and Conditions</li>
            <li class="footer__text--title-2">|</li>
            <li class="footer__text--title-2">© Company.LLC 2014</li>
          </ul>
      </div>
    </footer>
  </body>
