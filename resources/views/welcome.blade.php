<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina Turismo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  </head>
  <body>
    <main>
      <section class="header">
        <a href="#" class="logo"><h2>Travel</h2></a>
        <div class="toggle"><img src="img/toggle.png" /></div>
      </section>
      <section class="banner">
        <img src="img/banner.jpg" class="fitBg" />
        <div class="content">
          <h2>Explorar el mundo</h2>
          <p>
            ¡Descubre el mundo a través de la exploración! "Explorar el mundo" es una invitación
            a aventurarse más allá de los límites conocidos, a sumergirse en la diversidad de culturas,
            paisajes y experiencias que nuestro planeta tiene para ofrecer. Desde antiguas maravillas
            hasta paisajes naturales impresionantes, cada rincón es una oportunidad para aprender,
            crecer y maravillarse. Únete a nosotros en esta emocionante travesía, donde cada paso es
            una nueva historia, y cada descubrimiento amplía tus horizontes. ¡Viaja, experimenta y haz
            tuyas las infinitas posibilidades que el mundo tiene reservadas para ti!
          </p>
          <a class="btn" href="#dos">Ver más</a>
        </div>
      </section>
      <section class="about" id="dos">
        <div class="contentBx">
          <h2 class="titleText">Siente la belleza del mundo</h2>
          <p class="text">
            "Siente la belleza del mundo" es más que una frase; es una invitación a sumergirse
            en la maravilla de los paisajes y lugares turísticos que ofrecen experiencias inolvidables.
            Explora la majestuosidad de montañas imponentes, sumérgete en la serenidad de playas paradisíacas,
            descubre la historia en antiguas ciudades y maravíllate con la arquitectura de estructuras emblemáticas.
            Conéctate emocionalmente con la diversidad del mundo y déjate llevar por la belleza que te rodea.
            ¡Únete a nosotros en esta aventura de descubrimiento y siente la magia en cada rincón del planeta!
          </p>
          <a class="btn" href="#destination">Lugares mas visitados</a>
        </div>
        <div class="ImgBx">
            <img src="./img/img1.jpg" />
          </div>
      </section>
      <section class="banner2">
        <img src="./img/banner2.jpg" class="fitBg">
      </section>
      <section class="destination" id="destination">
        <div class="content">
          <h2 class="titleText">
            Los destinos de viaje más populares del mundo
          </h2>
          <p class="text">
          </p>
        </div>
        <div class="destinationList">
          <div class="box">
            <div class="imgBx">
              <img src="./img/destination1.jpg" class="fitBg" />
            </div>
            <div class="content">
              <h3>Noruega<br /><span>Oslo</span></h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx">
              <img src="./img/destination2.jpg" class="fitBg" />
            </div>
            <div class="content">
              <h3>Arabia Saudita<br /><span>Riad</span></h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx">
              <img src="./img/destination3.jpg" class="fitBg" />
            </div>
            <div class="content">
              <h3>Cascada el Encanto<br /><span>México</span></h3>
            </div>
          </div>
        </div>
        <a class="btn" href="#about">Contactanos en nuestras Redes Sociales</a>
      </section>
      <section class="banner3">
        <img src="./img/banner3.jpg" class="fitBg" />
      </section>
      <section id="about">
        <footer class="footer">
          <ul class="sci">
            <li>
              <a href="{{route('facebook')}}"><img src="./img/facebook.png" /></a>
            </li>
            <li>
              <a href="{{route('instagram')}}"><img src="./img/instagram.png" /></a>
            </li>
            <li>
              <a href="{{route('listUsuarios')}}"><img src="./img/usuario.png" /></a>
            </li>
          </ul>
          <h4 class="copyright">
            Copyright ©2023 <a href="#">Orlando</a>. All rights reserved.
          </h4>
        </footer>
      </section>
    </main>
  </body>
</html>