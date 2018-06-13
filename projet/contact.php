<!DOCTYPE html>
<html>
  <head>
    <title>map</title>
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <meta charset="utf-8">
  </head>
  <body>
    <!-- INVOCATION DU MENU PRINCIPALE -->
    <div class="ariane">
      <label>vous êtes ici: </label><span>Contact</span>
    </div> 
    <!-- Menu vintage -->
    <header class="global ">
  <!-- Logo & searchbar -->
      <div class="container-12">      
          <article class="item-5c">
            <a href="accueil.html">
              <img class="header-logo" src="content/logo.png" alt=""/>
            </a>
          </article>
          <article class="item-5c push">
            <form method="post" action="traitement.php">
            <p class="search">
              <input  class="searchbar" type="text" name="pseudo" id="pseudo" placeholder="Que recherchez vous?"/>
              <input class="ok" type="submit" value="OK"/>
            </p>
            </form>
          </article>
      </div> 
      <!-- Nav vintage--> 
       <div class="container-12 none ">
       <article class="item-simple center">
      <a href="#">Accueil</a>
    </article>
    <article class="item-simple center">
      <a href="#">Meubles</a>
    </article>
    <article class="item-simple center">
      <a href="#">Luminaires</a>
    </article>
    <article class="item-simple center">
      <a href="#">Accessoires</a>
    </article>
    <article class="item-5cm-simple center">
      <a href="map.php">Contact</a>
    </article>
  </div> 
</header>     
  
    <div class="ariane">
      <label>vous êtes ici: </label><span> Catalogue</span>
    </div> 
    <main class="container-12 global">
      <div class="item-full">
        <article id="map"><!-- container google map -->
        </article>
      </div>
      <script>
        function initMap() {
          var location = {lat: 50.643063, lng: 5.560469};
          var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 16,
          center:location
          }); 
          var marker = new google.maps.Marker({
          position: location,
          map: map
          })
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdaOL_UEH1cKS8XouMDrZzmsxlLg4rtpc&callback=initMap"></script>   
      <!--
      ================================================== 
      #STYLES  MAIN > BLOCK CONTACT
      ==================================================
      -->
      <!-- Left-part -->
      <div class="item-4c">
        <div>
          <h2 class="item-full"> infos-contact !</h2>
        </div>
        <article>
          <h3>Adresse</h3>
          <p> 33 rue Saint-laurent 4000 Liège</p>
          <h3>Email</h3>
          <p> vintage@lab.com</p>
          <h3>tel</h3>
          <p> +32 4 223 11 31</p>
          <h3>Site</h3>
          <p> www.vlab.com</p>
        </article>
      </div>
      <!-- Right part -->
      <div class="item-8c  infos-contact ">
        <h2 class="item-full">contactez-nous !</h2>
        <div  class="form">
          <div class="l">
            <form name="inscription" method="post" action="#">
              <p>
              <label for="Nom">Nom: </label><input type="text" name="Nom" id="Nom" required="required">
              </p>
              <p>
              <label for="Prenom">Prénom: </label><input type="text" name="Prenom" id="Prenom" required="required">
            </p>
            <p>
              <label for="Email">Email:</label><input type="Email" name="Email" id="Email" required="required">
            </p>
            <span class="check1">
             <input type="checkbox" name="box1" id="box1" > <label for="box1">je désire recevoir la newsletters:</label></span>
            
            <div>
               <input class="envoyer"type="submit" value="Envoyer" />
              </div>
           </form>
          </div>
          <div class="r">
           <textarea class="commentaire none" name="ameliorer" placeholder="Un commentaire?" id="ameliorer"></textarea>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
