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
      <title>Listados Alumnos Tabla Chamilo</title>
      
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
      <div class="page-banner page-banner-overlay" data-background="assets/img/bg/banner-bg-4.jpg">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-12 my-auto">
                  <div class="page-banner-content text-center">
                     <h2 class="page-banner-title">Listados Estudiantes Tabla Chamilo</h2>
                     <div class="page-banner-breadcrumb">
                        <p><a href="#">Home</a> Notices</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-banner-shape"></div>
      </div>
      <!-- END PAGEBREDCUMS -->

      <!-- START NOTICE PAGE SECTION -->
      <section id="notice" class="section-padding">
         <div class="auto-container">
            <!--
            <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Personas Registradas</th>
									<th>Telefono</th>
                           <th>Correo</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                      include("conexion.php");
                        $usuarios=$base->query("SELECT * FROM user")->fetchAll(PDO::FETCH_OBJ);
                       foreach ($usuarios as $lista):
                     ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php echo $lista->id?>.</p>
									</td>
									<td>
										<p><a href="#"><?php echo $lista->lastname?>&nbsp<?php echo $lista->firstname?></a></p>
									</td>
									<td>
										<p><?php echo $lista->username?></p>
									</td>
                           <td>
										<p><?php echo $lista->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>
							</tbody>
                     <?php endforeach; ?>
						</table>
					</div>
                </div>
               !-- end col --
            </div>
            !-- Inicio tabla 2 -->
            <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Alumnos Sexto</th>
									<th>Usuario</th>
                           <th>Password</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                     
                      include("conexion.php");
                       // $lista=$base->query("SELECT * FROM course_rel_user WHERE c_id=3")->fetchAll(PDO::FETCH_OBJ);
                       $lista6=$base->query(" 
                       SELECT `lastname`,`firstname`,`username`,`password`,`phone`,`email` FROM `user` 
                        WHERE `id` IN
                       (SELECT `user_id` FROM `course_rel_user` WHERE `c_id`=2)
                       ")->fetchAll(PDO::FETCH_OBJ);
                       foreach ($lista6 as $sexto):
                       
                        ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php // echo $septimo->id?>1.</p>
									</td>
									<td>
										<p><a href="#"><?php  echo $sexto->lastname?>&nbsp<?php echo $sexto->firstname?>&nbsp<?php // echo $septimo->p_apellido?>&nbsp<?php // echo $septimo->s_apellido?></a></p>
									</td>
									<td>
										<p><?php echo $sexto->username?></p>
									</td>
                           <td>
										<p><?php echo $sexto->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>	
							</tbody>
                     <?php  endforeach; ?>
						</table>
					</div>
                </div>
               <!-- end col -->
            </div>
            <!-- FIn tabla 2 -->
             <!-- Inicio tabla 3 -->
             <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Alumnos Septimo</th>
									<th>Usuario</th>
                           <th>Password</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                      include("conexion.php");
                      //  $alumno8=$base->query("SELECT * FROM octavo ")->fetchAll(PDO::FETCH_OBJ);
                      $lista7=$base->query(" 
                       SELECT `lastname`,`firstname`,`username`,`password`,`phone`,`email` FROM `user` 
                        WHERE `id` IN
                       (SELECT `user_id` FROM `course_rel_user` WHERE `c_id`=10)
                       ")->fetchAll(PDO::FETCH_OBJ);
                       foreach ($lista7 as $septimo):
                     ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php // echo $octavo->id?>2.</p>
									</td>
									<td>
										<p><a href="#"><?php echo $septimo->lastname?>&nbsp<?php echo $septimo->firstname?>&nbsp<?php // echo $octavo->p_apellido?>&nbsp<?php // echo $octavo->s_apellido?> </a></p>
									</td>
									<td>
										<p><?php echo $septimo->username?></p>
									</td>
                           <td>
										<p><?php echo $septimo->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>
								
							</tbody>
                     <?php endforeach; ?>
						</table>
					</div>
                </div>
               <!-- end col -->
            </div>
          
           
            <!-- FIn tabla 3 -->
            <!-- Inicio tabla 4 -->
            <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Alumnos Octavo</th>
									<th>Usuario</th>
                           <th>Password</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                      include("conexion.php");
                      $lista8=$base->query(" 
                      SELECT `lastname`,`firstname`,`username`,`password`,`phone`,`email` FROM `user` 
                       WHERE `id` IN
                      (SELECT `user_id` FROM `course_rel_user` WHERE `c_id`=4)
                      ")->fetchAll(PDO::FETCH_OBJ);
                      foreach ($lista8 as $octavo):
                     ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php // echo $octavo->id?>3.</p>
									</td>
									<td>
										<p><a href="#"><?php echo $octavo->astname?>&nbsp<?php echo $octavo->firstname?>&nbsp<?php // echo $noveno->p_apellido?>&nbsp<?php // echo $noveno->s_apellido?> </a></p>
									</td>
									<td>
										<p><?php echo $octavo->username?></p>
									</td>
                           <td>
										<p><?php echo $octavo->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>
							
							</tbody>
                     <?php endforeach; ?>
						</table>
					</div>
                </div>
               <!-- end col -->
            </div>
            <!-- FIn tabla 4 -->
            <!-- Inicio tabla 5 -->
            <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Alumnos Noveno</th>
									<th>Usuario</th>
                           <th>Password</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                      include("conexion.php");
                      $lista9=$base->query(" 
                      SELECT `lastname`,`firstname`,`username`,`password`,`phone`,`email` FROM `user` 
                       WHERE `id` IN
                      (SELECT `user_id` FROM `course_rel_user` WHERE `c_id`=5)
                      ")->fetchAll(PDO::FETCH_OBJ);
                      foreach ($lista9 as $noveno):
                     ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php // echo $noveno->id?>4.</p>
									</td>
									<td>
										<p><a href="#"><?php echo $noveno->lastname?>&nbsp<?php echo $noveno->firstname?>&nbsp<?php // echo $decimo->p_apellido?>&nbsp<?php // echo $decimo->s_apellido?> </a></p>
									</td>
									<td>
										<p><?php echo $noveno->username?></p>
									</td>
                           <td>
										<p><?php echo $noveno->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>
								
							</tbody>
                     <?php endforeach; ?>
						</table>
					</div>
                </div>
               <!-- end col -->
            </div>
            <!-- FIn tabla 5 -->
            <!-- Inicio tabla 6 -->
            <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Alumnos Decimo</th>
									<th>Usuario</th>
                           <th>Password</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                      include("conexion.php");
                      $lista10=$base->query(" 
                      SELECT `lastname`,`firstname`,`username`,`password`,`phone`,`email` FROM `user` 
                       WHERE `id` IN
                      (SELECT `user_id` FROM `course_rel_user` WHERE `c_id`=6)
                      ")->fetchAll(PDO::FETCH_OBJ);
                      foreach ($lista10 as $decimo):
                     ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php // echo $decimo->id?>5.</p>
									</td>
									<td>
										<p><a href="#"><?php echo $decimo->lastname?>&nbsp<?php echo $decimo->firstname?>&nbsp<?php // echo $once->p_apellido?>&nbsp<?php // echo $once->s_apellido?> </a></p>
									</td>
									<td>
										<p><?php echo $decimo->username?></p>
									</td>
                           <td>
										<p><?php echo $decimo->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>
								
							</tbody>
                     <?php endforeach; ?>
						</table>
                  
					</div>

                </div>
               <!-- end col -->
            </div>
            <!-- FIn tabla 6 -->
            <!-- Inicio tabla 6 -->
            <div class="row">
               	<div class="col-12">
					<div class="notice-board table-responsive">
						<table class="table table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>No.</th>
									<th>Alumnos Once</th>
									<th>Usuario</th>
                           <th>Password</th>
									<th>Download </th>
								</tr>
							</thead>
                     <?php
                      include("conexion.php");
                      $lista11=$base->query(" 
                      SELECT `lastname`,`firstname`,`username`,`password`,`phone`,`email` FROM `user` 
                       WHERE `id` IN
                      (SELECT `user_id` FROM `course_rel_user` WHERE `c_id`=8)
                      ")->fetchAll(PDO::FETCH_OBJ);
                      foreach ($lista11 as $once):
                     ?>
							<tbody class="mt-3">
								<tr>
									<td>
										<p class="number"><?php // echo $once->id?>6.</p>
									</td>
									<td>
										<p><a href="#"><?php echo $once->lastname?>&nbsp<?php echo $once->firstname?>&nbsp<?php // echo $once->p_apellido?>&nbsp<?php // echo $once->s_apellido?> </a></p>
									</td>
									<td>
										<p><?php echo $once->username?></p>
									</td>
                           <td>
										<p><?php echo $once->password?></p>
									</td>
									<td>
										<p class="text-center"><a href="#" class="btn-dn btn-success"><i class="icofont-download"></i> Download</a> </p>
									</td>
								</tr>
								
							</tbody>
                     <?php endforeach; ?>
						</table>
                  
					</div>

                </div>
               <!-- end col -->
            </div>
            <!-- FIn tabla 6 -->

            <!-- START PAGINATION --
            <div class="row wow fadeInUp mt-5">
               <div class="col-12">
                   <div class="site-pagination">
                       <div class="navbar justify-content-center">
                         <ul class="pagination">
                           <li class="page-item">
                             <a class="page-link" href="#" aria-label="Previous">
                               <i class="icofont-caret-left"></i>
                             </a>
                           </li>
                           <li class="page-item active"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link bo-tl" href="#">2</a></li>
                           <li class="page-item"><a class="page-link bo-tl" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#">. . .</a></li>
                           <li class="page-item"><a class="page-link bo-tl" href="#">8</a></li>
                           <li class="page-item">
                             <a class="page-link" href="#" aria-label="Next">
                               <i class="icofont-caret-right"></i>
                             </a>
                           </li>
                         </ul>
                       </div>
                   </div>
               </div>
           </div>
           !-- END PAGINATION -->


         </div>
      </section>
      <!-- END NOTICE PAGE SECTION -->

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