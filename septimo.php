<!DOCTYPE html>
<html lang="zxx">

   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

      <!--Page Title-->
      <title>Formulario Septimo</title>
      
      <!-- Bootstrap core CSS -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Google Font  -->
      <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800|Roboto:300,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <!-- Fontawesome CSS --> 
      <link rel="stylesheet" href="assets/css/icofont.min.css">
      <!-- Meanmenu CSS --> 
      <link rel="stylesheet" href="assets/css/meanmenu.min.css">
      <!--- owl carousel Css-->
      <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
      <!-- animate CSS -->
      <link rel="stylesheet" href="assets/css/animate.css">
      <!-- venobox -->
      <link rel="stylesheet" href="assets/venobox/css/venobox.css" />
      <!-- Style CSS --> 
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive  CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
      
      <!-- START PRELOADER -->
      <div id="page-preloader">
         <div class="loader"></div>
         <div class="loa-shadow"></div>
      </div>
      <!-- END PRELOADER -->

      <!-- START HEADER SECTION -->
      <header class="main-header">
         <!-- START TOP AREA -->
         <?php include('modulos/toparea.php');?>
         <!-- END TOP AREA -->

         <!-- START LOGO AREA -->
         <?php include('modulos/logoarea.php');?>
         <!-- END LOGO AREA -->

         <!-- START NAVIGATION AREA -->
         <?php include('modulos/navegacion.php');?>
         <!-- END NAVIGATION AREA --> 
      </header>
      <!-- END HEADER SECTION -->

      <!-- START PAGEBREDCUMS -->
      <div class="page-banner page-banner-overlay" data-background="assets/img/bg/banner-bg-5.jpg">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Estudiantes grado Septimo</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="#">Inicio</a> Admisiones Colegio</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START ADMISSION PAGE SECTION -->
      
      <!-- END ADMISSION PAGE SECTION -->

      <!-- START ADMISSION FORM PAGE SECTION -->
      <section id="admissionform" class="section-padding bg-gray">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-10 col-md-10 col-12 mx-auto">
                  <div class="faq-lis-heading text-center">
                     <h2>Formulario de Registro grado Septimo para Estudiantes</h2>
                  </div>
                  <div class="faq-contact-form-wrap shadow bg-white">
                     <form class="faq-contact-form contact-form"  action="ingresa_septimo.php" method="POST">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" name="p_nom"  class="form-control" id="firstName" placeholder="John" required>
                                 <label for="firstName">Primer Nombre*</label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" name="s_nom" class="form-control" id="lastName" placeholder="Doe" >
                                 <label for="lastName">Segundo Nombre</label>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" name="p_ape" class="form-control" id="faNamef" placeholder="John" required>
                                 <label for="faNamef">Primer Apellido*</label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" name="s_ape"  class="form-control" id="moNamem" placeholder="Doe" >
                                 <label for="moNamem">Segundo Apellido</label>
                              </div>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="number" name="telefono" class="form-control" id="contactNumber" placeholder="xxx-xxx-xxxx" >
                                 <label for="contactNumber">Telefono</label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="email" name="correo" class="form-control" id="email" placeholder="example@xyz.com" >
                                 <label for="email">Email</label>
                              </div>
                           </div>
                        </div>
                        <div class="text-center wow fadeInUp">
                           <button type="submit" class=" btn faq-btn">Enviar Registro</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
      </section>
      <!-- END ADMISSION FORM PAGE SECTION -->

      <!-- START NEWSLETTER SECTION -->
     
      <!-- START NEWSLETTER SECTION -->

      <!-- START FOOTER -->
      <?php include('modulos/pie.php');?>
      <!-- END FOOTER -->

      <!-- Latest jQuery -->
      <script src="assets/js/jquery-2.2.4.min.js"></script>
      <!-- popper js -->
      <script src="assets/bootstrap/js/popper.min.js"></script>
      <!-- Latest compiled and minified Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <!-- Meanmenu Js -->
      <script src="assets/js/jquery.meanmenu.js"></script>
      <!-- Sticky JS -->
      <script src="assets/js/jquery.sticky.js"></script>
      <!-- countdown JS -->
      <script src="assets/js/jquery.countdown.min.js"></script>
      <!-- owl-carousel min js  -->
      <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
      <!-- isotope js -->
      <script src="assets/js/isotope.3.0.6.min.js"></script>
      <!-- venobox js -->
      <script src="assets/venobox/js/venobox.min.js"></script>    
      <!-- jquery appear js  -->
      <script src="assets/js/jquery.appear.js"></script>
      <!-- countTo js -->
      <script src="assets/js/jquery.inview.min.js"></script>
      <!-- scrolltopcontrol js -->
      <script src="assets/js/scrolltopcontrol.js"></script>
      <!-- WOW - Reveal Animations When You Scroll -->
      <script src="assets/js/wow.min.js"></script>
      <!-- scripts js -->
      <script src="assets/js/scripts.js"></script>
   </body>
</html>