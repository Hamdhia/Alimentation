
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css1/styles.css">
  <link rel="stylesheet" href="css1/responsive.css">
  <link rel="stylesheet" href="css1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Bon Samaritin</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style="border-radius: 10px;" src="image/logoclinic.png" height="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="accueil">Acceuil</a>
          </li>
          <a class="nav-link active  fw-bold" aria-current="page" href="inscrip">Inscription</a>
          </li>
          <a class="nav-link active  fw-bold" aria-current="page" href="conn">Connexion</a>
          </li>
          
         @if(Auth::check()) 
         <a class="nav-link active  fw-bold" aria-current="page" href="produit">L'ajout d'un produit</a>
         @endif
          </li>
          </li>
          <a class="nav-link active  fw-bold" aria-current="page" href="index">Liste des produits</a>
          </li>
        </ul>
        <form class="d-flex" role="recherche">
          <input class="form-control me-2" type="recherche" placeholder="recherche" aria-label="recherche">
          <button class="btn btn-outline-success" type="submit"> <i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active ima height=''">
        <img src="img/Bon Samaritain.jpg" class="d-block w-100" alt="gallery-2 (1).jpg">
      </div>
      <div class="carousel-item">
        <img src="image/gallery-4 (1).jpg" class="d-block w-100" alt="gallery-4 (1).jpg" height="700px">
      </div>
      <div class="carousel-item">
        <img src="image/gallery-2 (1).jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="s1" >
    <div style="font-size: 20px; background-color: #eb7371;; color: white; padding: 7px 90px 7px 90px; border-radius: 20px ; margin-top: 30px; " >les produits laitiers</div>
    <div class="para1">
        <div class="petitpara"><p>Les messages et les appels privés vous permettent d'être vous-même, de discuter librement et de vous sentir proche des personnes qui comptent le plus pour vous, et ce, où qu'elles se trouvent dans le monde.
            Les messages et les appels privés vous permettent d'être vous-même, de discuter librement et de vous sentir proche des personnes. </p></div>
        <div class="ima1" ><img style="width: 100%; height: 360PX; border-radius: 20px;" src="img/lait4.jpg" alt=""></div>
    </div>
</div>


<div class="s1" >
    <div style="font-size: 20px; background-color: #eb7371;; color: white; padding: 7px 90px 7px 90px; border-radius: 20px ; margin-top: 30px; " >les fruits</div>
    <div class="para1">
    <div class="ima1" ><img style="width: 100%; height: 360PX; border-radius: 20px;" src="img/prune vert.jpg" alt=""></div>
   
        <div class="petitpara"><p>Les messages et les appels privés vous permettent d'être vous-même, de discuter librement et de vous sentir proche des personnes qui comptent le plus pour vous, et ce, où qu'elles se trouvent dans le monde.
            Les messages et les appels privés vous permettent d'être vous-même, de discuter librement et de vous sentir proche des personnes. </p></div>
       </div>
</div>

<div class="s1" >
    <div style="font-size: 20px; background-color: #eb7371;; color: white; padding: 7px 90px 7px 90px; border-radius: 20px ; margin-top: 30px; " >les legumes</div>
    <div class="para1">
        <div class="petitpara"><p>Les messages et les appels privés vous permettent d'être vous-même, de discuter librement et de vous sentir proche des personnes qui comptent le plus pour vous, et ce, où qu'elles se trouvent dans le monde.
            Les messages et les appels privés vous permettent d'être vous-même, de discuter librement et de vous sentir proche des personnes. </p></div>
        <div class="ima1" ><img style="width: 100%; height: 360PX; border-radius: 20px;" src="img/Legumes.jpg" alt=""></div>
    </div>
</div>










  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="script.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v16.0" nonce="4P6N0l7r"></script>

</body>

</html>