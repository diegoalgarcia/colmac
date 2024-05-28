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
      <title>Contactos</title>
      
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
      <div class="page-banner page-banner-overlay" data-background="assets/img/bg/banner-bg.jpg">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Contactenos</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="index.php">Inicio</a> contactenos</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START CONTACT PAGE SECTION -->
      <section id="contcat" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-5 col-md-5 col-12 mb-lg-0 mb-md-0 mb-5">
                 <div class="address-box-wrap bg-gray shadow-sm p-lg-5 p-md-3 p-3">
                     <div class="address-box-sin mb-4">
                        <div class="address-box-icon">
                           <i class="icofont-location-pin"></i>
                        </div>
                        <div class="address-box-des">
                           <h4>Dirección</h4>
                           <p>Cra 2 #2-33, Barrio Gaviota <br> Ibagué, Tolima</p>
                        </div>
                     </div>
                     <!-- end single address box -->
                     <div class="address-box-sin mb-4">
                        <div class="address-box-icon">
                           <i class="icofont-envelope-open"></i>
                        </div>
                        <div class="address-box-des">
                           <h4>Envianos un Email</h4>
                           <p>blancanidiagc@hotmail.com <br> info@your_website.com</p>
                        </div>
                     </div>
                     <!-- end single address box -->
                     <div class="address-box-sin mb-4">
                        <div class="address-box-icon">
                           <i class="icofont-fax"></i>
                        </div>
                        <div class="address-box-des">
                           <h4>Llamanos</h4>
                           <p>+322 3365 104 <br> +315 4710595</p>
                        </div>
                     </div>
                     <!-- end single address box -->
                     <div class="address-box-sin">
                        <div class="address-box-icon">
                           <i class="icofont-eye"></i>
                        </div>
                        <div class="address-box-des">
                           <h4>Horarios</h4>
                           <p>Lun - Vier: 6:30 AM - 5 PM <br> Dom: Close</p>
                        </div>
                     </div>
                     <!-- end single address box -->
                 </div>
               </div>
               <!-- end col -->
               <div class="col-lg-7 col-md-7 col-12 pl-lg-5 pl-md-3 pl-0">
                  <div class="contact-heading mb-5">
                     <h2>Envianos un mensaje</h2>
                  </div>
                  <div class="contact-form-wrap">
                     <form id="main-form" class="contact-form form" name="enq" method="POST" action="form-process.php">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-icon"><i class="icofont-user"></i></span>
                                 <input type="text" class="form-control" id="name" placeholder="John" required>
                                 <label for="name">Nombres*</label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-icon"><i class="icofont-envelope"></i></span>
                                 <input type="email" class="form-control" id="email" placeholder="example@xyz.com" required>
                                 <label for="email">Email*</label>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-icon"><i class="icofont-ui-dial-phone"></i></span>
                                 <input type="text" class="form-control" id="number" placeholder="xxx-xxx-xxxx" required>
                                 <label for="number">Telefono*</label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <span class="form-icon"><i class="icofont-at"></i></span>
                                 <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                                 <label for="subject">Asunto*</label>
                              </div>
                           </div>
                        </div>
                        <div class="form-group form-message">
                           <textarea class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                           <label for="message">Mensaje</label>
                        </div>
                        <div class="text-center wow fadeInUp">
                            <div class="actions">
                                <input value="ENVIAR MENSAJE" name="submit" id="submitButton" class="btn con-btn" title="Click here to submit your message!" type="submit">
                                <img src="assets/img/ajax-loader.gif" id="loader" style="display:none" alt="loading" width="16" height="16">
                            </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
      </section>
      <!-- END CONTACT PAGE SECTION -->

      <!-- START MAP SECTION -->
      <div class="section-padding py-0">
         <!-- start google map -->
         <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Brooklyn%20NY%2010004&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
         </div>
         <!-- end google map -->
      </div>
      <!-- END MAP SECTION -->

      <!-- START CLIENT LOGO SECTION -->
      <div id="clients" class="client-padding bg-gray">
          <div class="container">
              <div class="row mb-lg-0 mb-md-0 mb-5">
                  <div class="col">
                      <div class="clients-slides owl-carousel owl-theme">
                          <div class="single-client-item">
                              <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/1.png"></a>
                          </div>
                          <!-- end single item -->
                          <div class="single-client-item">
                              <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/2.png"></a>
                          </div>
                          <!-- end single item -->
                          <div class="single-client-item">
                              <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/3.png"></a>
                          </div>
                          <!-- end single item -->
                          <div class="single-client-item">
                              <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/4.png"></a>
                          </div>
                          <!-- end single item -->
                          <div class="single-client-item">
                              <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/5.png"></a>
                          </div>
                          <!-- end single item -->
                          <div class="single-client-item">
                              <a href="#"><img class="img-fluid" alt="" src="assets/img/clients/6.png"></a>
                          </div>
                          <!-- end single item -->
                      </div>
                  </div>
              </div>
          </div>  
      </div>
      <!-- START CLIENT LOGO SECTION -->

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
      <!-- form-contact js -->
      <script src="assets/js/form-contact.js"></script>
      <!-- scripts js -->
      <script src="assets/js/scripts.js"></script>
   </body>
</html>