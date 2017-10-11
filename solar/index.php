<?php
if(isset($_POST['submit'])){
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$mess=$_POST['message'];
$message="Name-".$fullname." "."Email-".$email." "."Message-".$mess;
mail('raghu.raaj01@gmail.com','New client of ENERGY.COM',$message);
echo "<script>alert('Thanks, We Will Contact You Soon')</script>";
}
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->	
	<title>EnergyX</title>	
	<meta name="description" content="">
	<meta name="EnergyX" content="EnergyX is a solar company based out of India.">    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    
	<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->    
    <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="css/bootstrap.min.css" />     
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/da-slider.css" />
<link rel="stylesheet" href="css/styles.css"/>
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style>
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: lato;
    font-weight: 500;
    line-height: 1.1;
    font-weight: 700;
    }

    #strengths{
        width:31%;
    }
</style>
</head>

<body>
    <!-- === mdoal for learn more part starts here ============================= -->


  <!-- Modal -->
  <div class="modal fade" id="learn1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center">Learn more1</h4>
        </div>
        <div class="modal-body">
       <!-- === modal body  ============================ -->
Learn more here Learn more here Learn more here Learn more here Learn more here 

       <!--====  modal body ======================= -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!--Modal2-->
  <div class="modal fade" id="learn2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center">Learn more2</h4>
        </div>
        <div class="modal-body">
       <!-- === modal body  ============================ -->
Learn more here Learn more here Learn more here Learn more here Learn more here 

       <!--====  modal body ======================= -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!--Modal3-->
  <div class="modal lg" id="learn3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center">Asset Performance management</h4>
        </div>
        <div class="modal-body">
       <!-- === modal body  ============================ -->
<div class="col-md-4 col-sm-6"> 
                                    <div class="tray text-center">                                          
                                        <img src="images/s1.PNG" class="img-responsive">                                            
                                     </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6"> 
                                    <div class="tray text-center">                                          
                                        <img src="images/s3.PNG" class="img-responsive">                                            
                                     </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6"> 
                                    <div class="tray text-center">                                          
                                        <img src="images/s2.PNG" class="img-responsive">                                            
                                     </div>
                                    </div>

       <!--====  modal body ======================= -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


    <!-- ===  modal for learn more ends here =============================== -->
<header class="header">
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
	            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand scroll-top logo"><img src="images/logo.png"  alt="skytouch" />
	            </a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav" id="mainNav">
		            <li class="active"><a href="#home" class="scroll-link">Home</a></li>
		            <li><a href="#services" class="scroll-link">What We Do</a></li>
                    <li><a href="#aboutUs" class="scroll-link">Why Us</a></li>
					<li><a href="#portfolio" class="scroll-link">Gallery</a></li>
					<li><a href="#team" class="scroll-link">Team</a></li>
					<li><a href="#contactUs" class="scroll-link">Contact Us</a></li> 
	            </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home" class="page-section">
    <div class="banner-container">
    <div id="opicity" style="background: rgba(0, 0, 0, 0.6);">      
            <div class="container banner-content">
		    <<!--h1>Responsive Page Scrolling<br/><span>with Bootstrap</span></h1>
		    <p class="lead">Use the navigation above to scroll to different page sections.</p>		   
		    <p><a href="#about" class="button-outline"> More.. </a></p>-->
               <div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Solar EPC</h2>
					<p>Dummy Content placed right now. To be replaced after content is finalized.</p>
					<a href="#" class="da-link button-outline">Read more</a>
					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2>Best Yield</h2>
					<p>Dummy Content placed right now. To be replaced after content is finalized.</p>
					<a href="#" class="da-link button-outline">Read more</a>
					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2>Trusted partner for reducing energy cost</h2>
					<p>Dummy Content placed right now. To be replaced after content is finalized..</p>
					<a href="#" class="da-link button-outline">Read more</a>
					<div class="da-img"></div>
				</div>
				
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
	    </div>
	</div>
    </div>	
    <!--/.container-->
</section> 


 

<section id="services" class="page-section darkBg">
	<div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="heading text-center">
								<!-- Heading --> 	
                                <h2>What We Do</h2> 							
								<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
							</div>                                            
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i style="color: #E0E0E0;
    font-size: 40px;
    height: 68px;
    width: 68px;
    line-height: 68px;
    margin-right: 10px;
    background-color: rgba(255, 255, 255, 0.09);
    text-align: center;
    display: block;
    border-radius: 10%;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    -o-transition: 500ms;
    transition: 500ms;"><img src="images/png/003-money.png" class="img-responsive" style="padding: 9px"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Own and Operate(CapEx}</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i style="color: #E0E0E0;
    font-size: 40px;
    height: 68px;
    width: 68px;
    line-height: 68px;
    margin-right: 10px;
    background-color: rgba(255, 255, 255, 0.09);
    text-align: center;
    display: block;
    border-radius: 10%;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    -o-transition: 500ms;
    transition: 500ms;"><img src="images/png/002-speed-meter.png" class="img-responsive" style="padding: 9px"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">PPA (Solar as service)</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i style="color: #E0E0E0;
    font-size: 40px;
    height: 68px;
    width: 68px;
    line-height: 68px;
    margin-right: 10px;
    background-color: rgba(255, 255, 255, 0.09);
    text-align: center;
    display: block;
    border-radius: 10%;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    -o-transition: 500ms;
    transition: 500ms;"><img src="images/png/001-key.png" class="img-responsive" style="padding: 9px"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Yield linked financing model</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.row-->
            <div class="gap"></div>
            <div class="row" style="">
                <h2 style="text-align:center;margin-top:-5px">Services</h2> <br>
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-cloud color fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Project Development</h3>
                            <p>Making projects shovel ready
                            </p>
                        
<a href="javascript:void(0)" data-target="#learn1" data-toggle="modal">Learn More </a>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-cloud color fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Solar EPC</h3>
                            <p>Engineering procurement & construction</p>
                            <a href="javascript:void(0)" data-target="#learn2" data-toggle="modal">Learn More </a>

                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-cloud color fa-5x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Asset Performance management</h3>
                            <p>Managing assets over useful plant's life</p>
                            <a href="javascript:void(0)" data-target="#learn3" data-toggle="modal">Learn More </a>

                        </div>
                    </div>
                </div><!--/.col-md-4-->
                
            </div><!--/.row-->
        </div><!--/.container-->
</section>
<section id="aboutUs" class="page-section pDark pdingBtm30" style="">
	<div class="container">
							    <div class="heading text-center" style="display:none" >
								<!-- Heading -->
								<h2>Asset Performance management</h2>								 
								<p>At lorem ipsum available, but the majority have suffered alteration humour or randomised Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur </p>
							</div>
							
								<div class="row" style="display:none">
									<div class="col-md-4 col-sm-6">	
                                    <div class="tray text-center">											
										<img src="images/s1.PNG" class="img-responsive">											
									 </div>
                                    </div>
									<div class="col-md-4 col-sm-6">	
                                    <div class="tray text-center">											
											<!-- Heading -->
											<img src="images/s3.PNG" class="img-responsive">										
									 </div>
                                    </div>
									<div class="col-md-4 col-sm-6">	
                                    <div class="tray text-center">											
											<!-- Heading -->
											<img src="images/s2.PNG" class="img-responsive">										
									 </div>
                                    </div>
                                    
								</div>

                                <!--Why Us start-->
                                <div class="row">
                                    <div class="heading text-center">
                                    <h2>Why Us</h2>
                                    <p>Our end-to-end solutions, from installation to maintenance, powered by cost effective and 
                                        streamlined commissioning processes and superior asset management bring the power of solar
                                         within your reach.</p>
                                     </div>
                                    
                                    <div class="col-md-2 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Immediately recognise and diagnose maintenence problem</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Dispatch the right engineer to address the specific issue</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Remotely Reset the Eqipment if Required</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Assess Wheather Plant Performance is Optimised</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Provide Real Time Performance to Our Customers</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Generate Plant Performance Reports Automatically</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <!--Why us End-->
                                <!--our Strength-->
<div class="row">
                                    <div class="heading text-center">
                                    <h2>Our Strengths</h2>
                                    
                                     </div>
                                    <div class="col-md-4 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/placeholders.png" id="strengths"alt="Lights" >
        <div class="caption">
          <p>A Strong presence across all major states with more than 45 MW of installed, onside projects</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-4 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/customized.png" id="strengths" alt="Lights" >
        <div class="caption">
          <p>Hands on experience in rooftop solar installations, with more than 250 completed projects</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-4 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/calendar.png" id="strengths" alt="Lights" >
        <div class="caption">
          <p>Commissioning of projects within 3-6 months of contract closure, typically less than 30 days of actual installation work on site</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                  
                                   
                                    
                                    
                                    
                                </div>
                                <div class="row">
                                   
                                    <div class="col-md-4 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/time.png" id="strengths"alt="Lights" >
        <div class="caption">
          <p>Customized rooftop solar power solution as per space available and demand</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-4 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/100.png" id="strengths" alt="Lights" >
        <div class="caption">
          <p>Consistent plant performance and customer satisfaction leading to 100% repeat business from more than 50 corporate and institutional clients</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                    <div class="col-md-4 col-sm-3"> 
                                    <div class="tray text-center">                                          
        <div class="thumbnail">
     
        <img src="images/remote-control.png" id="strengths" alt="Lights" >
        <div class="caption">
          <p>World class remote monitoring and O&M to maximize operational performance</p>
        </div>
      
    </div>                                         
                                     </div>
                                    </div>
                                  
                                   
                                    
                                    
                                    
                                </div>
                                <!--Our Strength-->
							</div>
	<!--/.container-->
</section>
 

<section id="portfolio" class="page-section section appear clearfix">	
			<div class="container">
				
		    <div class="heading text-center">
								<!-- Heading -->
								<h2>Gallery</h2>								
								<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
							</div>
					
                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >Solar</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">Wind</a></li>
                              <li ><a href="#" class="btn-theme btn-small" data-filter=".print">Other</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
							  
                                <article class="col-md-4 col-sm-4 isotopeItem webdesign">
									<div class="portfolio-item">
										<img src="images/portfolio/img1.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img1.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img2.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img2.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>
								

                                <article class="col-md-4 col-sm-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img3.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img3.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem print">
									<div class="portfolio-item">
										<img src="images/portfolio/img4.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img4.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img5.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img5.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem webdesign">
									<div class="portfolio-item">
										<img src="images/portfolio/img6.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img6.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem print">
									<div class="portfolio-item">
										<img src="images/portfolio/img7.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img7.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img8.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img8.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4 col-sm-4 isotopeItem print">
									<div class="portfolio-item">
										<img src="images/portfolio/img9.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img9.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-expand fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>
                                </div>
                                        
							</div>
                                     

							</div>
                        </div>
				
			</div>	
</section> 

<section id="team" class="page-section team-member">
	<div class="container">
							<div class="heading text-center">
								<!-- Heading -->
								<h2>Meet The Team</h2> 
								<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
							</div>
							<!-- Team Member's Details -->
							<div id="meet-the-team" class="row">
            <div class="col-md-4 col-xs-6">
                <div class="center text-center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team.jpg" alt=""></p>
                     <a href="https://www.linkedin.com/in/ajay-pratap-singh-0b954125/" target="_blank"><h5>AJAY PRATAP<small class="designation muted">Founder </small></h5></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="center text-center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team.jpg" alt=""></p>
                    <a href="https://www.linkedin.com/in/tejasvi-verma-69852a22/" target="_blank"><h5>TEJASVI VERMA<small class="designation muted">Founder</small></h5></a>
                </div>
            </div>        
            <div class="col-md-4 col-xs-6">
                <div class="center text-center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/team.jpg" alt=""></p>
                    <a href="https://www.linkedin.com/in/subroto-gupta-6231105/" target="_blank"> <h5>SUBROTO GUPTA<small class="designation muted">Founder</small></h5></a>
                </div>
            </div>        
            
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="heading text-center">
                        <h2>What our clients say</h2>
                        <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit majority have suffered alteration</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit majority have suffered alteration</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
	<!--/.container-->
        </div>
</section> 
<footer class="page-section darkBg" id="contactUs">
	<div class="container">
    
		<div class="row">
                <div class="heading text-center">
								<!-- Heading -->
								<h2>Contact Us</h2> 
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
							</div>                            
            </div>

					<div class="row mrgn30">
                     <div class="col-sm-5"> 
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1944302.5352489671!2d77.4535942421874!3d17.863656040793934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1398658474236" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                                </div>
                        				<div class="col-sm-3">
									<h4>Address:</h4>
									<address>
										EnergyX<br>
										3/31, 3rd Floor,<br>
										West Patel Nagar,<br>
										New Delhi <br>
									</address>
									<h4>Contact Info:</h4> 
                                     <ul>
              <li><i class="fa fa-phone"></i>+91-9540870206</li>
              <li><a href="#"><i class="fa fa-envelope-o"></i> contact@energyx.in</a></li>
             
            </ul>
								</div>
                                

									<div class="col-sm-4"> 
										 	<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form action="#" name="sentMessage" id="contactForm" method="post" novalidate>
		<h3>Contact Form</h3>
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control" 
		placeholder="Full Name" id="name" name="fullname" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control" placeholder="Email" 
		id="email" name="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	
        <p class="help-block"></p>
		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" name="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
        <p class="help-block"></p>
		<div id="success"> </div> <!-- For success/fail messages -->
		<input type="submit" name="submit" class="btn btn-primary pull-right" value="Send"><br />
		</form>									
									</div>   
							</div>
        </div>
	<!--/.container-->	
</footer>
<!--/.page-section-->
<section class="copyright">
     <div class="container">
      <div class="row">
        <div class="col-sm-12">          
           <ul class="socialIcons">
              <li><a href="#" class="fbIcon" target="_blank"><i class="fa fa-facebook-square fa-lg""></i></a></li>
              <li><a href="#" class="twitterIcon" target="_blank"><i class="fa fa-twitter-square fa-lg""></i></a></li>
              <li><a href="#" class="googleIcon" target="_blank"><i class="fa fa-google-plus-square fa-lg""></i></a></li>
              <li><a href="#" class="pinterest" target="_blank"><i class="fa fa-pinterest-square fa-lg""></i></a></li>
            </ul>   <div class="pull-right webThemez">Designed by   <a href="http://monkhub.com/logo.png"><img src="http://monkhub.com/logo.png" style="width: 87px;"></a> </div>
        </div>
      </div>  <!-- / .row -->
    </div>
</section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--Modal-->
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>    
<script src="js/bootstrap.min.js" type="text/javascript"></script>	 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>