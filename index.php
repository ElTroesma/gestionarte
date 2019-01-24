<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" type="image/png" href="assets/media/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Gestion Arte</title>
  </head>
  <body>

  <a href="mailto://miguelmail2006@gmail.com?subject=RE:+Mensaje+Web+-+Gestionarte&amp;body=&lt;quote&gt;A+ver+este+otro+mensaje+como+llega&lt;&sol;quote&gt;" target="_blank">Responder a Miguel Angel</a>

    <!-- Preloader -->

    <div class="preloader-hide desktop">
      <img src="assets/media/preloader-wallpaper.jpg" class="preloader-img">
    </div>

    <!-- Mobile Navigation -->

    <div class="modal-menu-closer" id="modalMenu" onClick="hideModalMenu()">
      <div class="modal-nav-container">
        <div class="modal-menu-tittle-container">
          <span class="modal-menu-tittle">MENÚ</span>
        </div>
        <div class="modal-nav-li-container">
          <ul>
            <a href="#home" onClick="hideModalMenu()"><li>INICIO</li></a>
            <a href="#services" onClick="hideModalMenu()"><li>SERVICIOS</li></a>
            <a href="#us" onClick="hideModalMenu()"><li>NOSOTROS</li></a>
            <a href="#contact" onClick="hideModalMenu()"><li>CONTACTO</li></a>
          </ul>
        </div>
      </div>
    </div>

    <!-- Layout -->

    <header class="main-header">
      <div class="align">
        <div class="header-logo-container">
          <a href="index.html" class="header-logo-a">
            <img src="assets/media/logo.png" class="header-logo" href="index.html">
          </a>
        </div>

        <div class="header-nav-container desktop">
          <ul class="header-nav">
            <a href="#home"><li>INICIO</li></a>
            <a href="#services"><li>SERVICIOS</li></a>
            <a href="#us"><li>NOSOTROS</li></a>
            <a href="#contact"><li style="border-right: none;">CONTACTO</li></a>
          </ul>
        </div>

        <div class="main-header-burger-menu-container mobile">
          <a class="main-header-burger-menu" onclick="showModalMenu()"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
        </div>

      </div>
    </header>

    <section id="pre_home" class="main-section-home">
      <div class="main-home-filter">
        <div class="align">
          <div class="home-tittle-container">
            <div class="tittle-container">
              <h1 class="home-main-tittle">SERVICIOS PARA TU VIDA</h1>
              <div class="separation home-separation"></div>
              <h2 class="home-second-tittle">Gestionamos tus necesidades para tu mayor comodidad.</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pre_services" class="services-section-container">
      <div class="align">
        <div class="services-section-tittle-container">
          <h1 class="services-section-tittle">SERVICIOS</h1>
          <div class="separation services-separation"></div>
          <h2 class="services-section-subtittle">Su tranquilidad es nuestra prioridad.</h2>
        </div>

        <div class="service-article">
          <div class="service-image-module-container"></div>
          <div class="service-module-text">
            <div class="separation-width">
              <span class="service-module-tittle">TU CASA</span>
              <div class="separation service-module-tittle-separation"></div>
            </div>
            <p class="service-module-description">En <strong>GestionArte</strong>, te brindamos la posibilidad de alquilar o comprar la casa de tus sueños, adaptandonos a tus necesidades.</p>
            <p class="service-module-description">La satisfacción y la tranquilidad de los clientes, es nuestra prioridad.</p>
            <a href="properties.html"><button type="button" class="services-button">VER INMUEBLES</button></a>
          </div>
        </div>

        <div class="service-article">
          <div class="service-image-module-container buildings-img mobile"></div>
          <div class="service-module-text left">
            <div class="separation-width">
              <span class="service-module-tittle">ADMINISTRACIÓN DE EDIFICIOS</span>
              <div class="separation service-module-tittle-separation"></div>
            </div>
            <p class="service-module-description">Nos importa la comodidad de nuestros clientes, facilitamos tu vida administrando tus gastos comunes, documentación, servicios, confección de actas y reuniones.</p>
            <a href="#contact"><button type="button" class="services-button">SOLICITAR COTIZACIÓN</button></a>
          </div>
          <div class="service-image-module-container buildings-img desktop"></div>
        </div>

        <div class="service-article">
          <div class="service-image-module-container enterprise"></div>
          <div class="service-module-text">
            <div class="separation-width">
              <span class="service-module-tittle">TU EMPRESA</span>
              <div class="separation service-module-tittle-separation"></div>
            </div>
            <p class="service-module-description">Te ayudamos con el desarrollado de tu emprendimiento.</p>
            <p class="service-module-description">Te brindamos asesoramiento contable, confección de salarios, trámites, organismos estatales (BPS, DGI)</p>
            <a href="#contact"><button type="button" class="services-button">SOLICITAR COTIZACIÓN</button></a>
          </div>
        </div>

      </div>
    </section>

    <section id="pre_us" class="us-section-container">
      <div class="main-home-filter us-filter">
        <div class="align">
          <div class="us-content">
            <div class="us-section-tittle-container">
              <h1 class="us-section-tittle">ACERCA DE NOSOTROS</h1>
            </div>
            <div class="us-section-description">
              <p class="us-section-paragraph">En <strong>GestionArte</strong> estamos celebrando nuestro nuevo sitio web, y con él, te brindamos toda nuestra gama de servicios.</p>
              <p class="us-section-paragraph">Somos una empresa dinamica en pleno desarrollo, una administración diferente en la que nos enfocamos en brindar soluciones, mediar entre las partes, mantenerlos informados sobre normativas vigentes y asesorados a quienes depositen en nuestra empresa su confianza.</p>
              <p class="us-section-paragraph">Trabajamos en cada proyecto dando todo nuestro mejor potencial, empatizando con nuestros clientes, garantizando su satisfacción y facilidad en el desarollo de sus emprendimientos, lo cual es nuestro mayor objetivo.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pre_contact" class="contact-section-container">
      <div class="align">
        <div class="contact-section-tittle-container">
          <h1 class="contact-section-tittle">CONTACTO</h1>
          <div class="separation contact-section-separation"></div>
        </div>
        <div class="contact-align-container">
          <div class="form-container">
            <span class="form-contact-tittle">ENVIANOS UN MENSAJE</span>
            <div class="separation contact-form-separation"></div>
            <form class="contact-form" action="submit.php" method="post">
              <input type="text" name="firstname" placeholder="Nombre:" required="true" class="contact-input form-inline-input" style="margin-right: 15px;">
              <input type="text" name="lastname" placeholder="Apellido:" required="true" class="contact-input form-inline-input">
              <input type="email" name="email" placeholder="e-mail:" required="true" class="contact-input">
              <input type="phone" name="phone" placeholder="Telefono:" required="true" class="contact-input">
              <textarea name="message" placeholder="Mensaje:" required="true" class="contact-input contact-textarea"></textarea>
              <div class="">
                <button type="submit" class="contact-form-button">Enviar</button>
                <button type="reset" class="contact-form-button">Reset</button>
              </div>
            </form>
          </div>
          <div class="social-networks-container">
            <span class="form-contact-tittle">OTRAS MANERAS DE CONTACTARNOS</span>
            <div class="separation contact-form-separation"></div>
            <div class="other-way-contact">
              <div class="way-contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="social-network-description">
                <span class="ico-tittle">EMAIL</span>
                <span class="ico-description">GestionArteADM@gmail.com</span>
              </div>
            </div>

            <div class="other-way-contact">
              <a href="https://wa.me/59897955787" target="_blank" style="text-decoration: none;">
                <div class="way-contact-icon">
                  <i class="fab fa-whatsapp"></i>
                </div>
              </a>
              <div class="social-network-description">
                <a href="https://wa.me/59897955787" style="text-decoration: none; color: #2c2c2c; cursor: pointer;" target="_blank">
                  <span class="ico-tittle">WHATSSAPP</span>
                  <span class="ico-description">(598) 097 955 787</span>
                </a>
              </div>
            </div>

            <div class="other-way-contact">
              <a href="https://es-la.facebook.com/g.edificios/" target="_blank" style="text-decoration: none;">
                <div class="way-contact-icon">
                  <i class="fab fa-facebook-f"></i>
                </div>
              </a>
              <div class="social-network-description">
                <a href="https://es-la.facebook.com/g.edificios/" style="text-decoration: none; color: #2c2c2c; cursor: pointer;" target="_blank">
                  <span class="ico-tittle">FACEBOOK</span>
                  <span class="ico-description">/g.edificios</span>
                </a>
              </div>
            </div>

            <div class="other-way-contact">
              <a href="https://www.instagram.com/gestionarteadministracion/?utm_source=ig_profile_share&igshid=1udpp85ejqai1" target="_blank" style="text-decoration: none;">
                <div class="way-contact-icon">
                  <i class="fab fa-instagram"></i>
                </div>
              </a>
              <div class="social-network-description">
                <a href="https://www.instagram.com/gestionarteadministracion/?utm_source=ig_profile_share&igshid=1udpp85ejqai1" style="text-decoration: none; color: #2c2c2c; cursor: pointer;" target="_blank">
                  <span class="ico-tittle">INSTAGRAM</span>
                  <span class="ico-description">@gestionarteadministracion</span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <footer class="main-footer">
      <div class="align">
        <div class="copyright-container">
          <span>Powered by</span>
          <a href="http://appsxxi.com" target="_blank">
            <img src="assets/media/appsxxi-logo.png" class="copyright-img">
          </a>
        </div>
      </div>
    </footer>

    <!-- Auto scroll top -->

    <a href="#home" class="scroll-up fa fa-angle-up" style="display: block;"></a>

  </body>
</html>

<script type="text/javascript" src="assets/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
