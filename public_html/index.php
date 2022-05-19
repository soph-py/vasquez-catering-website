<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VASQUEZ CATERING</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS
  ================================================== -->
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--    flaticon-->
	<link rel="stylesheet" type="text/css" href="css/flaticon.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<!-- Google Fonts API -->
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Quattrocento+Sans&display=swap');
    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navigation" data-offset="20">
     
	<!-- section-top start -->
	<section>
		<div class="container">
			<div class="row">
				<div class="page-top">
					<!-- Inner -->
					<div class="pagetop_inner clearfix">
						<!-- Left Text -->
						<div class="f-left texts">
							<!-- Text -->
							<p> Welcome to VASQUEZ CATERING • Have an upcoming event? We've got you covered! </p>
						</div>
						<!-- Socials -->
						<div class="f-right socials">
							<p>Opening hours: <span>Mon-Sun: 10:00am - 8:00pm</span></p>
						</div>
						<!-- End Socials -->
					</div>
				</div>
				<!-- End Inner -->
			</div>
		</div>
	</section>
	<!-- section-top end -->
	
	<!-- navigation start -->
	<section class="navbar navbar-custom navbar-main main-nav" id="section-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<div class="navbar-brand">
							<a href="index.php" class=" scroll"> <h5><span>VASQUEZ CATERING</span></h5> </a>
						</div>
					</div>
					<!-- /navbar-header end -->
					<nav  class="navbar-collapse collapse navbar-main navbar-main-collapse navbar-right navigation">
						<ul class="nav navbar-nav ">
							<li><a href="#section-banner" class="active scroll">Home</a></li>
							<li><a href="#section-welcome" class="scroll">Our Story</a></li>
                                                        <li><a href="#section-services" class="scroll">Events</a></li>
                                                        <li class="dropdown nav-item">
                                                        <a href="#section-menu" class="nav-link text-white dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Food Menu</a>
                                                        <ul id="disp" class="dropdown-menu dropdown-menu-right uppermenu" aria-labelledby="dropdownMenuLink">
                                                        <li><a  href="#tab-b" aria-controls="tab-b" data-toggle="tab" class="scroll dropmenu socio">Mexican</a></li>
                                                        <li><a  href="#tab-c" aria-controls="tab-c" role="tab" data-toggle="tab" class="scroll dropmenu wedding">Italian</a></li>
                                                        <li><a  href="#tab-d" aria-controls="tab-d" role="tab" data-toggle="tab" class="scroll dropmenu corpor">Buffet</a></li>
                                                        </ul>
                                                        </li>
                                                        <li><a href="#section-testi" class="scroll">Reviews</a></li>
							<li><a href="#section-reservation" class="scroll">Contact Us</a></li>
							<li><a href="#section-footer" class="scroll">Socials</a></li>
						</ul>
					</nav>
					<!-- col end -->
				</div>
			</div>
		</div>
		<!-- conatiner end -->
	</section>
	<!-- navigation end -->
	
	<!-- Slider start -->

    <div id="section-banner">
        <div class="col-md-12 text-center" style="bottom:-175px;">
            <a class="btn btn-primary feature" href="#section-menu">Take me to the menu!</a>
		</div>
	</div>
	<!-- Slider end-->
	
	
	<!-- Section welcome start-->
	<section id="section-welcome" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading wow pulse">
						<h2>Our Story</h2>
						<h3>How it all started</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae animi illo veniam eos unde laborum doloribus quo accusantium dolores fugit quod.</p>
					</div>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12 text-center">
				    <div class="section-heading">
			            <h2>Special Events</h2>
			        </div>
			    </div>
				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-md-4 col-sm-8 col-xs-8">
								<div class="welcome-img"> <img src="images/carousel/meats.png" alt="" class="img-responsive"> </div>
							</div>
							<div class="col-md-4 col-sm-10 col-xs-10">
							    <div class="about-content">
									<h4>Food made with care</h4>
									<h3 class="section-title">Delicious Food made in nice environment</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quidem voluptas repudiandae error provident. Dicta ducimus praesentium impedit. Expedita, veritatis. Dolorum commodi cum atque id deserunt quis non voluptatum autem.</p>
								</div>
							</div>
						</div>
						<!-- item end  -->
						<div class="item ">
							<div class="col-md-4 col-sm-10 col-xs-10">
								<div class="about-content">
									<h4>we offer Nice environment</h4>
									<h3 class="section-title">Delicious Food made in nice environment</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quidem voluptas repudiandae error provident. Dicta ducimus praesentium impedit. Expedita, veritatis. Dolorum commodi cum atque id deserunt quis non voluptatum autem.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-8 col-xs-8">
								<div class="welcome-img"> <img src="images/carousel/condiments.png" alt="" class="img-responsive"> </div>
							</div>
						</div>
						<!-- item end  -->
						<div class="item ">
							<div class="col-md-4 col-sm-8 col-xs-8">
								<div class="welcome-img"> <img src="images/carousel/enchiladas.png" alt="" class="img-responsive"> </div>
							</div>
							<div class="col-md-4 col-sm-10 col-xs-10">
								<div class="about-content">
									<h4>Food made with care</h4>
									<h3 class="section-title">Delicious Food made in nice environment</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quidem voluptas repudiandae error provident. Dicta ducimus praesentium impedit. Expedita, veritatis. Dolorum commodi cum atque id deserunt quis non voluptatum autem.</p>
								</div>
							</div>
						</div>
						<!-- item end  -->
						<div class="item ">
							<div class="col-md-4 col-sm-10 col-xs-10">
								<div class="about-content">
									<h4>Food made with care</h4>
									<h3 class="section-title">Delicious Food made in nice environment</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quidem voluptas repudiandae error provident. Dicta ducimus praesentium impedit. Expedita, veritatis. Dolorum commodi cum atque id deserunt quis non voluptatum autem.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-8 col-xs-8">
								<div class="welcome-img"> <img src="images/carousel/chilerellenos.png" alt="" class="img-responsive"> </div>
							</div>
						</div>
						<!-- item end  -->
					</div>
				</div>
			</div>
			<!-- row end -->
		</div>
		<!-- container end -->
	</section>
	<!-- Section Welcome end-->
	
    <!-- section special menu event    -->
	<section id="section-services" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading wow pulse">
						<h2>Special Events</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae animi illo veniam eos unde laborum doloribus quo accusantium dolores fugit quod.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp">
					<div class="events-box"> <img src="images/bg/gray_background_image.png" alt="" class="img-responsive">
						<div class="event-content">
							<h4>Wedding event</h4>
							<p>Eveniet eius obcaecati nihil earum sed voluptate, non, omnis quisquam totam rerum veniam nostrum quidem dolores iste.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
					<div class="events-box"> <img src="images/bg/gray_background_image.png" alt="" class="img-responsive">
						<div class="event-content">
							<h4>Corporate Meeting</h4>
							<p>Eveniet eius obcaecati nihil earum sed voluptate, non, omnis quisquam totam rerum veniam nostrum quidem dolores iste.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay=".5s">
					<div class="events-box"> <img src="images/bg/gray_background_image.png" alt="" class="img-responsive">
						<div class="event-content">
							<h4>Special Party</h4>
							<p>Eveniet eius obcaecati nihil earum sed voluptate, non, omnis quisquam totam rerum veniam nostrum quidem dolores iste.</p>
						</div>
					</div>
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!-- section speciail menu event     End-->

	
	<!--  section-Menu start    -->
	<section id="section-menu" class="section-padding">
		<div class="container">
			<div class="row">
			    <div class="col-md-12 text-center">
					<div class="section-heading">
						<h2>Catering Menu</h2>
						<p>All menu items displayed below are for <b>Special Events,</b> <i>priced either <b>per person</b> or <b>per dish</b> (tray, pot, jug).</i><br> 
						    Please contact us for more details on pricing for <b>Wedding</b> or <b>Corporate Events.</b><br>
						    <b>We are there to serve for a maximum of 1.5 hours.</b> <i>*Plates, napkins, and utensils are not provided.* </i><br> 
						    We will supply disposable containers and package any remaining food for you. 
					    </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="menubook">
				    <div class="col-md-40 col-sm-40 col-xs-40">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs tab-justified" role="tablist" id="menu-tab">
                        <li role="presentation" class="active soc"><a href="#tab-b" aria-controls="tab-b" role="tab" data-toggle="tab">Mexican</a></li>
						<li class="weda" role="presentation"><a href="#tab-c" aria-controls="tab-c" role="tab" data-toggle="tab">Italian</a></li>
						<li class="cor" role="presentation"><a href="#tab-d" aria-controls="tab-d" role="tab" data-toggle="tab">Buffet Style</a></li>
					</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content">
						
						
						<div role="tabpanel" class="tab-pane fade in active" id="tab-b">
						    
						    <div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    
							    <div class="menu-item text-center" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h3>PER PERSON</h3></div>
									</div>
							</div>
						    
							<div class="col-md-12 col-sm-12 wow fadeInLeft">
                                <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                        <h2 class="h3under">TACO BAR</h2></div>
								    </div>
                                        <div class="menu-item"> 
									    <div class="menu-inner">
                                            <h4 class="h4under">Chicken • Beef • Pork • Lengua <span >$10</span></h4> </div>
									            <p> <b>Comes with</b> <i>(2)</i> choices of meat, rice, beans, condiments & <i>unlimited</i> quesadillas! Add $1 extra per person for <i>(3)</i> meats.<br>
									                <b>- Meat selection includes</b> chicken <i>(pollo)</i>, beef <i>(carne asada)</i>, pork <i>(al pastor)</i>, or tongue <i>(lengua)</i><br>  
									                <b>- Quesadillas</b> are grilled with flour tortillas and monterey jack cheese. Meat added upon request <br> 
									                <b>- Condiments</b> include green (mild) and red (hot) salsas, pico de gallo, chopped cilantro, diced onions, & sliced lemons
									           </p>
								        </div>
							            </div>
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							<div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                        <h2 class="h3under">ENCHILADAS</h2></div>
								    </div>	
                                    <div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Chicken • Beef <span>$10</span></h4> </div>
									        <p> Enchiladas are smothered in red or green sauce and topped with your choice of cheese <br>
									            - Choice of <b>green sauce</b> <i>(mild)</i> or <b>red sauce</b> <i>(hot)</i> <br>
									            - Choice of <b>queso fresco</b>, <b>cheddar</b>, or <b>monterey jack</b> cheese
									       </p>
								    </div>
							    </div>
							    
							<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                                                            
								<div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">CHILE VERDE</h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Pork <span>$11</span></h4> </div>
									<p> Pork chunks smothered in green chile sauce <i>(mild or hot)</i> <br>
									    - Served with corn tortillas, rice, and beans
									</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
                                                            
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">CHILE COLORADO</h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Beef <span>$11</span></h4> </div>
									<p> Red chile sauce, dried chiles, and beef cooked slowly to a succulent stew <br>
									    - Served with warm tortillas, rice, and beans
									</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">BARBACOA</h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Beef <span>$11</span></h4> </div>
									<p> Beef steamed in flavorful sauce <br>
									    - Served with warm corn tortillas, rice, and beans <br>
									    - Chopped cilantro, diced onions, & sliced lemons included
									</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">CHILE RELLENOS</h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Pasilla Chiles <span>$11</span></h4> </div>
									<p> Fresh pasilla chiles cooked in egg batter and stuffed with cheese <br>
									    - <i>Beef can be added upon request </i> <br>
									    <b>   *Optionally, you may request a tray order for this menu item</b>: $50 for a tray of approximately 20 chile rellenos<b>*</b>
									</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner text-center">
									    <h3>PER DISH</h3></div>
									</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">FLAUTAS <span style="float:right;"> 30 per tray </span></h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Chicken • Beef <span>$50 </span></h4> </div>
									<p> Rolled corn tortillas fried in canola oil <br>
									    - Topped with sour cream, diced tomatoes, guacamole <br>
									    - Served with your choice of salsa: red, green, or pico de gallo
									</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">TAMALES <span style="float:right;"> 12 per tray </span></h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Savory • Sweet <span>$26 </span></h4> </div>
									<p> <b>Meat</b> <br>
									   - Chicken <i>(Pollo)</i> <b><i>or</i></b> Beef <i>(Carne asada)</i> <br>
									   <b>Vegetarian</b> <br>
									   - Beans <b><i>or</i></b> Cheese with jalepenos <br> 
									   <b>Dulce</b> <br>
									   - Sweet pineapple, raisins, cinnamon, sugar, coconut <i>(optional)</i>
									</p>
								</div>
							</div>
							
							
							<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">POSOLE ROJO <span style="float:right;"> Serves 30-35 people </span></h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Pork • Hominy <span>$120 </span></h4> </div>
									<p> <b>Red stew simmered with pork meat, hominy and chile peppers</b> <br>
									    - Served with: shredded cabbage, diced onion, sliced radishes, sliced lime, hot sauce
									</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h2 class="h3under">MENUDO <span style="float:right;"> Serves 30-35 people </span></h2></div>
									</div>
									<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Tripe </h4> </div>
									<p> <b>Red chile (mild) soup made with tripe and hominy</b> <br>
									    - Served with: corn tortillas, diced onion, dried oregano, sliced lime
									</p>
								</div>
							</div>
							
							
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    
							    <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner text-center">
									    <h3>AGUAS FRESCAS</h3></div>
									</div>
							</div>
							
							
						</div>
						
						<div role="tabpanel" class="tab-pane fade" id="tab-c">
						    <div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
							    <div class="menu-item text-center" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h3>PER PERSON</h3></div>
									</div>
							</div>
							<div class="col-md-12 col-sm-12 wow fadeInLeft">
								<div class="menu-item"> 
                                                                      <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">SPAGHETTI </h2></div>
								</div>
									<div class="menu-inner">
                                                                            <h4 class="h4under">With meat sauce <span >$10 </span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>

							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
                                                              <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">LASAGNA</h2></div>
								</div>
								<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Meat or Vegetarian <span>$10 </span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>
						</div>
						
						
						<div role="tabpanel" class="tab-pane fade" id="tab-d">
						    <div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
							    <div class="menu-item text-center" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
									    <h3>PER PERSON</h3></div>
									</div>
							</div>
							<div class="col-md-12 col-sm-12 wow fadeInLeft">
								<div class="menu-item"> 
                                                                      <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">SPAGHETTI </h2></div>
								</div>
									<div class="menu-inner">
                                                                            <h4 class="h4under">With meat sauce <span >$10 </span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>

							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
                                                              <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">LASAGNA</h2></div>
								</div>
								<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Meat or Vegetarian <span>$10 </span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>
							
							
							<div class="col-md-12 col-sm-12 wow fadeInLeft">
                                                              <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">Mexican</h2></div>
								</div>
								<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Chicken Fried Salad <span>$10</span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>

							<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                                                              <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">Italian</h2></div>
							<div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
								<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Chicken Fried Salad <span>$10</span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
                                                              <div class="menu-item" style="padding-bottom: 0px !important;"> 
									<div class="menu-inner">
                                                                            <h2 class="h3under">Buffet</h2></div>
								</div>
								<div class="menu-item"> 
									<div class="menu-inner">
										<h4 class="h4under">Chicken Fried Salad <span>$10</span></h4> </div>
									<p> Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!--  section-Menu end    -->
	
        <!--  section-add-review start    -->
	<section id="section-rev" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading wow fadeInDown">
                                            <h2 style="color:#fff">Reviews</h2>
						<h3>How was your experience with us?</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 wow fadeInUp">
					 <form action="index.php" id="contact-form" role="form" method="post" onsubmit="return check_captcha_filled()">
						
                                                <div class="col-md-6 col-sm-6">
						<div class="form-group" id="name-field">
								<input class="form-control contact-form-field cffield-upper" name="fname" id="form-name" placeholder="Your name" type="text" required> </div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" id="email-field">
								<input class="form-control contact-form-field cffield-upper" name="femail" id="form-email" placeholder="Your email" type="email" required> </div>
						</div>
                                              
                                                <div class="col-md-12">
							<div class="form-group form-text text-center" id="message-field">
								<textarea cols="30" rows="6" placeholder="Your feedback" class="form-control contact-form-field" name="fmessage" id="form-message" required></textarea>
							</div>
						</div>
						
						<div class="col-md-12 text-center">
						    
						    <script type="text/javascript">
                                // By default do not allow form submission.
                                    var allow_submit = false

                                    function captcha_filled () {
                                        allow_submit = true
                                    }
                                    function captcha_expired () {
                                        allow_submit = false
                                    }


                                    function check_captcha_filled (e) {
                                        console.log('verify-captcha')
                                        if (!allow_submit) {
                                            alert('ERROR: Please verify you are human by filling out the captcha')

                                            return false
                                        }
                                        captcha_expired()
                                        return true
                                    }
                            </script>
                            
                            <div align="center" class="g-recaptcha" data-callback="captcha_filled" data-expired-callback="captcha_expired" data-sitekey="6Ld83-kfAAAAAAZH8vZ7hByGHfwr0D7xqbxuOeK3">
                            </div>
                            <input type="submit" value="Submit" name="btn" class="btn btn-primary feature" style="bottom:-15px;">
                            
                            <!-- <input type="submit" value="Submit" name="btn" class="btn btn-primary feature" onclick="click()" id="review-btn"> -->
						</div>
						<!--
						<div class="col-md-12 col-sm-4 text-center">
                            <div class="g-recaptcha" data-sitekey="6Ld83-kfAAAAAAZH8vZ7hByGHfwr0D7xqbxuOeK3"></div>
                        </div>
						<div class="col-md-12 text-center" style="bottom:-20px;">
                                                    <input  type="submit" value="Submit" name="btn"  class="btn btn-primary feature" >
							
						</div> -->
					</form>

				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!--  section-Reservation end    -->
    	<?php  
         include_once 'database.php';
         $result = mysqli_query($conn,"select * From reviews ORDER BY revid desc LIMIT 10");
         if (mysqli_num_rows($result) > 0) {
             $count= mysqli_num_rows($result);
         ?>
	<!--  section-testimonial start    -->
	<section id="section-testi" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="carousel slide" id="testimonial-carousel" data-ride="carousel">
					<!-- Indicators -->
                                 
					<ol class="carousel-indicators">
                                            <?php   for($b=0;$b<$count;$b++) { if($b ==0 ){$activec='class="active"'; }else{$activec='';} ?>
						<li data-target="#testimonial-carousel" data-slide-to="<?= $b?>"  <?= $activec ?> ></li>
						<?php  } ?>
                                             
					</ol>
                                             
					<div class="carousel-inner" role="listbox">
                                               <?php $i=0;  while($row = mysqli_fetch_array($result)) {    if($i ==0){$active='active'; }else{$active='';} ?>
                                               <div class="item <?= $active ?>">
                                                  <div class="testimonail-caption"> <i class="fa fa-quote-left"></i>
								<p><?php echo $row["feedback"]; ?></p>
								<div class="test-content">
									<h3>- <?php echo $row["name"]; ?></h3> </div>
							</div>
                                                   
						</div>
						 <?php $i++; } ?>
					</div>
                                   
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!--  section-testimonial end    -->
             <?php }else{ ?>
        <!--  section-testimonial start    -->
	<section id="section-testi" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="carousel slide" id="testimonial-carousel" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#testimonial-carousel" data-slide-to="1"></li>
						<li data-target="#testimonial-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="testimonail-caption"> <i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati eveniet rerum, blanditiis ex quasi reprehenderit itaque error mollitia eligendi at in quaerat. Error molestias voluptatum assumenda similique, deserunt, rem minus!</p>
								<div class="test-content">
									<h3>- joe adam</h3> </div>
							</div>
						</div>
						<div class="item ">
							<div class="testimonail-caption"> <i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati eveniet rerum, blanditiis ex quasi reprehenderit itaque error mollitia eligendi at in quaerat. Error molestias voluptatum assumenda similique, deserunt, rem minus!</p>
								<div class="test-content">
									<h3>- martin adam</h3> </div>
							</div>
						</div>
						<div class="item ">
							<div class="testimonail-caption"> <i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati eveniet rerum, blanditiis ex quasi reprehenderit itaque error mollitia eligendi at in quaerat. Error molestias voluptatum assumenda similique, deserunt, rem minus!</p>
								<div class="test-content">
									<h3>- lora defil</h3> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!--  section-testimonial end    --> <?php
        } ?>
        
	<!--  section-Contact start    -->
	<section id="section-reservation" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading wow fadeInDown">
						<h2>Contact Us</h2>
						<h3>For all inquiries, please fill out the form below</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 wow fadeInUp">
					 <form action="index.php" id="contact-form" role="form" method="post" onsubmit="return check_captcha_filled()">
						<div class="col-md-6 col-sm-6">
							<div class="form-group" id="name-field">
								<input class="form-control contact-form-field cffield-upper" name="fname" id="form-name" placeholder="Your name" type="text" required> </div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" id="email-field">
								<input class="form-control contact-form-field cffield-upper" name="femail" id="form-email" placeholder="Your email" type="email" required> </div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" id="mobile-field">
								<input class="form-control contact-form-field cffield-upper" name="fmobile" id="form-mobile" placeholder="Contact No" type="text" required> </div>
						</div>
                                             <div class="col-md-6 col-sm-6">
							<div class="form-group" id="person-field">
								<input class="form-control contact-form-field cffield-upper" name="fperson" id="form-person" placeholder="No of Guests" type="text" required> </div>
						</div>
						<div class="col-md-12">
							<div class="form-group form-text text-center" id="message-field">
								<textarea cols="30" rows="6" placeholder="Your message" class="form-control contact-form-field" name="fmessage" id="form-message" required></textarea>
							</div>
						</div>
                    <div class="col-md-12 text-center">
                        <script type="text/javascript">
                                // By default do not allow form submission.
                                    var allow_submit = false

                                    function captcha_filled () {
                                        allow_submit = true
                                    }
                                    function captcha_expired () {
                                        allow_submit = false
                                    }


                                    function check_captcha_filled (e) {
                                        console.log('verify-captcha')
                                        if (!allow_submit) {
                                            alert('ERROR: Please verify you are human by filling out the captcha')

                                            return false
                                        }
                                        captcha_expired()
                                        return true
                                    }
                        </script>
                            
                        <div align="center" class="g-recaptcha" data-callback="captcha_filled" data-expired-callback="captcha_expired" data-sitekey="6Ld83-kfAAAAAAZH8vZ7hByGHfwr0D7xqbxuOeK3">
                        </div>
                            <input  type="submit" value="Send data" name="contactbtn"  class="btn btn-primary feature" style="bottom:-15px;">
						<!-- <div class="col-md-12 text-center">
                            <input  type="submit" value="Send data" name="contactbtn"  class="btn btn-primary feature" style="bottom:-20px;">
                                                    
						</div> -->
                        </div>
                            <!-- <input type="submit" value="Submit" name="btn" class="btn btn-primary feature" onclick="click()" id="review-btn"> -->
					</form>
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!--  section-Reservation end    -->
	
	
	
	<!--    section footer start -->
	<section id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInDown">
					<div class="footer-content"> <h2 style="color:#f53700;">VASQUEZ CATERING </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis nulla commodi ut porro deserunt sapiente natus nihil consequatur.</p>
						<ul class="footer-social list-inline">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-yelp"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 wow fadeInDown">
					<div class="footer-contact">
						<ul>
							<li><a href="tel:+4083329827"><i class="fa fa-phone"></i>(408) 332-9827</a></li>
							<li><a href="https://www.vasquez-catering.com"><i class="fa fa-globe"></i> vasquez-catering.com</a></li>
							<li><a href="mailto:vasquezcatering@yahoo.com"><i class="fa fa-envelope-o"></i>vasquezcatering@yahoo.com</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</section>
	<!--    section footer end -->
	
	<!-- Footer start    -->
	<footer id="footer-btm">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5 wow fadeInLeft">
					<div class="copyright"> <a href="#" class="copy">&copy; VASQUEZ CATERING 2022</a> </div>
				</div>
				<div class="col-md-7 col-sm-7 wow fadeInRight ">
					<div class="footer-menu pull-right">
						<ul class="list-inline">
							<li><a href="#section-banner" class="active scroll">Home</a></li>
							<li><a href="#section-welcome" class="scroll">Our Story</a></li>
                                                        <li><a href="#section-special" class="scroll">Events</a></li>
                                                        
                                                        <li class="dropdown nav-item">
                                                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Menu 
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right footermenu" aria-labelledby="dropdownMenuLink">
                                                         <li><a  href="#tab-c" aria-controls="tab-c" role="tab" data-toggle="tab" class="scroll dropmenu socio">Social Event</a></li>
                                                        <li><a  href="#tab-b" class="scroll dropmenu wedding">Wedding  Event</a></li>
                                                        <li><a  href="#tab-d" aria-controls="tab-d" role="tab" data-toggle="tab" class="scroll dropmenu corpor">Corporate  Event</a></li>
                                                        </ul>
                                                        </li>
                                                        
                                                        <li><a href="#section-testi" class="scroll">Reviews</a></li>
							<li><a href="#section-reservation" class="scroll">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--    row end -->
		</div>
		<!--    container end -->
	</footer>
	<!-- Footer end    -->
	
	<!-- Page back to top -->
	<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix"> <a class="btn btn-primary scroll" href="#section-banner" title="Back to Top"><i class="fa fa-angle-double-up"></i></a> </div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="js/wow.min.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Sticky JS -->
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<!-- theme js	 -->
	<script type="text/javascript" src="js/custom.js"></script>
        
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        
        $(document).ready(function() {
         
         document.getElementById("dropdownMenuLink").addEventListener("click", function toffi(){
  var sw = document.getElementById("disp");
  if (sw.style.display === "block") {
    sw.style.display = "none";
  } else {
    sw.style.display = "block";
  }
  
});   

$(".corpor").click(function () {
    $(".cor").addClass("active");
    $(".soc").removeClass("active");
    $(".weda").removeClass("active");
    $('html, body').animate({scrollTop: $(".cor").offset().top}, 2000);
});

$(".socio").click(function () {
    $(".soc").addClass("active");
    $(".weda").removeClass("active");
    $(".cor").removeClass("active");
    $('html, body').animate({scrollTop: $(".soc").offset().top}, 2000);
});
$(".wedding").click(function () {
     $(".weda").addClass("active");
    $("#tab-b").addClass("in active");
    $(".soc").removeClass("active");
    $(".cor").removeClass("active");
    $('html, body').animate({scrollTop: $(".weda").offset().top}, 2000);
});

});
</script>
</body>

</html>

<?php
if(isset($_POST['btn'])){
    
    // access
    $secretKey = '6Ld83-kfAAAAAHdd1b10CEIx6fuk3ASapmz6deG-';
    $captcha = $_POST['g-recaptcha-response'];
    if(!$captcha){
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
          exit;
    }

    $name    = stripslashes(trim($_POST['fname']));
    $email   = stripslashes(trim($_POST['femail']));
    $feedback = stripslashes(trim($_POST['fmessage']));
   
    include_once 'database.php';
   
    $sql = "INSERT INTO reviews (name,email,feedback) VALUES ('$name','$email','$feedback')";
   
    if ($conn->query($sql) === TRUE) {
        $_SESSION['msg'] = 'Review Added Successfully!';
       
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
        
}


if(isset($_POST['contactbtn'])) {
    // access
    $secretKey = '6Ld83-kfAAAAAHdd1b10CEIx6fuk3ASapmz6deG-';
    $captcha = $_POST['g-recaptcha-response'];
    if(!$captcha){
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
          exit;
    }
    
    $subjectPrefix = '[VASQUEZ CATERING]';
    $emailTo = 'vasquezcatering@yahoo.com';
    $errors = array(); // array to hold validation errors
    $data   = array(); // array to pass back data
    
    $name    = stripslashes(trim($_POST['fname']));
    $email   = stripslashes(trim($_POST['femail']));
    $mobile   = stripslashes(trim($_POST['fmobile']));
    $person   = stripslashes(trim($_POST['fperson']));
    $message = stripslashes(trim($_POST['fmessage']));
    if (empty($name)) {
        $errors['fname'] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['femail'] = 'Email is invalid.';
    }
   	 if (empty($mobile)) {
        $errors['fmobile'] = 'mobile is required.';
    }
     if (empty($person)) {
        $errors['fperson'] = 'person is required.';
    }
    if (empty($message)) {
        $errors['fmessage'] = 'Message is required.';
    }
    // if there are any errors in our errors array, return a success boolean or false
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $subject = $subjectPrefix;
        $body    = '
            <strong>Name: </strong>'.$name.'<br />
            <strong>Email: </strong>'.$email.'<br />
            <strong>Contact no of Function: </strong>'.$mobile.'<br />
            <strong>No Of Guests: </strong>'.$person.'<br />
            <strong>Message: </strong>'.nl2br($message).'<br />
        ';
        $headers .= "Organization: Vasquez Catering\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers  = "MIME-Version: 1.1" . PHP_EOL;
        $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $headers .= "Content-Transfer-Encoding: 8bit" . PHP_EOL;
        $headers .= "Date: " . date('r', $_SERVER['REQUEST_TIME']) . PHP_EOL;
        $headers .= "Message-ID: <" . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . PHP_EOL;
        $headers .= "From: " . "=?UTF-8?B?".base64_encode($name)."?=" . "<$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
        $headers .= "X-Originating-IP: " . $_SERVER['SERVER_ADDR'] . PHP_EOL;
        mail($emailTo, "=?utf-8?B?" . base64_encode($subject) . "?=", $body, $headers);
        $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';
    }
    // return all our data to an AJAX call
//    echo json_encode($data);
	// Die with a success message
//die("<span class='success'>Success! Your message has been sent.</span>");
	
             //do your validation or something here
         $_SESSION['msg'] = 'Email Send Successfully!';
         header("Refresh:0");
}
?>

<?php if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) { ?>
           <script>
              var php_var = "<?php echo $_SESSION['msg']; ?>";
              
              swal({
  title: "Success!",
  text: php_var,
  type: "success",
  timer: 5000,
  showConfirmButton: true
}, function(){
      window.location.href = "/index.php";
});
            </script>
        <?php
    unset($_SESSION['msg']);
    }
    ?>