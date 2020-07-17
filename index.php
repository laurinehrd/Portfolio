<?php include 'header.php' ?>

<div class="banner">
<!-- typping effect -->
    <div class="wrapper">
      <h1>Laurine HERARD</h1>
      <div data-text></div>
      <span class="item">Développeuse web</span>
      <span class="item">Webdesigner</span>
    </div>
</div>



<!-- FORMULAIRE -->

<div class="container">
  <h1 class="title_meContacter">Me contacter</h1>

  <?php if(isset($_SESSION['errors'])){
  ?>
    <div class="alert alert-danger">
      <?= implode('<br>', $_SESSION['errors']); ?>
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

 if(isset($_SESSION['pbmail'])){
  ?>
    <div class="alert alert-danger">
      <?= $_SESSION['pbmail'] ?>
    </div>
  <?php
    }
  ?>


    <form action="contact.php" method="post">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstname">Prénom :</label>
          <input class="form-control input-form" type="text" name="user_firstname" id="firstname" value="" required pattern="^[A-Za-zÀ-ÿ '-]+$" max-maxlength="20">
        </div>
        <div class="form-group col-md-6">
            <label for="name">Nom :</label>
            <input class="form-control input-form" type="text" name="user_name" id="name" value="" required pattern="^[A-Za-z '-]+$" max-maxlength="20">
        </div>
      </div>

      <div class="form-group">
        <label for="email">Adresse mail :</label>
        <input class="form-control input-form" type="text" name="user_email" id="email" value="" >
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










<?php include 'footer.php'; ?>
