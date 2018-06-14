<!DOCTYPE html>
<html>
  <head>
    <title>catalogue</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/catalogue.css"> 
  </head>
  <body>
    <!-- INVOCATION DU MENU PRINCIPALE -->
    <?php include('menu.html'); ?>
      <div class="ariane">
        <label>vous êtes ici:</label><a href="index.php" >&nbsp; &gt; &nbsp; accueil</a><a href="catalogue.php"> &nbsp; &gt; &nbsp; catalogue</a>
      </div> 
    <main class="global">
    <section class="container-12 principal ">
        <nav class=" container-left container-12">
          <ul>
            <li class="t-item"><a href="#">Chaises</a></li>
            <li class="none">
              <ul>
                <li class="u-item"><a href="#">Cusine</a></li> 
                <li class="u-item"> <a href="#">Salle à manger</a></li>
              </ul>
            </li> 
          </ul>
          <ul>
            <li class="t-item"><a href="#">Tables</a></li> 
            <li class="none">   
              <ul>
                <li class="u-item"><a href="#">Basse</a></li>
                <li class="u-item"><a href="#">Haute</a></li>
                <li class="u-item"><a href="#">Chevet</a></li>
                <li class="u-item"><a href="#">desserte</a></li>
              </ul>
            </li>       
          </ul> 
          <ul>
            <li class="t-item"><a href="#">Armoires</a></li>
          </ul> 
          <ul>
            <li class="t-item"><a href="#">Tables</a></li>
          </ul> 
        </nav>
        <!--  main block articles -->
        <div class=" article-mobile container-12 container-right">
          <div class=" item-6c item-4c chaise  ">
            <a href="detail-Bombay.php">
              <img class=" none" src="content/CHR-59.jpg" alt="2" />
              <h1>Bombay</h1>
              <p> Chaise de bar industrielle bombay. Le siège en cuir n'est pas complètement fini, donnant aux chaises un joli look vintage! Un design cool que vous pouvez combiner avec par exemple une table en bois.  <br/></p>
              <p class="prix"> prix 139 €</p>
            </a>
          </div> 
            <div class=" item-6c item-4c chaise">
            <a href="detail-kima-acier.php">
              <img class="none" src="content/IMG_5792_275x275.jpg" alt="" />
              <h1>Kima Acier</h1>
              <p> Une belle chaise de fil d'acier avec un design lisse et solide. Sans pareil et un vrai eye-attachant à votre table.<br/></p>
              <p class="prix"> prix 120 €</p>
            </a>
          </div>
          <div class=" item-6c item-4c chaise ">
            <a href="$">
              <img class="none" src="content/IMG_06579_275x275.jpg" alt="" />
              <h1>Peaky blues</h1>
              <p>Lovely pour s'assoir et belle à regarder! Les chaises de salle à manger ne devraient pas seulement être confortables, ils doivent aussi avoir l'air bien moderne et bien ajusté</p>
              <p class="prix"> prix 89 €</p>
            </a>
          </div>
          <div class=" item-6c item-4c chaise ">
            <a href="#">
              <img class="none" src="content/IMG_3291_275x275.jpg" alt="" />
              <h1> DSW Red</h1>
              <p>Pour ceux qui veulent être à l'aise et à la mode. Avec le siège DSW Style, vous êtes bon!  Une chaise desin, facile et confortable qui, sans le vouloir attirer l'attention, s'adapte.</p>
              <p class="prix"> prix 99 €</p>
            </a>
          </div>
          <div class=" item-6c item-4c chaise">
            <a href="$">
              <img class="section-img none" src="content/IMG_5793_275x275.jpg" alt="" />
              <h1>V bar</h1>
              <p>Une belle chaise de barre en acier avec un design lisse et solide. Sans pareil et un vrai eyecactcher à votre table de barre!</p>
              <p class="prix"> prix 110 €</p>
            </a>
          </div>
          <div class=" item-6c item-4c chaise">
            <a href="$">
              <img class="section-img none" src="content/bert-jn-zw_275x275.jpg" alt="" />
              <h1>Pezi</h1>
              <p>LA chaise Pezi est un siège de fil très serré et peut être dans différents styles d'intérieur.</p>
              <p class="prix"> prix 89 €</p>
            </a>
          </div>
          <div class=" item-6c item-4c chaise ">
              <a href="$"><img class="section-img none" src="content/IMG_1898_275x275.jpg" alt="" />
              <h1>Tulip</h1>
              <p>Cette chaise design est connue pour son siège en forme de tulipe spécifique.L'habitacle magnifiquement formé est équipé d'un coussin mou et donc très confortable.LE cockpit est fait de</p>
              <p class="prix"> prix 115 €</p>
            </a>
          </div>
          <div class=" item-6c item-4c chaise">
              <a href="$">
                <img class="section-img none" src="content/IMG_86963_275x275.jpg" alt="" />
                <h1>Bertola</h1>
                <p>Chaise de salle à manger Bartoza noire. Chaise en fil d'un design solide et élégant.</p>
                <p class="prix"> prix 90 €</p>
              </a>
            </div>                  
          <div class="unset"></div>           
        </div>
      </section>  
    </main>
  </body>
</html>
