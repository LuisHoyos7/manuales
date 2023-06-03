<!DOCTYPE html>
<html lang="en">

<head>
  <title>ITS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="create/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{ asset('create/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('create/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('create/css/intlTelInput.css') }}">
  @include('layouts.flash-message')
</head>
<style>
  .iti__flag {
    background-image: url("create/images/flags.png");
  }

  @media (-webkit-min-device-pixel-ratio: 2),
  (min-resolution: 192dpi) {
    .iti__flag {
      background-image: url("create/images/flags@2x.png");
    }
  }
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Celular:</strong> <a href="tel://#">+57 3008933494</a></span>
              <span><strong class="text-white">Correo:</strong> <a href="#">its@gmail.com</a></span>
            </p>
          </div>
          <!-- <div class="col-md-6">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>

    <!--navar mobile -->
    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <img src="metronic/dist/assets/media/logos/5.png" alt="" width="60px">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <!-- <li><a class="btn btn-info" style="color: aliceblue" href="" id="cotizar" class="nav-link">Cotiza!</a></li> -->
                <!-- <li>
                  <a href="#services-section" class="nav-link">Servicios</a>
                </li> -->
                <li>
                  <a href="#about-section" class="nav-link">Nosotros</a>
                </li>
                <!-- <li><a href="#blog-section" class="nav-link">Asesores</a></li>
                <li><a href="#contact-section" class="nav-link">Contacto</a></li> -->
                @if (Route::has('login'))
                @auth
                <li><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                @else
                <li><a href="{{ route('login') }}" class="nav-link">Ingresa</a></li>
                @endauth
                @endif
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url('metronic/images/about_1.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>ITS <span class="typed-words"></span></h1>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



    <!--
    <section class="site-section" id="work-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Our Works</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, itaque neque, delectus odio iure explicabo.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="images/img_1.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Bonzai Tree</h2>
                <span class="category">Web Application</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="images/img_2.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Simple Woman</h2>
                <span class="category">Branding</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="images/img_3.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Fruits</h2>
                <span class="category">Website</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4">
            <a href="images/img_4.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Design Material</h2>
                <span class="category">Web Application</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="images/img_5.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/img_5.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Handy Food</h2>
                <span class="category">Branding</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="images/img_6.jpg" class="media-1" data-fancybox="gallery">
              <img src="images/img_6.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Cat With Cup</h2>
                <span class="category">Website</span>
              </div>
            </a>
          </div>

         
        </div>
      </div>
    </section>

    <section class="section ft-feature-1">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 bg-black w-100 ft-feature-1-content">
            <div class="row align-items-center">
              <div class="col-lg-5">
                
                  <img src="images/about_1.jpg" alt="Image" class="img-fluid mb-4 mb-lg-0">
                
              </div>
              <div class="col-lg-3 ml-auto">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center"><span class="icon icon-beach_access mr-2"></span><span>Strategy</span></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                  <p><a href="#">Read More</a></p>
                </div>

                <div>
                  <h3 class="d-flex align-items-center"><span class="icon icon-build mr-2"></span><span>Web Development</span></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                  <p><a href="#">Read More</a></p>
                </div>

              </div>
              <div class="col-lg-3">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center"><span class="icon icon-format_paint mr-2"></span><span>Art Direction</span></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                  <p><a href="#">Read More</a></p>
                </div>

                <div>
                  <h3 class="d-flex align-items-center"><span class="icon icon-question_answer mr-2"></span><span>Copywriting</span></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                  <p><a href="#">Read More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section> -->

    <!-- <section class="site-section border-bottom" id="services-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center" data-aos="fade-up">
            <h2 class="text-black h1 site-section-heading text-center">Nuestros Servicios</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
              <div>
                <h3>Tutorias</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
              <div>
                <h3>Trabajos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
              <div>
                <h3>Evaluaciones</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="metronic/images/about_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

              <div class="col-12">
                <div class="text-left pb-1">
                  <h2 class="text-black h1 site-section-heading">Sobre Nosotros</h2>
                </div>
              </div>
              <div class="col-12 mb-4">
                <p>ITS InfoCom es una empresa multinacional de clase mundial que diseña y brinda soluciones integradas en Tecnologías de la Información y la comunicación para potenciar las actividades y el negocio de nuestros clientes. Nuestra oferta de servicios integrados, innovadores y de calidad es ejecutada por medio de nuestro liderazgo y excelencia operativa.
                  Fundada en 1998 en San José, Costa Rica, actualmente se encuentra en más de 7 países, en los que se encuentra Colombia cuenta con dos sedes ubicadas en Bogotá y Medellín.
                </p>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
                  <div>
                    <h3>Misión</h3>
                    <p>Potencializar el negocio de nuestros clientes, desarrollando soluciones, conquistando nuestras metas y haciendo la diferencia para nuestra empresa, equipo de trabajo y la sociedad.</p>

                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                  <div>
                    <h3>Visión</h3>
                    <p>Ser el socio reconocido por proveer la mejor experiencia de servicio en las soluciones a nuestros clientes con compromiso, innovación y excelencia..</p>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




    <!-- <a href="#" class="bg-primary py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10">
            <h2 class="text-white">Let's Get Started</h2>
          </div>
        </div>
      </div>
    </a> -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div> -->
          <div class="col-md-4">
            <h2 class="footer-heading">Sitios web</h2>
            <a href="http://www.itsinfocom.com">http://www.itsinfocom.com</a>
            <a href="http://www.itsinfocom.com">https://co.linkedin.com/company/its-infocom</a>
          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="{{ asset('create/create_js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery-ui.js') }}"></script>
  <script src="{{ asset('create/create_js/popper.min.js') }}"></script>
  <script src="{{ asset('create/create_js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('create/create_js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('create/create_js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('create/create_js/aos.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('create/create_js/jquery.sticky.js') }}"></script>

  <script src="{{ asset('create/create_js/typed.js') }}"></script>
  <script>
    var typed = new Typed('.typed-words', {
      strings: ["Tranformando compañias", "Especialistas en lo que Hacemos"],
      typeSpeed: 80,
      backSpeed: 80,
      backDelay: 4000,
      startDelay: 1000,
      loop: true,
      showCursor: true
    });
  </script>

  <script src=" {{ asset('create/create_js/main.js') }}"></script>
  <script src=" {{ asset('create/create_js/intlTelInput.js') }}"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "create/create_js/utils.js"
    });
  </script>

  <script>
    $('#contact-section').hide();
    $('#asignaturaOcultar').hide();
    $('#tipoServicioOcultar').hide();
    $('#tipoTrabajoOcultar').hide();
    $('#temaOcultar').hide();
    $('#fechaOcultar').hide();
    $('#horaOcultar').hide();
    $('.informacionOcultar').hide();
    // si dan click en cotizar cargar el select dinamico con todas las categorias
    $('#cotizar').click(function(e) {
      e.preventDefault()
      $('#contact-section').show();
      //Listar Select de categorias cuando den click en cotizar
      $.ajax({
          url: 'cargarCategorias',
          type: 'GET',
          dataType: 'json'
        })
        .done(function(res) {
          const respuesta = res
          $('#category').append('<option>' + 'seleecione' + '</option>');
          for (var i = 0; i < respuesta.length; i++) {
            $('#category').append('<option value="' + respuesta[i].id + '">' + respuesta[i].name + '</option>');
          }
        })
        .fail(function() {
          console.log('error')
        })
    })

    //cargar asignaturas mediante click en categorias
    $('#category').on('change', function(e) {
      e.preventDefault();

      var category_id = $("#category").val();

      if (category_id == 25) {
        e.preventDefault();
        $('#asignaturaOcultar').hide();
        $('#tipoServicioOcultar').hide();
        $('#tipoTrabajoOcultar').hide();
        $('#temaOcultar').show();
        $('#fechaOcultar').show();
        $('#horaOcultar').show();
        $('.informacionOcultar').show();
      } else if (category_id == 24) {

        $('#asignaturaOcultar').hide();
        $('#tipoServicioOcultar').hide();
        $('#tipoTrabajoOcultar').hide();
        $('#temaOcultar').show();
        $('#fechaOcultar').show();
        $('#horaOcultar').show();
        $('.informacionOcultar').show();

        $.ajax({
            url: 'cargarTiposTrabajosEspecifico/' + 25,
            type: 'GET',
            dataType: 'json'
          })

          .done(function(res) {
            $('#tipoTrabajoOcultar').show();
            $('#workType').empty();
            const respuesta = res
            $('#workType').append('<option>' + 'seleccione' + '</option>');

            for (var i = 0; i < respuesta.length; i++) {
              $('#workType').append('<option value="' + respuesta[i].id + '">' + respuesta[i].name + '</option>');
            }
          })
          .fail(function() {
            console.log('error')
          })
      } else {
        $('#temaOcultar').hide();
        $('#fechaOcultar').hide();
        $('#horaOcultar').hide();
        $('.informacionOcultar').hide();
        $('#asignaturaOcultar').show();
        var category_id = $("#category").val();

        $.ajax({
            url: 'cargarCursos/' + category_id,
            type: 'GET',
            dataType: 'json'
          })

          .done(function(res) {
            $('#course').empty();
            $('#serviceType').empty();
            $('#workType').empty();
            const respuesta = res
            $('#course').append('<option>' + 'seleccione' + '</option>');
            for (var i = 0; i < respuesta.length; i++) {
              $('#course').append('<option value="' + respuesta[i].id + '">' + respuesta[i].name + '</option>');
            }
          })
          .fail(function() {
            console.log('error')
          })


      }

    })

    //cargar los tipos de servicios que ofrece una asignatura 
    $('#course').on('change', function(e) {
      e.preventDefault();
      $('#tipoServicioOcultar').show();
      var course_id = $("#course").val();

      $.ajax({
          url: 'cargarServicios/' + course_id,
          type: 'GET',
          dataType: 'json'
        })

        .done(function(res) {
          $('#serviceType').empty();
          const respuesta = res
          $('#serviceType').append('<option>' + 'seleccione' + '</option>');
          for (var i = 0; i < respuesta.length; i++) {
            $('#serviceType').append('<option value="' + respuesta[i].service_type_id + '">' + respuesta[i].name + '</option>');
          }
        })
        .fail(function() {
          console.log('error')
        })
    })

    //cargar los tipos de trabajos mediante los tipos de servicios
    $('#serviceType').on('change', function(e) {
      e.preventDefault();
      $('#tipoTrabajoOcultar').show();
      var service_type_id = $("#serviceType").val();

      $.ajax({
          url: 'cargarTiposTrabajos/' + service_type_id,
          type: 'GET',
          dataType: 'json'
        })

        .done(function(res) {
          $('#temaOcultar').show();
          $('#fechaOcultar').show();
          $('#horaOcultar').show();
          $('.informacionOcultar').show();
          $('#workType').empty();
          const respuesta = res
          $('#workType').append('<option>' + 'seleccione' + '</option>');
          for (var i = 0; i < respuesta.length; i++) {

            $('#workType').append('<option value="' + respuesta[i].id + '">' + respuesta[i].name + '</option>');
          }
        })
        .fail(function() {
          console.log('error')
        })

    })
  </script>

</html>