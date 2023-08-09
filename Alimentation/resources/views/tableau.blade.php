<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>ajout</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
   <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    

    <!-- Bootstrap core CSS -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('signin1.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">

<div class=" bloc1">
  <form action="{{ route('storeproduit') }}" style="margin-top:20px" method="POST" enctype="multipart/form-data">
      @csrf
    <!-- <img class="" src="{{ asset('assets/brand/logo_rire.jpg') }}" alt="" width="150" height="100" style="margin-bottom:-35px"> -->
    <h1 class="h3 mb-5 fw-normal"><strong>L'ajout d'un produit</strong></h1>

    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="nom du produit"  style="border-radius:20px">
      <label for="name">Nom du produit</label>
      @error('name')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> <br>

    <div class="form-floating">
      <input type="number" class="form-control @error('name') is-invalid @enderror" value="{{ old('prix') }}" id="prix" name="prix" placeholder="prix"  style="border-radius:20px">
      <label for="prix">Prix du produit</label>
      @error('prix')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> 

    <!-- <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="prenom" placeholder="your name"  style="border-radius:20px">
      <label for="name">votre prenom</label>
      @error('prenom')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> -->
    <div class=" form-floating">
            <label  for="photo" class="form-label mt-1">Photo:</label> <br>
            <input type="file" class="form-control" name="photo" id="photo">
    </div><br>
    
    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('description') }}" id="name" name="description" placeholder="la description"  style="border-radius:20px">
      <label for="name">Description du produit</label>
      @error('description')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div><br>



    
    <div class="form-floating">
      <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" style="border-radius: 20px">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->nom }}</option>
      @endforeach
    <!-- Ajoutez plus d'options ici si nécessaire -->
    </select>
      <label for="email"> Choisir category </label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> <br>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit"style="background-color:rgb(134, 10, 10);color:white;border-radius:20px;border:none;">Enregistrer</button>
    
       
    
    
  </form>
  <!-- <div><img class="mt-5 imrire " src="{{ asset('assets/brand/imrire.png') }}" alt="" style="height:400px;width:400px;"></div> -->
  </div> 
  </div>
</main>


<script src="{{ asset('assets/dist/js/script.js') }}"></script>
  </body>
</html>










<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion en HTML & CSS - Frenchcoder</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link  href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <form method="post" action='{{route("conn")}}'    >
    @csrf 
    <h1>Connexion</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
   
    
    <div class="texte">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="nom du produit"  style="border-radius:20px">
      <label for="name">Nom du produit</label>
      @error('name')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> <br>    

    <div class="texte">
      <input type="number" class="form-control @error('name') is-invalid @enderror" value="{{ old('prix') }}" id="prix" name="prix" placeholder="prix"  style="border-radius:20px">
      <label for="prix">Prix du produit</label>
      @error('prix')
      <div class="texte">
      {{ $message }}
      </div>
      @enderror
    </div>

    <!-- <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="prenom" placeholder="your name"  style="border-radius:20px">
      <label for="name">votre prenom</label>
      @error('prenom')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div> -->
    <divclass="inputs">
            <label  for="photo" class="form-label mt-1">Photo:</label> <br>
            <input type="file" class="form-control" name="photo" id="photo">
    </div><br>
    
    <div class="texte">
      <input type="text-long" class="form-control @error('name') is-invalid @enderror" value="{{ old('description') }}" id="name" name="description" placeholder="la description"  style="border-radius:20px">
      <label for="name">Description du produit</label>
      @error('description')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div><br>



    
    <div class="texte">
      <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" style="border-radius: 20px">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->nom }}</option>
      @endforeach
    <!-- Ajoutez plus d'options ici si nécessaire -->
    </select>
      <label for="email"> Choisir category </label>
      @error('email')
      <div class="texte">
      {{ $message }}
      </div>
      @enderror
    </div> <br>
    
    
       
    
    
  </form>
  <!-- <div><img class="mt-5 imrire " src="{{ asset('assets/brand/imrire.png') }}" alt="" style="height:400px;width:400px;"></div> -->
  </div> 
  </div>
</main>

    
      <button type="submit">S'enregistrer</button>
    </div>
  </form>
</body>
</html>




























