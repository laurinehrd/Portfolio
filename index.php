<?php include 'header.php' ?>
<?php session_destroy(); ?>

<a href="#"><img class="logo" id="logoIni" src="assets/images/logo-ini-min.png" alt=""></a>
<a href="#"><img class="logo logo-big" id="logoBig" src="assets/images/logo-min.png" alt=""></a>

<!-- <div class="header-bg uk-background-cover uk-light uk-flex" uk-parallax="bgy: -500"> -->
<div class="header-bg uk-background-fixed uk-light uk-background-cover">

  <div class="banner">
  <!-- ********************TYPPING EFFECT*********************** -->
      <div class="wrapper">
        <span class=""><h1 class="home_name">Laurine HERARD</h1></span>
        <div data-text></div>
        <span class="item1">Développeuse web</span>
        <span class="item1">Webdesigner</span>
      </div>

      <a class="btn-decouvrir uk-button uk-button-default" href="#découvrir">Me découvrir</a>

  </div>

</div>

<!-- ***************************ABOUT ME**************************** -->

<div class="container">

  <h2 class="text-center" id="découvrir">Me découvrir</h2>
  <div class="row">

    <div class="col-sm-5 pr-5">
      <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body">
        <img src="assets/images/post2.jpg" alt="">
      </div>
    </div>

    <div class="col-sm-7 pl-5">
      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>
        <ul class="uk-slideshow-items">
            <li class="py-4 px-3">
              <div class="uk-card uk-card-default uk-card-hover uk-card-large uk-card-body">
                <h3 class="uk-card-title">Mon profil <br></h3>
                <p>Hello ! Et bienvenue sur mon portfolio.<br> Je m'appelle Laurine, je suis dijonnaise et future développeuse web. J'aime beaucoup créer des illustrations, des visuels esthétiques, et apprendre chaque jour de nouvelles choses, c'est pourquoi je me suis reconvertie dans le milieu du développement web et webdesign.</p>
              </div>
            </li>
            <li class="py-4 px-3">
              <div class="uk-card uk-card-default uk-card-hover uk-card-large uk-card-body">
                <h3 class="uk-card-title">Avant le développement</h3>
                <p>Avant ma reconversion dans le web, j'ai travaillé dans la vente après avoir obtenu mon BTS MUC (Management des Unités Commerciales).<br>
                Mes expériences dans le commerce m'ont apportés certaines compétences :</p>
                <!-- <p class="compétences">l'autonomie - le travail en équipe - les responsabilités - savoir être à l'écoute</p> -->
              </div>
            </li>
            <li class="py-4 px-3">
              <div class="uk-card uk-card-default uk-card-hover uk-card-large uk-card-body">
                <h3 class="uk-card-title">Mes passions/illustrations</h3>
                <p>Pendant ma reconversion, je me suis initiée au graphisme et je me suis trouvée une passion : créer des illustrations (avec un petit crush pour le flat design). Pour trouver l'inspiration, je me suis alliée avec mes autres centres d'intérêts : les voyages et la nature.<br>
                Mes illustrations</p>
                <!-- <p class="compétences">Photoshop - Illustrator - Indesign - Webdesign</p> -->
              </div>
            </li>
            <!-- <li class="py-4 px-3">
              <div class="uk-card uk-card-default uk-card-hover uk-card-large uk-card-body">
                <h3 class="uk-card-title">Pour m'aider dans l'ascension de cette montagne, j'ai rejoins la formation Access Code School.</h3>
                <p>Au programme : maitrise des outils de conception web et multimédia, en vue d'atteindre le titre professionnel de développeur web et webdesign.</p>
                <p class="compétences">Développement - Développement mobile - Intégration web - Base de données - Gestion de projet</p>
                <p>(PHP - JS) (Site web responsive) (HTML, CSS à partir de maquette graphiques) (MySQL) (Projet en groupe/autonomie)</p>
              </div>
            </li> -->
        </ul>

        <div class="icon-fleche text-center">
          <a class="flecheIcon uk-position-medium my-0" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
          <a class="flecheIcon uk-position-medium my-0" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>

      </div>
    </div>
  </div>
</div>










<svg xmlns="http://www.w3.org/2000/svg" width="860" height="460">
  <path class="path" fill="#fff" stroke="#000" stroke-width="0.1rem" stroke-miterlimit="0" d="M201.342 345.5l127.215-119.541 31.013 19.027 57.595-44.284 18.354 13.301 99.367-31.087L731.089 345.5z"/>
</svg>













<!-- ************************CAROUSEL************************** -->



<div class="carousselIllustrations uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid">
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
              <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/Preikestolen-compressor.jpg" alt="">
              <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small ">Preikestolen</h3></div>
          </div>
        </li>
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
            <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/Bryggen.jpg" alt="">
            <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small">Bryggen</h3></div>
          </div>
        </li>
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
            <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/Vik-compressor.jpg" alt="">
            <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small">Vik</h3></div>
          </div>
        </li>
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
            <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/bryggen2.jpg" alt="">
            <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small">Bryggen</h3></div>
          </div>
        </li>
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
            <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/Kakashi.jpg" alt="">
            <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small">Kakashi</h3></div>
          </div>
        </li>
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
            <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/Itachi.jpg" alt="">
            <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small">Itachi</h3></div>
          </div>
        </li>
        <li class="uk-transition-toggle" tabindex="0">
          <div class="uk-panel p-2">
            <img class="uk-transition-scale-up uk-transition-opaque" src="assets/images/Naruto.jpg" alt="">
            <div class="uk-position-center"><h3 class="uk-transition-slide-bottom-small">Naruto</h3></div>
          </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>



<!-- ********************FORMULAIRE************************** -->
<div class="formulaire">
  <div class="container">
    <h2 class="title_meContacter">Me contacter</h2>

    <?php if(isset($_SESSION['errors'])){
    ?>
      <div class="alert alert-danger">
        <?= implode('<br>', $_SESSION['errors']);
        var_dump($_SESSION['errors']);


        ?>
      </div>
    <?php
      }

     if(isset($_SESSION['success'])){

    ?>

      <div class="alert alert-success">
        <p>Email bien envoyé !</p>
      </div>
    <?php
      }
  ?>


      <form action="contact.php" method="post">

        <div class="form-row d-flex">
          <div class="form-group col-md-6 pr-3">
            <label for="firstname">Prénom :</label>
            <input class="form-control input-form" type="text" name="user_firstname" id="firstname" value="" required pattern="^[A-Za-zÀ-ÿ '-]+$" max-maxlength="20">
          </div>
          <div class="form-group col-md-6 pl-3">
              <label for="name">Nom :</label>
              <input class="form-control input-form" type="text" name="user_name" id="name" value="" required pattern="^[A-Za-z '-]+$" max-maxlength="20">
          </div>
        </div>

        <div class="form-group">
          <label for="email">Adresse mail :</label>
          <input class="form-control input-form" type="text" name="user_email" id="email" value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$">
        </div>

        <div class="form-group">
          <label for="object">Objet :</label>
          <input class="form-control input-form" type="text" name="user_object" id="object" value="" required>
        </div>

        <div class="form-group">
          <label for="msg">Message :</label>
          <textarea class="form-control input-form" name="user_message" rows="4" cols="80" required pattern="^[A-Za-z '-]+$" min-minlength="2"></textarea>
        </div>

        <div>
          <button class="btn btn-primary" type="submit" name="button">Envoyer le message</button>
        </div>

      </form>
  </div>
</div>



<?php include 'footer.php'; ?>
