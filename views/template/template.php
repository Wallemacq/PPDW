<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="/css/style.css" rel="stylesheet">
    <title>Yankee Candle</title>
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <main>
        <h1 class="visually-hidden">Headers examples</h1>
        
        <div class="container">
          <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-4">YankeeCandle</span>
            </a>
            <div class="search">
<form action = "verif-form.php" method = "get">
<input type = "search" name = "terme">
<input type = "submit" name = "s" value = "Rechercher">
</form>
</div>

            <ul class="nav nav-pills">
              <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Accueil</a></li>
              <li class="nav-item"><a href="Produits" class="nav-link">Produits</a></li>
              <!-- <li class="nav-item"><a href="#" class="nav-link">Prix</a></li> -->
              <!-- <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li> -->
              <!-- <li class="nav-item"><a href="#" class="nav-link">Personnel</a></li> -->
            </ul>
          </header>
          <section id="content" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    if(!empty($errorMessage)){
                        include('error.php');
                    }
                    ?>
                    <div>
                        <?php echo $content; ?>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 WallCompany, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Accueil</a></li>
          <li class="nav-item"><a href="produits.php" class="nav-link px-2 text-muted">Produits</a></li>
          <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Prix</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Personnel</a></li>
        </ul> -->
      </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>