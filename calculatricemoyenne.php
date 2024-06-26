<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de Moyenne</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>.ml6 {
        position: relative;
        font-weight: 900;
        font-size: 2.5em;
      }
      
      .ml6 .text-wrapper {
        position: relative;
        display: inline-block;
        padding-top: 0.2em;
        padding-right: 0.05em;
        padding-bottom: 0.1em;
        overflow: hidden;
      }
      
      .ml6 .letter {
        display: inline-block;
        line-height: 1em;
      }</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand-logo" href="index.php"><img src="img/logo.jpg" alt="logo" style="max-height: 60px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="display: flex; justify-content: center;">
          <li class="nav-item">
            <a class="nav-link text-primary" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="fonctionnalité.php">Fonctionnalités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="contact.php">Contacts</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-primary" style="background-color: white; border: 1px solid blue; color: blue;"
            href="#">Calculer la
            moyenne</a>
        </li>
      </ul>
    </div>
  </nav>
  <hr>
  <br>
    <div class="container">
        <h1 class="ml6" style="display: flex; justify-content: center; color: rgb(0, 132, 255);">
            <span class="text-wrapper">
              <span class="letters">Calcul de moyenne</span>
            </span>
          </h1>
        <br>
        <form action="calcul_moyenne.php" method="post">
            <div class="form-group row">
                <label for="nom" class="col-sm-3 col-form-label">Nom & Prénoms de l'étudiant</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="nom" name="nom"
                        placeholder="Entrez le nom/prénom de l'étudiant">
                </div>
                <label for="nom" class="col-sm-3 col-form-label">E-mail de l'étudiant</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Entrez le mail de l'étudiant">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-php" class="col-sm-3 col-form-label">Note PHP</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-php" name="notePHP"
                        placeholder="Entrez la note en PHP">
                </div>
                <label for="coeff-php" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-php" name="coeffPHP"
                        placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-merise" class="col-sm-3 col-form-label">Note MERISE</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-merise" name="noteMerise"
                        placeholder="Entrez la note en Histoire">
                </div>
                <label for="coeff-merise" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-merise" name="coeffMerise"
                        placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-anglais" class="col-sm-3 col-form-label">Note Anglais</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-anglais" name ="noteAnglais" placeholder="Entrez la note en Anglais">
                </div>
                <label for="coeff-anglais" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-anglais"name ="coeffAnglais"  placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-francais" class="col-sm-3 col-form-label">Note Français</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-francais" name ="noteFrancais"
                        placeholder="Entrez la note en Français">
                </div>
                <label for="coeff-francais" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-francais"name ="coeffFrancais" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-algo" class="col-sm-3 col-form-label">Note Algorithmique</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-algo" name ="noteAlgo"
                        placeholder="Entrez la note en Algorithmique">
                </div>
                <label for="coeff-algo" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-algo" name ="coeffAlgo" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-js" class="col-sm-3 col-form-label">Note Javascript</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-js" name ="noteJS" placeholder="Entrez la note en Javascript">
                </div>
                <label for="coeff-histoire" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-js" name ="coeffJS"placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-bootstrap" class="col-sm-3 col-form-label">Note Bootstrap</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-bootstrap" name ="noteBootstrap"
                        placeholder="Entrez la note en Bootstrap">
                </div>
                <label for="coeff-bootstrap" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-bootstrap" name ="coeffBootstrap" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-html" class="col-sm-3 col-form-label">Note HTML</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-html" name ="noteHTML" placeholder="Entrez la note en HTML">
                </div>
                <label for="coeff-html" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-html" name ="coeffHTML" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-css" class="col-sm-3 col-form-label">Note CSS</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-css" name ="noteCSS" placeholder="Entrez la note en CSS">
                </div>
                <label for="coeff-css" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-css" name ="coeffCSS" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-wordpress" class="col-sm-3 col-form-label">Note Wordpress</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-wordpress" name ="noteWordpress"
                        placeholder="Entrez la note en Wordpress">
                </div>
                <label for="coeff-wordpress" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-wordpress" name ="coeffWordpress" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <label for="note-laravel" class="col-sm-3 col-form-label">Note Laravel</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="note-laravel" name ="noteLaravel" placeholder="Entrez la note en Laravel">
                </div>
                <label for="coeff-laravel" class="col-sm-3 col-form-label">Coefficient</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="coeff-laravel" name ="coeffLaravel" placeholder="Entrez le coefficient">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <button type="submit" name="calcul" class="btn btn-primary">CALCULER</button>
                </div>
            </div>
            <div class="text-center">
                <a href="index.php" class="btn btn-secondary">Retour à la page d'accueil</a>
            </div>
        </form>
    </div>
    <br>
    <hr>
    <footer class="footer bg-light py-4 text-center">
    <div class="container d-flex justify-content-around align-items-center">
      <span>© 2024 - Ma moyenne</span>
      <img src="img/logo facebook.png" alt="Facebook" class="img-fluid" style="max-height: 30px;">
      <img src="img/logo twitter.png" alt="Twitter" class="img-fluid" style="max-height: 30px;">
      <img src="img/logo instagram.png" alt="Instagram" class="img-fluid" style="max-height: 30px;">
    </div>
    
  </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>// Wrap every letter in a span
      var textWrapper = document.querySelector('.ml6 .letters');
      textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
      
      anime.timeline({loop: true})
        .add({
          targets: '.ml6 .letter',
          translateY: ["1.1em", 0],
          translateZ: 0,
          duration: 750,
          delay: (el, i) => 50 * i
        }).add({
          targets: '.ml6',
          opacity: 0,
          duration: 1000,
          easing: "easeOutExpo",
          delay: 1000
        });</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>