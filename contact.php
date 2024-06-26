<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>.ml6 {
    position: relative;
    font-weight: 900;
    font-size: 3.3em;
    
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
            <a class="nav-link text-primary" href="#">Contacts</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-primary" style="background-color: white; border: 1px solid blue; color: blue;"
            href="calculatricemoyenne.php">Calculer la
            moyenne</a>
        </li>
      </ul>
    </div>
  </nav>
  <hr class="my-4">
  <div class="container">
    <div class="d-flex justify-content-center mt-5">
      <h1 class="ml6" style="color: rgb(0, 132, 255);">
        <span class="text-wrapper">
          <span class="letters">Contact</span>
        </span>
      </h1>
    </div>
    <form action="mailcontact.php" method="post">
      <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email">
      </div>
      <div class="form-group">
        <label for="phone">Téléphone</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Entrez votre message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>    
  </div>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>