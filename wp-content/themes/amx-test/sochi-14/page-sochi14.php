<?php
/*
Template Name: Sochi 2014
*/
get_header('sochi');
?>
<main class="site-content">
  <section class="videos">
    <div class="content">
      <h2>Faltan</h2>

      <div class="contador">
        <div class="cartel">
          <div id="dias" class="cartel--num"></div>
          <div class="cartel--txt"><h3>Días</h3></div>
        </div>
        <div class="cartel">
          <div id="horas" class="cartel--num"></div>
          <div class="cartel--txt"><h3>hrs</h3></div>
        </div>
        <div class="cartel">
          <div id="minutos" class="cartel--num"></div>
          <div class="cartel--txt"><h3>min</h3></div>
        </div>
        <div class="cartel">
          <div id="segundos" class="cartel--num"></div>
          <div class="cartel--txt"><h3>seg</h3></div>
        </div>
      </div>
    </div>

    <div id="player">

    </div>
  </section>

  <section class="list-videos">
    <div class="content">
      <h1 class="title">claro Sports En sochi 2014</h1>
      <ul class="list-videos__list">
        <li class="active" data-id="mAinJyxqrBY">
          <a>
            <span class="txt"> Los Deportistas latinoamericanos que participan en Sochi 2014</span>
            <span class="img">
              <img src="<?php bloginfo('template_url')?>/sochi-14/img/team-latam.png" alt="Team Latam">
            </span>
          </a>
          <h4>Team Latam</h4>
        </li>
        <li data-id="gVUs4oFKJmY">
          <a>
            <span class="txt"> Los Deportistas latinoamericanos que participan en Sochi 2014</span>
            <span class="img">
              <img src="<?php bloginfo('template_url')?>/sochi-14/img/travel-meets-fashion.png" alt="Travel Meets Fashion">
            </span>
          </a>
          <h4>Travel Meets Fashion</h4>
        </li>
        <li data-id="aQLDxUY_wjs">
          <a>
            <span class="txt"> Los Deportistas latinoamericanos que participan en Sochi 2014</span>
            <span class="img">
              <img src="<?php bloginfo('template_url')?>/sochi-14/img/velocidad-riesgo.png" alt="Velocidad Riesgo">
            </span>
          </a>
          <h4>Velocidad y riesgo</h4>
        </li>
        <li data-id="qBe17SnzI2s">
          <a>
            <span class="txt"> Los Deportistas latinoamericanos que participan en Sochi 2014</span>
            <span class="img">
              <img src="<?php bloginfo('template_url')?>/sochi-14/img/experiencia.png" alt="Experiencia">
            </span>
          </a>
          <h4>Experiencia multimedia</h4>
        </li>      
      </ul>
    </div>
  </section>
</main>
<?php
get_footer('sochi');