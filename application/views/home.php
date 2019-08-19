<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RMV - Rimaversatilidade</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?=base_url('assets/style.css') ?>" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
      <div class="container">
        <div class="col-6 col-lg-2 col-md-3 col-sm-3 logo">
          <a class="navbar-brand " href="#">
            <img src="<?=base_url('assets/logo_rmv.png')?>" alt="" />
          </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <!-- <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner" role="listbox">
          <div class="bg-overlay"></div>

          <div
            class="carousel-item active"
          >
          <video autoplay muted loop id="myVideo">
            <source src="<?=base_url('assets/video.mp4')?>" type="video/mp4">
          </video>
          
          
        </div>
          <!-- Slide One - Set the background image for this slide in the line below -->
          <!-- <div
            class="carousel-item "
            style="background-image: url('./assets/bg1.jpg')"
          ></div>

          <div
            class="carousel-item"
            style="background-image: url('./assets/bg4.png')"
          ></div> -->
        </div>
        <!-- <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>
    </header>

    <section class="section1" id="sobre">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Coletivo MART</h1>
            <p>
              Rimaversatilidade é uma dupla de rap formada por dois estudantes
              do curso de Publicidade e Propaganda da UFRGS, Alexandre Souza
              (Xandyss) e Fernando Freitas (Gonc). Ambos jovens, negros e
              frequentadores do ambiente acadêmico federal buscam, incomodados
              com o que ouvem e vivem por referência a cor de pele e fenótipo
              fora do padrão imposto pela sociedade, comentar e debater sua
              existência utilizando da força e ancestralidade do rap como
              instrumento para engajamento público, identificação e inserção na
              cena musical local.
            </p>
            <p>
              Pelo e através do rap, Xandyss e Gonc contam suas histórias para
              contestar e conscientizar as pessoas sobre a necessidade de
              resistência da negritude jovem.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section2">
      <div class="container">
        <h1>MEMBROS</h1>

        <div class="row justify-content-center">
          <div class="col-lg-3">
            <div class="integrantes img-integrante3">
              <div class="filtro">
                <div class="artist_item_socials">
                  <div class="artist_social_profile">
                    <a
                      href="https://www.facebook.com/"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </div>
                  <div class="artist_social_profile">
                    <a
                      href="https://twitter.com/"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-twitter"></i>
                    </a>
                  </div>
                  <div class="artist_social_profile">
                    <a
                      href="https://www.instagram.com/?hl=en"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                  <div class="artist_social_profile">
                    <a
                      href="https://www.youtube.com/"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-youtube"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <h3>Gonc</h3>
          </div>
          <div class="col-lg-3">
            <div class="integrantes img-integrante4">
              <div class="filtro">
                <div class="artist_item_socials">
                  <div class="artist_social_profile">
                    <a
                      href="https://www.facebook.com/"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </div>
                  <div class="artist_social_profile">
                    <a
                      href="https://twitter.com/"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-twitter"></i>
                    </a>
                  </div>
                  <div class="artist_social_profile">
                    <a
                      href="https://www.instagram.com/?hl=en"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                  <div class="artist_social_profile">
                    <a
                      href="https://www.youtube.com/"
                      target="_blank"
                      class="artist_social_link"
                    >
                      <i class="fab fa-youtube"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <h3>Xandyss</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="section3">
      <h1>GALERIA</h1>

      <div class="container">
        <div class="row galeria">
          <div class="col-md-4 thumbnail">
            <a
              href="<?=base_url('assets/1.jpg')?>"
              data-toggle="lightbox"
              data-gallery="example-gallery"
            >
              <img src="<?=base_url('assets/1.jpg')?>" class="img-fluid portrait" />
            </a>
          </div>
          <div class="col-md-4 thumbnail">
            <a
              href="<?=base_url('assets/5.jpg')?>"
              data-toggle="lightbox"
              data-gallery="example-gallery"
            >
              <img src="<?=base_url('assets/5.jpg')?>" class="img-fluid portrait" />
            </a>
          </div>
          <div class="col-md-4 thumbnail">
            <a
              href="<?=base_url('assets/4.jpg')?>"
              data-toggle="lightbox"
              data-gallery="example-gallery"
            >
              <img src="<?=base_url('assets/4.jpg')?>" class="img-fluid portrait" />
            </a>
          </div>
          <div class="col-md-4 thumbnail">
            <a
              href="<?=base_url('assets/3.jpg')?>"
              data-toggle="lightbox"
              data-gallery="example-gallery"
            >
              <img src="<?=base_url('assets/3.jpg')?>" class="img-fluid portrait" />
            </a>
          </div>
          <div class="col-md-4 thumbnail">
            <a
              href="<?=base_url('assets/2.jpg')?>"
              data-toggle="lightbox"
              data-gallery="example-gallery"
            >
              <img src="<?=base_url('assets/2.jpg')?>" class="img-fluid portrait" />
            </a>
          </div>
          <div class="col-md-4 thumbnail">
            <a
              href="<?=base_url('assets/6.jpg')?>"
              data-toggle="lightbox"
              data-gallery="example-gallery"
            >
              <img src="<?=base_url('assets/6.jpg')?>" class="img-fluid portrait" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- scripts bootstrap -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script>
      $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });

      $("#next-galeria").click(function() {
        $(".galeria2").css("display", "flex");
        $(".galeria").css("display", "none");
      });
    </script>
  </body>
</html>
