<?php include 'header.php' ?>
<?php session_destroy(); ?>


<!-- PRESENTATION -->
<div class="section-container presentation-container" id="presentation">

  <!-- MENU -->
  <div class="menu d-flex justify-content-end">
    <div id="overlay-content">
      <a href="#presentation" onclick=lien()><span class="items-a">Présentation</span></a>
      <a href="#competences" onclick=lien()><span class="items-a">Compétences</span></a>
      <a href="#realisations" onclick=lien()><span class="items-a">Réalisations</span></a>
      <a href="#contact" onclick=lien()><span class="items-a">Contact</span></a>
    </div>

    <div class="burger-menu burger-menu--closed">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>

  <!-- LOGO -->
  <!-- <div class="text-center">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 288 290.2" style="enable-background:new 0 0 288 290.2;" xml:space="preserve" width="288" height="290.20001220703125">
      <style type="text/css">
        .st0{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;}
        .st1{display:none;fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;}
        .st2{fill:#FFFFFF;}
        .st3{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
        .st4{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}
      </style>
      <g id="Calque_1">
        <polyline id="L" class="st0 svg-elem-1" points="90,85.9 90,182.5 121.9,182.4  "></polyline>
        <polyline id="H" class="st0 svg-elem-2" points="122,119.1 122,179.5 122,233.2   "></polyline>
        <polyline id="H_1_" class="st0 svg-elem-3" points="176.6,119.1 176.6,179.5 176.6,233.2  "></polyline>
        <line id="H_2_" class="st1 svg-elem-4" x1="122" y1="179.5" x2="182.6" y2="179.5"></line>
      <g>
        <path class="st2 svg-elem-5" d="M137.2,182.6c-1.7,0.2-3.4,0.3-5.1,0.4l-5.1,0.3c-1.7,0.1-3.4,0.3-5.1,0.2c-1.7-0.1-3.4-0.3-5.1-0.9v-0.2
          c1.7-0.6,3.4-0.8,5.1-0.9c1.7-0.1,3.4,0.1,5.1,0.2l5.1,0.3c1.7,0.1,3.4,0.2,5.1,0.4V182.6z"></path>
      </g>
      </g>
      <g id="Calque_2">
        <path id="line" class="st3 svg-elem-6" d="M187.3,151.7c-13.9,43.4-64.8,29.6-64.8,29.6"></path>
        <path id="f1" class="st4 svg-elem-7" d="M156.3,188c-5.4,0.9-5.2-2.1-5.2-2.1C155.2,185.5,156.3,188,156.3,188z"></path>
        <path id="t1" class="st3 svg-elem-8" d="M141.4,183.4c2.6,0.2,9.6,2.5,9.6,2.5"></path>
        <path id="f2" class="st4 svg-elem-9" d="M132,177.8c-1.9-5,3.6-6.6,3.6-6.6S136.1,178,132,177.8z"></path>
        <path id="t2" class="st3 svg-elem-10" d="M132,177.8c0,0-2.1,4.1-5.3,4.6c0,0,0,0,0,0"></path>
        <path id="f3" class="st4 svg-elem-11" d="M139.2,190.9c0,0-3.8-2.1-2.2-3.6C139.9,185.8,139.2,190.9,139.2,190.9z"></path>
        <path id="t3" class="st3 svg-elem-12" d="M133.1,183.2c3.1,1.9,3.9,4,3.9,4"></path>
        <path id="f4" class="st4 svg-elem-13" d="M144.4,175c-2.4-1.6,4.4-5.1,4.4-5.1S148.7,175,144.4,175z"></path>
        <path id="t4" class="st3 svg-elem-14" d="M144.4,175c0,0-2.8,5.9-8.8,7.8c0,0,0,0,0,0"></path>
        <path id="f5" class="st4 svg-elem-15" d="M158,176.4c-1.7-3.6,1.8-5.9,1.8-5.9S162.2,174.7,158,176.4z"></path>
        <path id="t5" class="st3 svg-elem-16" d="M152.1,182.4c4.7-1.5,5.9-6,5.9-6"></path>
        <path id="f6" class="st4 svg-elem-17" d="M171.2,185.1c0,0-4.3,0-5.1-3.6C169.4,179.5,171.2,185.1,171.2,185.1z"></path>
        <path id="t6" class="st3 svg-elem-18" d="M160.8,180.1c2.4-0.8,5.3,1.4,5.3,1.4"></path>
        <path id="f7" class="st4 svg-elem-19" d="M172.5,164.3c-4.6-0.4-2.4-5.9-2.4-5.9S174,162.1,172.5,164.3z"></path>
        <path id="t7" class="st3 svg-elem-20" d="M172.5,164.3c0,0,1.9,6-0.6,9.8"></path>
        <path id="f8" class="st4 svg-elem-21" d="M182.4,153.8c-3.3-1.1-2.3-3.9-2.3-3.9S183.7,151.6,182.4,153.8z"></path>
        <path id="f9" class="st4 svg-elem-22" d="M187.1,152c-1-2.8,1.3-3.5,1.3-3.5S189.2,151.8,187.1,152z"></path>
        <path id="t8" class="st3 svg-elem-23" d="M182.4,153.8c0,0,2.6,4.3,0.9,7.4"></path>
        <path id="t9" class="st4 svg-elem-24" d="M194.2,164.2c0,0-3.2,3.8-6.6,1.6C188,162.2,194.2,164.2,194.2,164.2z"></path>
        <path id="t10" class="st3 svg-elem-25" d="M187.6,165.9c0,0-8.1,1.2-10.1,3.2c0,0,0,0,0,0"></path>
        <path id="f11" class="st4 svg-elem-26" d="M185.5,176.4c0,0-3.9,0.1-6.4-1.9C181.3,170.8,185.5,176.4,185.5,176.4z"></path>
        <path id="t11" class="st3 svg-elem-27" d="M169.1,176.2c6.7-3.6,10-1.7,10-1.7"></path>
        <path id="f12" class="st4 svg-elem-28" d="M196.4,150.7c0,0-2.2,3.4-5.8,2.3C190.5,150.3,196.4,150.7,196.4,150.7z"></path>
        <path id="t12" class="st3 svg-elem-29" d="M185.8,155.7c0.9-2,4.8-2.7,4.8-2.7"></path>
      </g>
    </svg>
  </div> -->

  <div class="main-section">

    <div class="summary-section">
      <div class="elements">
        <p>01</p>
        <div class="border-line"></div>
        <h2>Présentation</h2>
      </div>
    </div>


    <div class="content-section">

      <div class="sub-title">
        <p>
          Hey ! <br>
          Je suis Laurine, <br>
          Développeuse web et webdesigner  
        </p>
      </div>
      <div class="sub-content">
        <p>
          J'ai 23 ans et je suis dijonnaise. Après avoir travaillé dans la vente, j'ai rejoins l'univers du développement web en suivant une formation à l'Access Code School. Je me suis découvert un attrait pour la création graphique : j'aime créer des illustrations, définir une identité visuelle, et développer ma créativité pour rendre les choses belles. Avec une envie d'apprendre de nouvelles choses, j'aime développer des sites internet et apprendre de nouveaux langages web.
        </p>
      </div>

    </div>

    <div class="sub-illustration">
      <img src="assets/images/photo-illustration.png" alt="illustration" oncontextmenu="return false" onmousedown="return false">
    </div>


  </div>

  <div class="arrow-presentation">
    <a href="#competences">
      <img src="assets/images/arrow.png" alt="">
    </a>
  </div>


</div>


<!-- COMPETENCES -->
<div class="section-container competences-container" id="competences">

  <div class="main-section">


    <div class="summary-section">
      <div class="elements">
        <p>02</p>
        <div class="border-line"></div>
        <h2>Compétences</h2>
      </div>
    </div>

    <div class="content-section">

      <div class="sub-title">
        <p>
            J'ai développé mes compétences lors de mon parcours en autodidacte et grâce à ma formation
        </p>
      </div>
      <div class="sub-content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card-competences p-3 bg-transparent text-center">
                <img src="assets/images/icone-fleur.png" alt="icone fleur" oncontextmenu="return false" onmousedown="return false">
                <div class="">
                  <h3>Front end</h3>
                  <div class="globale globale1">
                    <div class="front front1">
                      <p>J'aime rendre les choses belles, utiles, et agréables à regarder. Il est donc nécessaire d'avoir une belle interface !</p>
                    </div>
                    <div class="back back1">
                      <img src="assets/images/htmlwhite.png" alt="icone html">
                      <img src="assets/images/csswhite.png" alt="icone css">
                      <img src="assets/images/bootstrapwhite.png" alt="icone bootstrap">
                      <img src="assets/images/sasswhite.png" alt="icone sass">
                      <img src="assets/images/wordpresswhite.png" alt="icone wordpress">
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-competences p-3 bg-transparent text-center">
              <img src="assets/images/icone-arbre.png" alt="icone arbre" oncontextmenu="return false" onmousedown="return false">
                <div class="">
                  <h3>Back end</h3>
                  <div class="globale globale2">
                    <div class="front front2">
                      <p>Du beau c'est bien, mais j'apprécie aussi savoir ce qui se passe derrière, et rendre les choses dynamiques !</p>
                    </div>
                    <div class="back back2">
                      <img src="assets/images/javascriptwhite.png" alt="icone javascript">
                      <img src="assets/images/phpwhite.png" alt="icone php">
                      <img src="assets/images/symfonywhite.png" alt="icone symfony">
                      <img src="assets/images/mariadbwhite.png" alt="icone mariadb">
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-competences p-3 bg-transparent text-center">
              <img src="assets/images/icone-ampoule.png" alt="icone ampoule fleuris" oncontextmenu="return false" onmousedown="return false">
                <div class="">
                  <h3>Design et créativité</h3>
                  <div class="globale globale3">
                    <div class="front front3">
                      <p>Je prends plaisir à créer des illustrations, des logos, des maquettes d'interface, et bien d'autres visuels !</p>
                    </div>
                    <div class="back back3">
                      <img src="assets/images/illustratorwhite.png" alt="icone illustrator">
                      <img src="assets/images/photoshopwhite.png" alt="icone photoshop">
                      <img src="assets/images/indesignwhite.png" alt="icone indesign">
                      <img src="assets/images/xdwhite.png" alt="icone adobe xd">
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>

  <div class="arrow-center">
    <a href="#realisations">
      <img src="assets/images/arrow.png" alt="">
    </a>
  </div>


</div>

<!-- REALISATIONS -->
<div class="section-container realisation-container" id="realisations">

  <div class="main-section">

    <div class="summary-section">
      <div class="elements">
        <p>03</p>
        <div class="border-line"></div>
        <h2>Réalisations</h2>
      </div>
    </div>


    <div class="content-section">

      <div class="sub-title">
        <p>
          Mes réalisations 
        </p>
      </div>
      <div class="sub-content">
        <p>
          
        </p>
      </div>

    </div>


  </div>

  <div class="arrow-center">
    <a href="#contact">
      <img src="assets/images/arrow.png" alt="">
    </a>
  </div>


</div>


<!-- CONTACT -->
<div class="section-container contact-container" id="contact">

  <div class="main-section">

    <div class="summary-section">
      <div class="elements">
        <p>04</p>
        <div class="border-line"></div>
        <h2>Contact</h2>
      </div>
    </div>


    <div class="content-section">

      <div class="sub-title">
        <p>
          Contacte moi 
        </p>
      </div>
      <div class="sub-content">

        <div class="formulaire">

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
                <input class="form-control input-form" placeholder="Prénom *" type="text" name="user_firstname" id="firstname" value="" required pattern="^[A-Za-zÀ-ÿ '-]+$" max-maxlength="20">
              </div>
              <div class="form-group col-md-6 pl-3">
                  <input class="form-control input-form" placeholder="Nom *" type="text" name="user_name" id="name" value="" required pattern="^[A-Za-z '-]+$" max-maxlength="20">
              </div>
            </div>

            <div class="form-group">
              <input class="form-control input-form" placeholder="Adresse mail *" type="text" name="user_email" id="email" value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$">
            </div>

            <div class="form-group">
              <input class="form-control input-form" placeholder="Objet" type="text" name="user_object" id="object" value="" required>
            </div>

            <div class="form-group">
              <textarea class="form-control input-form" placeholder="Message *" name="user_message" rows="4" cols="80" required pattern="^[A-Za-z '-]+$" min-minlength="2"></textarea>
            </div>

            <div>
              <button class="bouton-submit btn btn-primary" type="submit" name="button">Envoyer</button>
            </div>

          </form>


          <div class="uk-divider-vertical"></div>

              


        </div>

      </div>

      <div class="info-media text-center">
        <div class="informations">
          <span class="pr-4"><img class="icon-location" src="assets/images/placeholder_1.png"  onmouseover="this.src='assets/images/placeholder_2.png'" onmouseout="this.src='assets/images/placeholder_1.png'" alt="icon location">
          <p>Dijon</p></span>
          <span class="pl-4"><img class="icon-phone" src="assets/images/smartphone.png"  onmouseover="this.src='assets/images/smartphone_2.png'" onmouseout="this.src='assets/images/smartphone.png'" alt="icon phone"><p><a href="tel=0651804225">06 51 80 42 25</a></p></span>
        </div>
        <div class="item-media">
          <a class="lien" href="https://www.linkedin.com/in/laurine-herard/" target="_blank"><img class="icon-linkedin" src="assets/images/linkedin_2.png"  onmouseover="this.src='assets/images/linkedin_1.png'" onmouseout="this.src='assets/images/linkedin_2.png'" alt="icon linkedin"></a>
          <a class="lien" href="https://github.com/laurinehrd" target="_blank"><img class="icon-github" src="assets/images/github_1.png" onmouseover="this.src='assets/images/github_2.png'" onmouseout="this.src='assets/images/github_1.png'" alt="icon github"></a>
          <a class="lien" href="https://www.pinterest.fr/laurineherarddw/" target="_blank"><img class="icon-pinterest" src="assets/images/pinterest.png" onmouseover="this.src='assets/images/pinterest_2.png'" onmouseout="this.src='assets/images/pinterest.png'" alt="icon pinterest"></a>
        </div>
      </div>

    </div>
  </div>

  <div class="arrow-to-top">
    <a href="#presentation">
      <img src="assets/images/arrow.png" alt="">
    </a>
  </div>

  


</div>






<!-- ************************MES PROJETS************************** -->

<!-- <div class="projet">

  <h2 class="h2blue" id="projets">Mes projets</h2>

  <div class="container">


    <div class="content-project" uk-filter="target: .js-filter">

      <ul class="uk-subnav uk-subnav-pill">
        <li class="uk-active" uk-filter-control><a href="#">Tous mes projets</a></li>
        <li uk-filter-control="[data-name='develop']"><a href="#">Développement web</a></li>
        <li uk-filter-control="[data-name='webdesign']"><a href="#">Webdesign</a></li>
        <li uk-filter-control="[data-name='illustrations']"><a href="#">Illustrations</a></li>
      </ul>

      <ul class="card-project js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
        <li data-name="develop">
          <a href="#flappybird" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img src="assets/images/flappy-bird.png" alt="image flappy bird">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-text-middle">
                  <h3 class="">Flappy Bird</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li data-name="webdesign">
          <a href="#refonte" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img  src="assets/images/pageaccueil.png" alt="image accueil tdou">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Refonte d'un site web</h3>
                </div>
              </div>
            </div>
          </a>        
        </li>
        <li data-name="develop">
          <a href="#themewp" uk-toggle>
              <div class="uk-card">
                <div class="uk-card-panel contour uk-transition-toggle">
                  <img  src="assets/images/themewp.png" alt="image du theme wp">
                  <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                    <h3 class="">WordPress</h3>
                  </div>
                </div>
              </div>
            </a>
        </li>
        <li data-name="illustrations">
          <a href="#" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img src="assets/images/Vik-compressor.jpg" alt="illustration Vik" oncontextmenu="return false" onmousedown="return false">                
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Vik</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li data-name="illustrations">
          <a href="#" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img src="assets/images/Preikestolen-compressor.jpg" alt="illustration Preikestolen" oncontextmenu="return false" onmousedown="return false">                
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Preikestolen</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li data-name="illustrations">
          <a href="#" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img src="assets/images/Bryggen.jpg" alt="illustration Bryggen" oncontextmenu="return false" onmousedown="return false">                
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Bryggen</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li data-name="webdesign" data-name="develop">
          <a href="#wpinegalite" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img  src="assets/images/wpinegalite.png" alt="bannière les écarts de rémunération">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Les écarts de rémunération</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
         <li data-name="illustrations">
          <a href="#">
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img src="assets/images/bryggen2.jpg" alt="illustration Bryggen minimaliste" oncontextmenu="return false" onmousedown="return false">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Bryggen</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li data-name="develop">
          <a href="#filesexplorer" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img  src="assets/images/files-explorer.png" alt="explorateur de fichiers">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Explorateur de fichiers</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li data-name="develop">
          <a href="#exemple" uk-toggle>
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img  src="" alt="">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Explorateur de fichiers</h3>
                </div>
              </div>
            </div>
          </a>
        </li>
         <li data-name="illustrations">
           <a href="#">
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
                <img src="assets/images/Kakashi.jpg" alt="illustration Kakashi" oncontextmenu="return false" onmousedown="return false">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Kakashi</h3>
                </div>
              </div>
            </div>
          </a>
        </li> -->
        <!-- <li data-name="illustrations">
           <a href="#">
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
              <img src="assets/images/Itachi.jpg" alt="illustration Itachi" oncontextmenu="return false" onmousedown="return false">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Itachi</h3>
                </div>
              </div>
            </div>
          </a>
        </li> -->
        <!-- <li data-name="illustrations">
           <a href="#">
            <div class="uk-card">
              <div class="uk-card-panel contour uk-transition-toggle">
              <img src="assets/images/Naruto.jpg" alt="illustration Naruto" oncontextmenu="return false" onmousedown="return false">
                <div class="titre-projet uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default">
                  <h3 class="">Naruto</h3>
                </div>
              </div>
            </div>
          </a>
        </li> 
      </ul>

    </div>

  </div> 

   modal 

   refonte 
  <div id="refonte" class="" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-outside uk-close-large" type="button" uk-close></button>

        <div class="pt-3">
          <img  src="assets/images/pageaccueil.png" alt="image accueil tdou">
        </div>

        <div class="text-center">
          <h2>Refonte d'un site web</h2>
        </div>


        <div class="container"> 

          <h3 class="text-uppercase">l'objectif</h3>
          <p>Elaborer une maquette Photoshop pour la refonte d'un site web. Le but était de le moderniser tout en respectant sa charte graphique et sa couleur dominante, le noir. </p>

          <h3 class="text-uppercase">le brief</h3>
          <p>Le site en question est un site internet spécialisé dans la vente de stickers de plaques d'immatriculation.</p>

          <h3 class="text-uppercase">le contexte</h3>
          <p>J'ai travaillé en équipe avec trois camarades de ma formation, nous nous sommes répartis les tâches et je me suis occupé de la page d'accueil.</p>

          <h3 class="text-uppercase">information</h3>
          <p>Il s'agit d'un projet fictif mais issu d'une réelle entreprise. Le logo du site est alors caché et remplacé par la mention "logo".</p>

          <h3 class="text-uppercase">les réalisations</h3>
          <p>Avec mon équipe nous avons élaboré la charte graphique. Pour les couleurs, nous avons repris la couleur dominante du logo, le noir, auquel nous sommes venu ajouter une touche de bleu pour le rappel de la couleur des produits, à savoir les stickers pour plaques d'immatriculation. <br>
          J'ai créé la maquette de la page d'accueil en utilisant Photoshop. J'ai disposé les éléments de manière déstructurés, aérés et dynamiques. J'ai imaginé les animations possibles avec un hover. J'ai également conçu la maquette pour la version mobile.</p>

          <h3 class="text-uppercase">les technologies</h3>
          <div class="modal-icones">
            <img src="assets/images/photoshop.png" alt="icone photoshop">
            <img src="assets/images/trello.png" alt="icone trello">
          </div>

        </div>

        <div class="text-center mt-5">
          <img class="w-50" src="assets/images/refonte.png" alt="image accueil refonte site web">

        </div>

        


    </div>
  </div>
   flappy bird 
  <div id="flappybird" class="" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-outside uk-close-large" type="button" uk-close></button>

        <div class="text-center">
          <img  src="assets/images/flappy-bird.png" alt="image flappy bird">
        </div>

        <div class="text-center">
          <h2>Clone du jeu Flappy Bird</h2>
        </div>

        <div class="container"> 

          <h3 class="text-uppercase">l'objectif</h3>
          <p>Création d'un mini jeu Flappy bird.</p>

          <h3 class="text-uppercase">le brief</h3>
          <p>Utilisation de Javascript. Gestion de la gravité, des collisions, du mouvement du personnage au clavier, et affichage du score.</p>

          <h3 class="text-uppercase">information</h3>
          <p>J'ai suivi un tuto pour réaliser le jeu.</p>

          <h3 class="text-uppercase">les réalisations</h3>
          <p>- Suivi d'un tuto pour comprendre les étapes à réaliser<br>
              - Choix des images<br>
              - Ajout de son au différentes actions (score incrémenté, bruit d'ailes du personnage, game over)<br>
              - Recréation du jeu en version Harry Potter</p>

          <h3 class="text-uppercase">les technologies</h3>
          <div class="modal-icones">
            <img src="assets/images/javascript.png" alt="icone javascript">
          </div>

        </div>

        <div class="text-center mt-5">
          <img class="w-50" src="" alt="">

        </div>

        <div class="text-center my-5 btn-modal">
          <p uk-margin>
            <a class="uk-button uk-button-primary uk-button-large" href="https://laurineh.promo-42.codeur.online/flappy-bird/" target="_blank">Voir</a>
          </p>
        </div>

    </div>
  </div>
   thème wp 
  <div id="themewp" class="" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-outside uk-close-large" type="button" uk-close></button>

        <div class="text-center">
          <img  src="assets/images/themewp.png" alt="image theme wordpress">
        </div>

        <div class="text-center">
          <h2>Création d'un thème WordPress</h2>
        </div>


        <div class="container"> 

          <h3 class="text-uppercase">l'objectif</h3>
          <p>Créer un thème WordPress en réalisant sa maquette, puis en l'intégrant avec WordPress.</p>

          <h3 class="text-uppercase">le brief</h3>
          <p>Utilisation des fonctions PHP de WordPress, rendre le contenu dynamique et personnalisable.</p>

          <h3 class="text-uppercase">information</h3>
          <p>Il s'agit d'un projet fictif de création de thème sans contenu particulier, le texte est alors généré en Lorem Ipsum.</p>

          <h3 class="text-uppercase">les réalisations</h3>
          <p>Création d'une maquette sur Adobe XD<br>
              - Choix des couleurs, typographies, et images<br>
              - Intégration de la maquette sur WordPress en créant un thème unique<br>
              - Création de Customs post-types</p>

          <h3 class="text-uppercase">les technologies</h3>
          <div class="modal-icones">
            <img src="assets/images/bootstrap.png" alt="icone Bootstrap">
            <img src="assets/images/wordpress.png" alt="icone WordPress">
            <img src="assets/images/php.png" alt="icone php">
            <img src="assets/images/xd.png" alt="icone adode XD">
          </div>

        </div>

        <div class="text-center my-5 btn-modal">
          <p uk-margin>
            <a class="uk-button uk-button-primary uk-button-large" href="#" target="_blank">Voir</a>
          </p>
        </div>

    </div>
  </div>
   wp ecarts remuneration 
  <div id="wpinegalite" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-outside uk-close-large" type="button" uk-close></button>

        <div class="text-center">
          <img  src="assets/images/wpinegalite.png" alt="image theme wordpress">
        </div>

        <div class="text-center">
          <h2>Les écarts de rémunération</h2>
        </div>


        <div class="container"> 

          <h3 class="text-uppercase">l'objectif</h3>
          <p>Développer un outil de communication pour sensibiliser sur l'importance de l'égalité professionnelle femmes / hommes.</p>

          <h3 class="text-uppercase">le brief</h3>
          <p>Le thème de ce projet est sur les écarts de rémunération.</p>

          <h3 class="text-uppercase">le contexte</h3>
          <p>J'ai travaillé en équipe avec deux camarades de ma formation, nous nous sommes répartis les tâches et je me suis occupé de la page d'accueil.</p>

          <h3 class="text-uppercase">les réalisations</h3>
          <p>Création d'une maquette sur Adobe XD<br>
              - Réalisation de la planche des tendances<br>
              - Création d'illustrations, visuels et animations<br>
              - Intégration sur WordPress avec contenu personnalisable<br>
              - Création de Customs post-types</p>

          <h3 class="text-uppercase">les technologies</h3>
          <div class="modal-icones">
            <img src="assets/images/bootstrap.png" alt="icone Bootstrap">
            <img src="assets/images/wordpress.png" alt="icone WordPress">
            <img src="assets/images/php.png" alt="icone php">
            <img src="assets/images/xd.png" alt="icone adode XD">
            <img src="assets/images/illustrator.png" alt="icone illustrator">
          </div>

        </div>

        <div class="text-center my-5 btn-modal">
          <p uk-margin>
            <a class="uk-button uk-button-primary uk-button-large" href="https://laurineh.promo-42.codeur.online/les-ecarts-de-remuneration/" target="_blank">Voir</a>
          </p>
        </div>

    </div>
  </div>
   files explorer 
  <div id="filesexplorer" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-outside uk-close-large" type="button" uk-close></button>

        <div class="text-center">
          <img  src="assets/images/files-explorer.png" alt="explorateur de fichiers">
        </div>

        <div class="text-center">
          <h2>Explorateur de fichiers</h2>
        </div>

        <div class="container"> 

          <h3 class="text-uppercase">l'objectif</h3>
          <p>Créer un explorateur de fichiers.</p>

          <h3 class="text-uppercase">le brief</h3>
          <p>Utiliser PHP pour les fonctionnalités, et styliser l'ensemble.</p>

          <h3 class="text-uppercase">le contexte</h3>
          <p>J'ai travaillé en binome avec une camarade de ma formation, où nous avons réalisé les tâches ensemble.</p>

          <h3 class="text-uppercase">information</h3>
          <p></p>

          <h3 class="text-uppercase">les réalisations</h3>
          <p>Création d'une maquette sur Adobe XD<br>
              - Détermination du style graphique : couleurs, images, icones, boutons<br>
              - Développement de fonctions PHP : affichage et navigation des dossiers, actions ouvrir, renommer, copier, coller des fichiers, afficher ou masquer les fichiers cachés, téléchargement de fichiers</p>

          <h3 class="text-uppercase">les technologies</h3>
          <div class="modal-icones">
            <img src="assets/images/php.png" alt="icone php">
            <img src="assets/images/javascript.png" alt="icone jevascript">
            <img src="assets/images/xd.png" alt="icone adode XD">
          </div>

        </div>

        <img src="assets/images/fe-basket.png" alt="explorateur de fichiers sur corbeille">

        <div class="text-center my-5 btn-modal">
          <p uk-margin>
            <a class="uk-button uk-button-primary uk-button-large" href="https://laurineh.promo-42.codeur.online/files-explorer/" target="_blank">Voir</a>
          </p>
        </div>

    </div>
  </div>



   fin modal 

</div>-->



</div>


<?php include 'footer.php'; ?>
