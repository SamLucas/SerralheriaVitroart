<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$from = $email;
$to = "samuellucas0603@gmail.com";
$subject = "Mensagem do site: ".$nome." ".$sobrenome;
$message = $mensagem;
$headers = "De:". $from;

if(mail($to, $subject, $message, $headers)):?>
	<script>
		$("#myModal").modal()
	</script>
<?php endif; ?>

<!-- 
////////////////////////////////////////////////////////////////

Author: Free-Template.co
Author URL: http://free-template.co.
License: https://creativecommons.org/licenses/by/3.0/
License URL: https://creativecommons.org/licenses/by/3.0/
Site License URL: https://free-template.co/template-license/
  
Website:  https://free-template.co
Facebook: https://www.facebook.com/FreeDashTemplate.co
Twitter:  https://twitter.com/Free_Templateco
RSS Feed: https://feeds.feedburner.com/Free-templateco

////////////////////////////////////////////////////////////////
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VITROART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
 <!--  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo "><a href="index.html" >VITROART </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                  </a></div>

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
    </div> <!-- END .site-navbar-wrap -->
    
    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
          <div class="slide">
            <img src="images/sq_img_1.jpeg" alt="Free Website Template by Free-Template.co">  
          </div>
          <div class="slide">
            <img src="images/sq_img_4.jpeg" alt="Free Website Template by Free-Template.co">  
          </div>
          <div class="slide">
            <img src="images/glint_hero_3.jpeg" alt="Free Website Template by Free-Template.co">  
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
    </div> <!-- END .site-blocks-cover -->

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
    </div> <!-- END .site-section -->

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5">
            <img src="images/glint_about_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block">a empresa</span>
            <h2 class="title text-primary mb-3">Sobre-nós</h2>
            <p class="mb-4">40 anos de muitos projeto, a Vitroart traz consigo muita tradição e profissionalismo, com instalações e serviços por toda cidade de Guarulhos, sempre do lado do consumidor.</p>
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
            <!-- <p><a data-fancybox data-ratio="2" href="https://vimeo.com/326176805" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p> -->
          </div>
        </div>
      </div>
    </div> <!-- .END site-section -->

    
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
            <a href="images/sq_img_1.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_1.jpeg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_2.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_2.jpeg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_3.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_3.jpeg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_4.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_4.jpeg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_5.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_5.jpeg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_6.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_6.jpeg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_7.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_7.jpeg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_9.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_9.jpeg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_10.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_10.jpeg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_11.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_11.jpeg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_13.jpeg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_13.jpeg">
            </a>
          </div>


        </div>
      </div>
    </div> <!-- END .site-section -->
    
    <div class="site-section" id="contact-section">
      <div class="container">
        <form action="email.php" class="contact-form" method="post">

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
              <textarea class="form-control" name="" name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
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
                <p>40 anos de muitos projeto, a Vitroart traz consigo muita tradição e profissionalismo, com instalações e serviços por toda cidade de Guarulhos, sempre do lado do consumidor.</p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
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

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Inscreva-se em nossa Newsletter</h3>
              <p>Siga nosso newsletter  para receber todas as nossas postagens por email.</p>

              <form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Nome Completo" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>

            </div>

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <!-- <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a> -->
                </div>
            <p>
              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
          <small class="block">&copy; 2019 Desenvolvido por <strong class="text-white">Samuel Lucas</strong>. <br> Todos os direitos reservados.</small> 
          </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

     
  </body>
</html>



<div class="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>A mensagem de e-mail foi enviada.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
