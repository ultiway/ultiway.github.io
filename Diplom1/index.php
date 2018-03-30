<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <meta charset="utf-8">
    <title>Favorit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
    <script language="javascript" type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
     $(document).ready( function(){
    		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
    						next:$('#lofslidecontent45 .lof-next') };

    		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
    												direction		: 'opacitys',
    											 	easing			: 'easeInOutExpo',
    												duration		: 1200,
    												auto		 	: false,
    												maxItemDisplay  : 4,
    												navPosition     : 'horizontal', // horizontal
    												navigatorHeight : 32,
    												navigatorWidth  : 80,
    												mainWidth:980,
    												buttons			: buttons} );
    	});
    </script>
    <script>
    function slowScroll(id){
        var offset= 0;
        $('html, body').animate({scrollTop: $(id).offset().top + offset},1500);
        return false;
      }
    </script>
  </head>
  <body class="page">
    <div class="page__cell-1">
      <header class="header">
        <a href="index.php"><img class="header__logo" src="images/favorit.png">
        <ul class="header__menu">
          <li class="header__list"><a class="link" href="#">Каталог</a></li>
          <li class="header__list"><a class="link" href="#">Заказ</a></li>
          <li class="header__list"><a class="link" href="#">Доставка</a></li>
          <li class="header__list"><a class="link__hover" href="javascript://0" onclick="slowScroll('#content-2')">О нас</a></li>
          <a class="header__link" href="#">Войти</a>
        </ul>
      </header>
    </div>
    <div class="content-1">
      <div class="content-1--space">
        <div id="container">
            <div id="lofslidecontent45" class="lof-slidecontent" style="width:980px; height:340px;">
              <div class="preload"><div></div></div>
       <!-- MAIN CONTENT -->
        <div class="lof-main-outer" style="width:980px; height:340px;">
          <ul class="lof-main-wapper">
            <li>
                  <img src="images/thumbl_980x340.png" title="Newsflash 2" >
                       <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 1" href="#Category-1">/ Newsflash 1 /</a> <i> — Monday, February 15, 2010 12:42</i></h3>
              <h2>Content of Newsflash 1</h2>
                      <p>The one thing about a Web site, it always changes! Joomla! makes it easy to add Articles, content,...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
             <li>
                <img src="images/thumbl_980x340_002.png" title="Newsflash 1" >
                   <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 2" href="#Category-2">/ Newsflash 2 /</a> 	<i> — Monday, February 15, 2010 12:42</i></h3>
                      <h2>Content of Newsflash 2</h2>
                      <p>Joomla! makes it easy to launch a Web site of any kind. Whether you want a brochure site or you are...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
             <li>
                <img src="images/thumbl_980x340_003.png" title="Newsflash 3" >
                  <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 3" href="#Category-3">/ Newsflash 3 /</a> 	<i> — Monday, February 15, 2010 12:42</i></h3>
                      <h2>Content of Newsflash 3</h2>
                      <p>With a library of thousands of free Extensions, you can add what you need as your site grows. Don't...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
              <li>

                <img src="images/thumbl_980x340_004.png" title="Newsflash 5" >
                  <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 4" href="#Category-4">/ Newsflash 4 /</a>	<i> — Monday, February 15, 2010 12:42</i></h3>
                      <h2>Content of Newsflash 4</h2>
                      <p>Joomla! 1.5 - 'Experience the Freedom'!. It has never been easier to create your own dynamic Web...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>

              <li>

                <img src="images/thumbl_980x340_005.png" title="Newsflash 5" >
                  <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 5" href="#">/ Newsflash 5 /</a>	<i> — Monday, February 15, 2010 12:42</i></h3>
                     <h2>Content of Newsflash 5</h2>
                      <p>Joomla! 1.5 - 'Experience the Freedom'!. It has never been easier to create your own dynamic Web...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
              <li>

                <img src="images/thumbl_980x340_006.png" title="Newsflash 5" >
                  <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 6" href="#">/ Newsflash 6 /</a>	<i> — Monday, February 15, 2010 12:42</i></h3>
                      <h2>Content of Newsflash 6</h2>
                      <p>Joomla! 1.5 - 'Experience the Freedom'!. It has never been easier to create your own dynamic Web...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
               <li>
                <img src="images/thumbl_980x340_007.png" title="Newsflash 5" >
                  <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 7" href="#">/ Newsflash 7 /</a>	<i> — Monday, February 15, 2010 12:42</i></h3>
                      <h2>Content of Newsflash 7</h2>
                      <p>Joomla! 1.5 - 'Experience the Freedom'!. It has never been easier to create your own dynamic Web...
                      <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
                <li>
                <img src="images/thumbl_980x340_008.png" title="Newsflash 8" >
                  <div class="lof-main-item-desc">
                      <h3><a target="_parent" title="Newsflash 8" href="#">/ Newsflash 8 /</a>	<i> — Monday, February 15, 2010 12:42</i></h3>
                      <h2>Content of Newsflash 8</h2>
                      <p>Joomla! 1.5 - 'Experience the Freedom'!. It has never been easier to create your own dynamic Web...
                        <a class="readmore" href="#">Read more </a>
                      </p>
                   </div>
              </li>
            </ul>
        </div>
        <!-- END MAIN CONTENT -->
          <!-- NAVIGATOR -->
          <div class="lof-navigator-wapper">
                  <div onclick="return false" href="" class="lof-next">Next</div>
                <div class="lof-navigator-outer">
                      <ul class="lof-navigator">
                         <li><img class="img-icon" src="images/thumbl_980x340.png"></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_002.png" ></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_003.png"></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_004.png"></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_005.png"></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_006.png"></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_007.png"></li>
                         <li><img class="img-icon" src="images/thumbl_980x340_008.png"></li>
                      </ul>
                </div>
                  <div onclick="return false" href="" class="lof-previous">Previous</div>
           </div>
            <!----------------- --------------------->
           </div>
          <script type="text/javascript">

          </script>

          </div>
        </div>
      </div>
    <div id="content-2">
      <div class="content__text">
        <p class="content__text--caption-1">O HAC</p>
      </div>
      <div class="content__text--left">
        <p class="content__text--caption-2">В нашем магазине вы найдете:</p>
        <ul class="content__menu">
          <li><p class="content__text--title">Широкий ассортимент</p>
          <li><p class="content__text--title">Гарант хорошего качества</p>
          <li><p class="content__text--title">Оплата удобным Вам способом</p>
          <li><p class="content__text--title">Быстрая доставка по всей стране</p>
        </ul>
      </div>
    </div>
    <div class="content-3">
      <div class="cell"></div>
      <div class="content__text--right">
        <p class="content__text--caption-2">Наши специалисты предоставляют:</p>
        <ul class="content__menu">
          <li><p class="content__text--title">Выполнение заказа на Ваш вкус и цвет</p>
          <li><p class="content__text--title">Минимум затрат</p>
          <li><p class="content__text--title">Высокая скорость сборки</p>
        </ul>
      </div>
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
