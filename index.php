<!-- site de la Dixieme legion -->
<!-- ======== by Atax ======== -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>X-légion</title>
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="FlexAlign">
        <span><a href="#">club</a></span>
        <span><a href="#">boutique</a></span>
        <img src="assets/img/Xlegion_banner.png" alt="logo dixième légion">
        <span><a href="#">roster</a></span>
        <span><a href="#">contact</a></span>
    </header>
<!-- Fin de header debut du coeur de page -->
    <section>
      <article class="first">
        <div class="blanc">
          <div class="middle0"></div>
           <h1 class="mainTextAlign ">Bienvenue sur le site de la Xème LEGION de Narbonne.
Club de Football Américain</h1>
          <div class="middle1"></div>
        </div>
      </article>
      <article class="fleche">
        <!-- ===flip arrow start=== -->
        <div class="container1"
         data-paroller-factor="-0.3"
         data-paroller-type="foreground">
          <div class="card">
            <div class="face front">
              <img src="assets/img/arrowN.png" alt="flêche">
            </div>
            <div class="face back">
                <img src="assets/img/arrowB.png" alt="flêche">
            </div>
          </div>
        </div>
        <!-- ===flip arrow end=== -->
      </article>
      <article class="BG1">
        <div class="splitStart"></div>
          <!-- ====WR==== -->
          <div class="frameWR"
               data-paroller-factor="1.1"
               data-paroller-direction="horizontal"
               data-paroller-type="background">
               <!-- ======particules====== -->
               <div class="particules"
                    data-paroller-factor="-0.9"
                    data-paroller-direction="horizontal"
                    data-paroller-type="background">
                <!-- ====QB==== -->
               <div class="frameQB"
                    data-paroller-factor="0.3"
                    data-paroller-direction="horizontal"
                    data-paroller-type="background">
                 <!-- ====texte==== -->
                 <div class="frameTxt"
                      data-paroller-factor="0.2"
                      data-paroller-type="foreground">
                      <p class="mainTextAlign SlideText1">
                        Le Football Américain est un sport de combat collectif qui demande de ce surpassé physiquement et mentalement. Chacun à son niveau, cette discipline vous opposera des défis physiques mais pas que !
                        Ce n’est pas un sport basé que sur la force ! C’est tout un système tactique et réfléchis à l’avance qui vient s’ajouter au physique. Lié les 2 et vous ferais du « Football Américain ! »
                      </p>
                 </div>
              </div>
            </div>
        </div>
        <div class="splitEnd"></div>
      </article>
    </section>

    <footer>
      <div class="remplissage">
        <p class="footText">============ Petit footer temporaire ============</p>
      </div>
    </footer>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
    crossorigin="anonymous"></script>
    <!--Paroller-->
    <script src="assets/js/jquery.paroller.js"></script>
    <script>
        $(function () {
            $(window).paroller();
            $('body').scrollspy({target: '#main-navbar'});
        });
    </script>
  </body>
</html>
