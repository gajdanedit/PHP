
<main>
    <!-- Mozgó kép sorozat -->
    <div id="slider" class="container carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
      </ul>
      <br>
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Képek/k3.jpg" alt="kutyus">
        </div>
        <div class="carousel-item">
          <img src="Képek/i.png" alt="cicus">
        </div>
        <div class="carousel-item">
          <img src="Képek/i2.png" alt="kutyus">
        </div>
        <div class="carousel-item">
          <img src="Képek/k5.jpeg" alt="cicus">
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slider" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </main>

  <!-- öszi kollekciós tábla-->
  <nav>
    <div class="oszi container">
      <div class="row">
        <div class="col-sm-6 p-3 m-auto">
          <h3>Tavaszi kollekció</h3>
        </div>
        <div class="col-sm-6 p-3 m-auto"><img src="Képek/k6.jpg" alt="kutyus"></div>
      </div>
    </div>
  </nav>
  <br>
  <nav>
    <div class="oszi container">
      <div class="row">
        <div class="col-sm-6 p-3 m-auto"><img src="Képek/k6.jpg" alt="kutyus"></div>
        <div class="col-sm-6 p-3 m-auto">
          <h3>Nyári kollekció</h3>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <nav>
    <div class="oszi container">
      <div class="row">
        <div class="col-sm-6 p-3 m-auto">
          <h3>Őszi kollekció</h3>
        </div>
        <div class="col-sm-6 p-3 m-auto"><img src="Képek/k6.jpg" alt="kutyus"></div>
      </div>
    </div>
  </nav>
  <br>
  <nav>
    <div class="oszi container">
      <div class="row">
        <div class="col-sm-6 p-3 m-auto"><img src="Képek/teli.png" alt="kutyus"></div>
        <div class="col-sm-6 p-3 m-auto">
          <h3>Téli kollekció</h3>
        </div>
      </div>
    </div>
  </nav>
  </div>
  </nav>

  <script defer src="bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="vegyes.js"></script>
  <script>

    $(function () {
      $('.toggleNav').on('click', function () {
        $('nav ul').toggleClass('open');
      });
    });

  </script>