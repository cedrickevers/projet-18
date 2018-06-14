<!DOCTYPE html>
<html>
  <head>
    <title>contact isl</title>
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <meta charset="utf-8">
  </head>
  <body>
    <!-- INVOCATION DU MENU PRINCIPALE -->
       <?php include('menu.html'); ?>  
      <div class="ariane">
        <label>vous êtes ici:</label><a href="index.php" >&nbsp; &gt; &nbsp; accueil</a><a href="Contact.php"> &nbsp; &gt; &nbsp; contact</a> 
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
             <input type="checkbox" name="box1" id="box1" checked="checked" > <label for="box1">je désire recevoir la newsletters:</label></span>
            
            <div>
               <input class="envoyer" type="submit"  value="Envoyer" />
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
