<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-3 mt-3">
        <img src="placeholder.com-logo2.png" class="w-100 h-100">
      </div>
      <div class="col-md-9 mt-3">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="#">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Connection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Location</a>
          </li>
        </ul>
      </div>
    </div>

    <form method="POST" action="">
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="col-12 form-group">
            <label for="inputEmail">Email </label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
              placeholder="jean@pierre.fr">

          </div>
          <div class="col-12 form-group">
            <label for="inputPassword">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
          </div>

          <div class="col-12 form-group">
            <label for="inputPassword2">Confirmation de votre mot de passe</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-12 form-group">
            <label for="inputName">Nom</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nom">
          </div>

          <div class=" col-md-12 form-group">
            <label for="inputPrenom">Prénom</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
          </div>

          <div class="col-md-12 form-group">
            <label for="inputAnniv">Date de naissance</label>
            <input type="date" class="form-control" name="inputAnniv" id="inputAnniv">
          </div>

          <div class="col-md-12 form-group">
            <label for="inputTel">N° de téléphone</label>
            <input type="text" class="form-control" id="inputTel" placeholder="0123456789">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class=" col-12 form-group">
            <label for="inputAdresse">Adresse 1</label>
            <input type="text" class="form-control" id="inputAdresse" placeholder="25 rue de Paris">
          </div>

          <div class="col-12 form-group">
            <label for="inputAdresse2">Adresse 2</label>
            <input type="text" class="form-control" id="inputAdresse2" placeholder="25 rue de Paris">
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-12 form-group">
            <label for="inputVille">Ville</label>
            <input type="text" class="form-control" id="inputVille" placeholder="Paris">
          </div>

          <div class="col-12 form-group">
            <label for="inputCp">Code Postal</label>
            <input type="text" class="form-control" id="inputCp" placeholder="12345">
          </div>
        </div>
        <div class="col-md-3">
        <div class="form-group mb-3">

          <label class="input-group-text" for="inputVilleLoc">Ville de location</label>

          <select class="custom-select" id="inputVilleLoc">

            <option value="1">Lille</option>
            <option value="2">Bordeaux</option>
            <option value="3">Marseille</option>
            <option value="4">Paris</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </form>
  </div>
  </div>
  </div>








  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>