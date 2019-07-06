<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vitroart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="<?=base_url('src/')?>ftco-32x32.png">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('src/')?>fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?=base_url('src/')?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('src/')?>css/animate.css">
  <link rel="stylesheet" href="<?=base_url('src/')?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url('src/')?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=base_url('src/')?>css/bootstrap-datepicker.css">


  <link rel="stylesheet" href="<?=base_url('src/')?>fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?=base_url('src/')?>css/aos.css">
  <link rel="stylesheet" href="<?=base_url('src/')?>css/jquery.fancybox.min.css">


  <link rel="stylesheet" href="<?=base_url('src/')?>css/style.css">

</head>
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

    <?php if(isset($_SESSION['notice']) && $_SESSION['notice'] != null): ?>
      <div class="alert alert-success">
        <?php 
        echo $_SESSION['notice'];
        $_SESSION['notice'] = null;
        ?>
      </div>
    <?php endif;?>

    <div class="site-navbar-wrap">

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo "><a href="index.html" class="text-danger" >Vitroart </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                      <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                    </a>
                  </div>
                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="#home-section" class="nav-link">Inicio</a></li>
                    <li><a href="#what-we-do-section" class="nav-link">Nossos serviços</a></li>
                    <li><a href="#about-section" class="nav-link">Sobre nós</a></li>
                    <li><a href="#studio-section" class="nav-link">Galeria</a></li>
                    <li><a href="#contact-section" class="nav-link">Contato</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
          <div class="slide">
            <img src="<?=base_url('src/')?>images/sq_img_1.jpeg" alt="Free Website Template by Free-Template.co">  
          </div>
          <div class="slide">
            <img src="<?=base_url('src/')?>images/glint_hero_3.jpeg" alt="Free Website Template by Free-Template.co">  
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto align-self-center">
            <div class="intro">
              <div class="heading">
                <h1 class="text-danger">Serralheria Vitroart</h1>
              </div>
              <div class="text">
                <p class="sub-text mb-5">Priorizando a qualidade para sempre fornecer os melhores produtos aos nossos clientes.</p>
                <p><a href="#contact-section" class="btn btn-outline-primary btn-md">Saiba mais!</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <div class="site-section" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Nossos serviços</span>
            <h2 class="title text-primary">Veja os produtos que a nossa empresa fornece!</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 ml-auto">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Portas</h3>
                  <p>Fazemos todas as séries cores e modelos.</p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Vitraux</h3>
                  <p>Fazemos todas as séries cores e modelos.</p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Telas</h3>
                  <p>Quadros de alumínio e tela de nylon, correr ou fixa, todos os tipos. </p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Corrimão</h3>
                  <p>Corrimão e guarda-corpo, vidro e gradil.</p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Portões</h3>
                  <p>Basculante, corre e abrir, vários modelos </p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Grades</h3>
                  <p>Grades de proteção em geral.</p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Box para banheiro</h3>
                  <p>Box para banheiro em alumínio e vidro temperado</p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Concertos em Geral</h3>
                  <p>Concerto de esquadrias em geral.</p>
                  <p><a href="#contact-section" class="readmore">Saiba mais</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5">
            <img src="<?=base_url('src/')?>images/glint_about_1.jfif" widht="100px" alt="Free Website Template by Free-Template.co" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block">a empresa</span>
            <h2 class="title text-primary mb-3">Sobre-nós</h2>
            <p class="mb-4">40 anos de muitos projetos, a Vitroart traz consigo muita tradição e profissionalismo, com instalações e serviços por toda cidade de Guarulhos, sempre do lado do consumidor.</p>
            <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <li>Qualidade</li>
                <li>Expêriencia</li>
                <li>Profissionalismo</li>
              </ul>
              <ul class="list-unstyled ul-check success">
                <li>Competência</li>
                <li>Agilidade</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> 


    <div class="site-section" id="studio-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Fotos</span>
            <h2 class="title text-primary mb-3">Galeria</h2>
          </div>
        </div>
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_1.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_1.jpeg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_2.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_2.jpeg">
            </a>
          </div>
          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_3.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_3.jpeg">
            </a>
          </div>
          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_4.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_4.jpeg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_5.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_5.jpeg">
            </a>
          </div>
          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_6.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_6.jpeg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_7.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_7.jpeg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_9.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_9.jpeg">
            </a>
          </div>
          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_10.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_10.jpeg">
            </a>
          </div>
          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_11.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_11.jpeg">
            </a>
          </div>
          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_12.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_12.jpeg">
            </a>
          </div>
          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_13.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_13.jpeg">
            </a>
          </div>
          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_14.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_14.jpeg">
            </a>
          </div>
          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url('src/')?>images/sq_img_15.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url('src/')?>images/sq_img_15.jpeg">
            </a>
          </div>
        </div>
      </div>
    </div> 


    <div class="site-section" id="contact-section">
      <div class="container">
        <form action="<?=base_url('welcome/enviar') ?>" class="contact-form" method="post">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">formulário de contato</span>
            <h2 class="title text-primary">Contate-nos</h2>
          </div>

          <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
              <input type="text" class="form-control" name="nome"   placeholder="Primeiro nome">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <textarea class="form-control" name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-md">Enviar</button>
            </div>
          </div>

        </form>
      </div>
    </div> <!-- END .site-section -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">Sobre-nós</h3>
                <p>40 anos de muitos projetos, a Vitroart traz consigo muita tradição e profissionalismo, com instalações e serviços por toda cidade de Guarulhos, sempre do lado do consumidor.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ml-auto">

            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navegação rápida</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="#what-we-do-section" class="smoothscroll">Nossos serviços</a></li>
                  <li><a href="#about-section" class="smoothscroll">Sobre nós</a></li>
                  <li><a href="#studio-section"  class="smoothscroll">Galeria</a></li>
                </ul>
              </div>
            </div>
          </div>
           <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">Local</h3>
                <p>Avenida Tiradentes nº 2451, jardim Pinhal, próximo ao mansão danças.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 pt-5 mt-5 text-center">
            <p><small class="block">&copy; 2019 Desenvolvido por <a href="https://www.facebook.com/samuellucassantosgomes"><strong class="text-white">Samuel Lucas</strong></a>. <br> Todos os direitos reservados.</small> </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="<?=base_url('src/')?>js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url('src/')?>js/popper.min.js"></script>
  <script src="<?=base_url('src/')?>js/bootstrap.min.js"></script>
  <script src="<?=base_url('src/')?>js/owl.carousel.min.js"></script>
  <script src="<?=base_url('src/')?>js/aos.js"></script>
  <script src="<?=base_url('src/')?>js/jquery.sticky.js"></script>
  <script src="<?=base_url('src/')?>js/stickyfill.min.js"></script>
  <script src="<?=base_url('src/')?>js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url('src/')?>js/isotope.pkgd.min.js"></script>

  <script src="<?=base_url('src/')?>js/jquery.fancybox.min.js"></script>
  <script src="<?=base_url('src/')?>js/main.js"></script>


</body>
</html>