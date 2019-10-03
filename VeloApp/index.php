<?php require 'src/HTML/nav.php'; ?>
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
  <div class="container bg-warning">
    <?php include 'nav.php'; ?>
    <div class="row mt-3 mx-3">
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselIndicators" data-slide-to="1"></li>
          <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="libs/img/p6pb14228084.jpg" class="d-block w-100" alt="imagevelo1">
          </div>
          <div class="carousel-item">
            <img src="libs/img/orig_397440.jpg" class="d-block w-100" alt="imagevelo2">
          </div>
          <div class="carousel-item">
            <img src="libs/img/photo-636032526321165962-2.jpg" class="d-block w-100" alt="imagevelo3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="row mt-2 mb-2">
      <div class="col-md-12 text-center">
        <h2></h2>
        <p>Envie d'une balade en vélo? Ou vous preférez utiliser le vélo pour vos trajets quotidiens? Vous visiter?</p>
        <p>N'hésitez pas à reserver votre velo, que ce soit pour une heure ou un forfait, vous trouverez votre bonheur
          chez nous</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, quibusdam quidem. Quam perferendis dolorem
          delectus ipsum,
          animi quasi veritatis ipsam ex similique? Quis voluptatibus repudiandae blanditiis corporis! Corrupti dolor
          nam est, quos
          similique sed tempora distinctio earum.
          Quod veritatis fuga dolore, reprehenderit dolorem rerum quos ex delectus magni! Ex, magni?</p>
      </div>
    </div>

    <div class="row mt-2 container">

      <div class="col border ">
        <img class="card-img-top" src="libs/img/300C.png" alt="Card image cap">
        <div class="card-body ">
          <div class="row">
            <div class="col-md-8 " >
              <h5 class="card-title">Forfait hebdomadaire</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.

              </p>

            </div>
            <div class="col-md-4 ">
              <span class="badge badge-pill badge-dark">50€/semaine</span>
            </div>
          </div>
          <div class="row  ">
            <div class="offset-3"></div>
            <button type="button" class="btn btn-danger col-6  ">Commander</button>
          </div>
        </div>
      </div>

      <div class="col border ">
        <img class="card-img-top" src="libs/img/300C.png" alt="Card image cap">
        <div class="card-body ">
          <div class="row">
            <div class="col-md-8 " >
              <h5 class="card-title">Forfait mensuel</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.

              </p>

            </div>
            <div class="col-md-4 ">
              <span class="badge badge-pill badge-dark">150€/mois</span>
            </div>
          </div>
          <div class="row  ">
            <div class="offset-3"></div>
            <button type="button" class="btn btn-danger col-6  ">Commander</button>
          </div>
        </div>
      </div>


      <div class="col border ">
        <img class="card-img-top" src="libs/img/300C.png" alt="Card image cap">
        <div class="card-body ">
          <div class="row">
            <div class="col-md-8 " >
              <h5 class="card-title">Forfait annuel</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.

              </p>

            </div>
            <div class="col-md-4 ">
              <span class="badge badge-pill badge-dark">1500€/an</span>
            </div>
          </div>
          <div class="row  ">
            <div class="offset-3"></div>
            <button type="button" class="btn btn-danger col-6  ">Commander</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      
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