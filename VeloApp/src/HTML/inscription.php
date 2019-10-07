<?php require 'src\Models\Form_element.php';
      
?>


    <form method="POST" action="addUser">
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="col-12 form-group">
            <?php
            $inputEmail = new Form_element();
            echo $mail = $inputEmail->inputText("inputEmail", "email", "jean@pierre.fr", "", "Email");
            ?>
          </div>
          <div class="col-12 form-group">
            <?php
            $inputMotdepasse = new Form_element();
            echo $motdepasse = $inputMotdepasse->inputText("inputPassword", "password", "Mot de passe", "", "Mot de passe");
            ?>
          </div>

          <div class="col-12 form-group">
            <?php
            $inputMotdepasse2 = new Form_element();
            echo $motdepasse2 = $inputMotdepasse2->inputText("inputPassword2", "password", "Password", "", "Confirmation de votre mot de passe");
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-12 form-group">
            <?php
            $inputName = new Form_element();
            echo $name = $inputName->inputText("inputName", "text", "Nom", "", "Nom");
            ?>
          </div>

          <div class=" col-md-12 form-group">
            <?php
            $inputPrenom = new Form_element();
            echo $prenom = $inputPrenom->inputText("inputPrenom", "text", "Prénom", "", "Prénom");
            ?>
          </div>

          <div class="col-md-12 form-group">
            <?php
            $inputAnniv = new Form_element();
            echo $anniv = $inputAnniv->inputText("inputAnniv", "date", "", "", "Date de naissance");
            ?>
          </div>

          <div class="col-md-12 form-group">
            <?php
            $inputTel = new Form_element();
            echo $tel = $inputTel->inputText("inputTel", "text", "0123456789", "", "N° de téléphone");
            ?>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class=" col-12 form-group">
            <?php
            $inputAdresse = new Form_element();
            echo $adresse = $inputAdresse->inputText("inputAdresse", "text", "25 rue de Paris", "", "Adresse 1");
            ?>
          </div>

          <div class="col-12 form-group">
            <?php
            $inputAdresse2 = new Form_element();
            echo $adresse2 = $inputAdresse2->inputText("inputAdresse", "text", "25 rue de Paris", "", "Adresse 2");
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-12 form-group">
            <?php
            $inputVille = new Form_element();
            echo $ville = $inputVille->inputText("inputVille", "text", "Paris", "", "Ville");
            ?>

          </div>

          <div class="col-12 form-group">
            <?php
            $inputCp = new Form_element();
            echo $cp = $inputCp->inputText("inputCp", "text", "12345", "", "Code Postal");
            ?>
          </div>
        </div>
        <!--<div class="col-md-3">
        <div class="form-group mb-3">

          <label class="input-group-text" for="inputVilleLoc">Ville de location</label>

          <select class="custom-select" id="inputVilleLoc">

            <option value="1">Lille</option>
            <option value="2">Bordeaux</option>
            <option value="3">Marseille</option>
            <option value="4">Paris</option>
          </select>
        </div>-->
        <?php
        $button = new Form_element();
        echo $but = $button->inputButton("btn btn-primary", "Envoyer");
        ?>
      </div>
    </form>
  </div>
  
  








  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>