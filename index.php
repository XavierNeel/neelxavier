<?php include"header.php";?>


  <!--menu-->

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">NEEL XAVIER</a>
      <button class="navbar-toggler" type="button"data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#profil">Profil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#competence">Compétence</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Expérience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#diplome">Diplome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#loisir">Loisir</a>
          </li>
        </ul>
      </div>
      <form class="d-flex">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">contact</button>
      </form>
  </nav>
  
  <!--Accueil-->
  
  <div class="container-fluid"id="profil">
    <div class="titreun"><h1>Profil</h1></div>
    <div class="profil">
      <div class=photo>
        <img src="image/neel.jpg" class="photo_profil" alt="Image flottante"/>
      </div>
      <div class="lien">
        <h2><span class="lien">développeur web</span> </h2>
        <h3><a href="https://www.arinfo.fr/formations/metiers-du-web/formation-developpeur-web" class="lien">Formation suivie</a> </h3>
        <h3><a href="pdf/néel xavier.pdf" class="lien">Télécharger mon cv</a></h3>
      </div>
    </div>
  </div>

<!--Skill-->

  <div class="container-fluid"id="competence">
    <div class="titre"><h1>Compétence</h1></div>
    <div class="titre"><p>compétences professionnelles Ayant une formation Web chez Arinfo en 2019/2020, je possède une base solide en Html / Css / Php</p></div>
    <div class="container">
      <div class="row row-cols-2">
        <div class="col">HTML
          <div class="progress">
            <div class="progress-bar bg-info progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
        </div>
        <div class="col">CSS
          <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
        </div>
        <div class="col">SASS
          <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
        </div>
        <div class="col">Bootstrap
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
        </div>
        <div class="col">javascript
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
        </div>
        <div class="col">Jquery
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
        </div>
        <div class="col">PHP
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
        </div>
        <div class="col">MySQL
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
        </div>
        <div class="col">Symfony
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
          </div>
        </div>
      </div>
    </div>
    <div class="titre"><p>Le Français est ma langue maternelle. Pour l'Anglais j'ai décroché  le TOEIC avec un score maximal de 645 points.</p></div>
    <div class="langage">
      <div class="row">
        <div class="col-12">
          <div class="langue">Français</div>
          <div id="progress-extra"  data-dimension="150" data-text="100" data-fontsize="20" data-percent="100" data-fgcolor="#30B455" data-bgcolor="#eee" data-width="5" data-bordersize="10" data-animationstep="2"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="langue">Anglais</div>
          <div id="progress2" data-dimension="150" data-text="65" data-fontsize="20" data-percent="65" data-fgcolor="#17a2b8" data-bgcolor="#eee" data-width="5" data-bordersize="10" data-animationstep="2"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!--experience-->
  
  <div class="container"id="experience">
    <div class="titre"><h1>Experience</h1></div>
    <div class="accordion" id="accordionExperience">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Cetra juin 2016-aout 2017</button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">officier polyvalent<br>gardienage, entretien (machine,pompe,apparaux de pont), mise a jour document, surveillance</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Bourbon Offshore Surf decembre 2005-juin 2016</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">officier polyvalent/DPO senior/2nd capitaine <br> cabotage international, transport (materiel dangereux et divers)</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          compagnie maritime Pen Ar Bed juin 2004-aout 2003
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">eleve officier <br> Cabotage National, transport(passager, fret)</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            SNCM juin 2003-aout 2003
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            eleve officier <br> Cabotage international transport(passager et vehicule)
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Brittany Ferry année 1999-2000</button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">Matelot <br> Cabotage international transport(passager et vehicule)</div>
        </div>
      </div>
    </div>
  </div>
  
  <!--Diplome-->
  
  <div class="container"id="diplome">
    <div class="titre"><h1>Diplome</h1></div>
    <div class="accordion" id="accordiondiplome">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          titre developpeur web et web mobile(bac+2)
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
          <div class="accordion-body">obtention du titre developpeur web en cours a l'ecole Arinfo</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          capitaine3000</button></h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
          <div class="accordion-body">obtention du titre captaine 3000 (bac+4) à l'ecole de la marine marchande de Nantes en 2013</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            officier polyvalent 2</button></h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
          <div class="accordion-body">obtention du titre officier polyvalent 2eme classe (bac+3) à l'ecole de la marine marchande de Nantes en 2005</div>
        </div>
      </div>
    </div>
  </div>
  
  <!--portfolio-->
  
  <div class="container-fluid"id="portfolio">
    <div class="titre"><h1>Portfolio</h1><p>voiçi un exemple de travail dont  je suis capable de fournir dans le domaine du développement web.</p></div>
    <div class="site">
      <div class="example"><img src="image/siteSY.png" class="picture"  alt="house"/>
        <div class="fadedbox">
          <div class="title text"><a href="https://saintyvesbeatmaker.000webhostapp.com/"class="text">réalisation du site SaintYves Beatmaker</a></div>
        </div>
      </div>
    </div>
  </div>
  
  <!--Loisir-->
  
  <div class="container-fluid"id="loisir">
  <div class="titredeux"><h1>Loisirs</h1></div>
    <div class="picture">
    <div class="example"><img src="image/moto.jpg" class="picture" alt="house"/>
      <div class="fadedbox">
        <div class="title text">moto</div>
      </div>
    </div>
    <div class="example"><img src="image/cinema.jpg" class="picture"  alt="house"/>
      <div class="fadedbox">
        <div class="title text"> Film</div>
      </div>
    </div>
    <div class="example"><img src="image/musique.jpg" class="picture" alt="house"/>
      <div class="fadedbox">
        <div class="title text"> musique</div>
      </div>
    </div>
    <div class="example"><img src="image/lecture.jpg" class="picture"  alt="house"/>
      <div class="fadedbox">
        <div class="title text">lecture</div>
      </div>
    </div>
    <div class="example"><img src="image/jeuvideo.jpg" class="picture" alt="house"/>
      <div class="fadedbox">
        <div class="title text">jeux videos</div>
      </div>
    </div>
  </div>
  <a href="#top"><img src="image/flecheHaut.jpg" alt="Retourner en haut"/></a>
  </div>
 
  <!--Contact-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="index.php" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">reseaux sociaux</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <a>neelxavier@gmail.com </a>
            <br>
            <a href="https://www.linkedin.com/in/xavier-neel-724655187/"span class="contact">profil Linkedin</a>
            <br>
            <a href="https://github.com/XavierNeel"span class="contact">Github</span></a>
            
          </div>
          <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>