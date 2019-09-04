<!--titulo-->
<section class="mi-tabs-medium" style="background-image: url('images/directoriocomercial_1.jpg');">
  <div class="overlay-medium">
    <div class="main-page">
      <div class="contenedor">
        <span>Directorio Empresarial</span>
      </div>
    </div>
  </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
<style>
  [class^="swiper-button-"] {
    transition: all 0.3s ease;
  }

  .swiper-slide {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .swiper-container {
    width: 80%;
    height: 100vh;
    float: left;
    transition: opacity 0.6s ease, transform 0.3s ease;
  }

  .swiper-container.nav-slider {
    width: 20%;
    padding-left: 5px;
  }

  .swiper-container.nav-slider .swiper-slide {
    cursor: pointer;
    opacity: 0.4;
    transition: opacity 0.3s ease;
  }

  .swiper-container.nav-slider .swiper-slide.swiper-slide-active {
    opacity: 1;
  }

  .swiper-container.nav-slider .swiper-slide .content {
    width: 100%;
  }

  .swiper-container.nav-slider .swiper-slide .content .title {
    font-size: 20px;
  }

  .swiper-container:hover .swiper-button-prev,
  .swiper-container:hover .swiper-button-next {
    transform: translateX(0);
    opacity: 1;
    visibility: visible;
  }

  .swiper-container.loading {
    opacity: 0;
    visibility: hidden;
  }

  .swiper-slide {
    overflow: hidden;
  }

  .swiper-slide .slide-bgimg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
  }

  .swiper-slide .entity-img {
    display: none;
  }

  .swiper-slide .content {
    position: absolute;
    top: 40%;
    left: 0;
    width: 50%;
    padding-left: 5%;
    color: #fff;
  }

  .swiper-slide .content .title {
    font-size: 2.6em;
    font-weight: bold;
    margin-bottom: 30px;
  }

  .swiper-slide .content .caption {
    display: block;
    font-size: 13px;
    line-height: 1.4;
    transform: translateX(50px);
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.7s ease;
  }

  .swiper-slide .content .caption.show {
    transform: translateX(0);
    opacity: 1;
  }

  [class^="swiper-button-"] {
    width: 44px;
    opacity: 0;
    visibility: hidden;
  }

  .swiper-button-prev {
    transform: translateX(50px);
  }

  .swiper-button-next {
    transform: translateX(-50px);
  }
</style>
<!--slider-->
<section class="full-slider"style="height: 350px; background-image: url('images/bgpublicidad.jpg'); margin-top:-25px;">
  <div class="swiper-container main-slider loading" style="height: 350px;">
    <div class="swiper-wrapper" style="height: 350px;">
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(images/d1.jpg)">
          <img src="images/d1.jpg" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Shaun Matthews</p>
          <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</span>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Alexis Berry</p>
          <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</span>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Billie Pierce</p>
          <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</span>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Trevor Copeland</p>
          <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</span>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Bernadette Newman</p>
          <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</span>
        </div>
      </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>
  <!-- Thumbnail navigation -->
  <div class="swiper-container nav-slider loading" style="height: 350px;">
    <div class="swiper-wrapper" role="navigation">
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Shaun Matthews</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Alexis Berry</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Billie Pierce</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Trevor Copeland</p>
        </div>
      </div>
      <div class="swiper-slide">
        <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM)">
          <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
        </figure>
        <div class="content">
          <p class="title">Bernadette Newman</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--directorio-->
<section class="full-directorio" style="margin-top: -24px; z-index: 10; ">
  <div class="ed-content" style="background-color: white;">
    <div id="container">
      <div id="parentVerticalTab">
        <ul class="resp-tabs-list hor_1">
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="1"><span>Accesorios</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="2"><span>Administradoras de Fondos de Pensiones</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="3"><span>Agroindustrial</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="4"><span>Agropecuario</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="5"><span>Alimentos, Bebidas e Insumos</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="6"><span>Capacitaciones y Recursos Humanos</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="7"><span>Comercio Exterior</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="8"><span>Compañias de Seguros</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="9"><span>Comunicaciones</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="10"><span>Constructora</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="11"><span>Consultorias y Asesorias</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="12"><span>Corredores de Seguros</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="13"><span>Diversos</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="14"><span>Educación</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="15"><span>Estructuras Metálicas, Madera y Concreto</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="16"><span>Fondos Colectivos</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="17"><span>Industriales</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="18"><span>Información Jurídica</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="19"><span>Inmobiliaria</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="20"><span>Instituciones Financieras y de Crédito</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="21"><span>Jurídicos y Notarias</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="22"><span>Marketing y Publicidad</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="23"><span>Mayorista</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="24"><span>Micro Finanzas</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="25"><span>Mineras</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="26"><span>Minorista</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="27"><span>Proveedores de Construcción</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="28"><span>Proveedores de Mineria</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="29"><span>Salud</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="30"><span>Seguridad</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="31"><span>Servicios</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="32"><span>Tecnologías de Información y Comunicaciones</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="33"><span>Textil, Calzado y Joyeria</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="34"><span>Transporte</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="35"><span>Turismo</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="36"><span>Vehículos Mayores</span></li>
          <li class="icon-chevron-right" onclick="LanzaEvento()" value="37"><span>Vehículos Menores</span></li>
        </ul>
        <div class="resp-tabs-container hor_1">
          <!-- Accesorios                                  -->
          <div>
            <div id="table1"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Administradoras_de_Fondos_de_Pensiones      -->
          <div>
            <div id="table2"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Agroindustrial                              -->
          <div>
            <div id="table3"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Agropecuario                                -->
          <div>
            <div id="table4"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Alimentos_Bebidas_e_Insumos                 -->
          <div>
            <div id="table5"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Capacitaciones_y_Recursos_Humanos           -->
          <div>
            <div id="table6"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Comercio_Exterior                           -->
          <div>
            <div id="table7"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Compañias_de_Seguros                        -->
          <div>
            <div id="table8"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Comunicaciones                              -->
          <div>
            <div id="table9"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Constructora                                -->
          <div>
            <div id="table10"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Consultorias_y_Asesorias                    -->
          <div>
            <div id="table11"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Corredores_de_Seguros                       -->
          <div>
            <div id="table12"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Diversos                                    -->
          <div>
            <div id="table13"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Educación                                   -->
          <div>
            <div id="table14"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Estructuras_Metálicas_Madera_y_Concreto     -->
          <div>
            <div id="table15"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Fondos_Colectivos                           -->
          <div>
            <div id="table16"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Industriales                                -->
          <div>
            <div id="table17"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Información_Jurídica                        -->
          <div>
            <div id="table18"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Inmobiliaria                                -->
          <div>
            <div id="table19"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Instituciones_Financieras_y_de_Crédito      -->
          <div>
            <div id="table20"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Jurídicos_y_Notarias                        -->
          <div>
            <div id="table21"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Marketing_y_Publicidad                      -->
          <div>
            <div id="table22"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Mayorista                                   -->
          <div>
            <div id="table23"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Micro_Finanzas                              -->
          <div>
            <div id="table24"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Mineras                                     -->
          <div>
            <div id="table25"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Minorista                                   -->
          <div>
            <div id="table26"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Proveedores_de_Construcción                 -->
          <div>
            <div id="table27"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Proveedores_de_Mineria                      -->
          <div>
            <div id="table28"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Salud                                       -->
          <div>
            <div id="table29"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Seguridad                                   -->
          <div>
            <div id="table30"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Servicios                                   -->
          <div>
            <div id="table31"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Tecnologías_de_Información_y_Comunicaciones -->
          <div>
            <div id="table32"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Textil_Calzado_y_Joyeria                    -->
          <div>
            <div id="table33"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Transporte                                  -->
          <div>
            <div id="table34"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Turismo                                     -->
          <div>
            <div id="table35"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Vehículos_Mayores                           -->
          <div>
            <div id="table36"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>
          <!-- Vehículos_Menores                           -->
          <div>
            <div id="table37"></div>
            <div class="paginate">
              <ul class="pagination" id="paginador"></ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
<script>
  // Params
  let mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5;

  // Main Slider
  let mainSliderOptions = {
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000
    },
    loopAdditionalSlides: 10,
    grabCursor: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      init: function() {
        this.autoplay.stop();
      },
      imagesReady: function() {
        this.el.classList.remove('loading');
        this.autoplay.start();
      },
      slideChangeTransitionEnd: function() {
        let swiper = this,
          captions = swiper.el.querySelectorAll('.caption');
        for (let i = 0; i < captions.length; ++i) {
          captions[i].classList.remove('show');
        }
        swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
      },
      progress: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          let slideProgress = swiper.slides[i].progress,
            innerOffset = swiper.width * interleaveOffset,
            innerTranslate = slideProgress * innerOffset;

          swiper.slides[i].querySelector(".slide-bgimg").style.transform =
            "translateX(" + innerTranslate + "px)";
        }
      },
      touchStart: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function(speed) {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".slide-bgimg").style.transition =
            speed + "ms";
        }
      }
    }
  };
  let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

  // Navigation Slider
  let navSliderOptions = {
    loop: true,
    loopAdditionalSlides: 10,
    speed: 1000,
    spaceBetween: 5,
    slidesPerView: 5,
    centeredSlides: true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    direction: 'vertical',
    on: {
      imagesReady: function() {
        this.el.classList.remove('loading');
      },
      click: function() {
        mainSlider.autoplay.stop();
      }
    }
  };
  let navSlider = new Swiper(navSliderSelector, navSliderOptions);

  // Matching sliders
  mainSlider.controller.control = navSlider;
  navSlider.controller.control = mainSlider;
</script>
