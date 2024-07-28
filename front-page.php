<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" id="twentytwentyfour-child-style-css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
		<img src="<?php echo get_field('header_logo'); ?>" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
	<ul class="navbar-nav mr-right ">
   
   <li class="nav-item px-2">
    <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
   </li>
   
   <li class="nav-item px-2 dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
    <div class="dropdown-menu " aria-labelledby="servicesDropdown">
     <div class="d-md-flex align-items-start justify-content-start">
      <div>   
       <div class="dropdown-header">Development</div>
      </div>
      <div>
       <div class="dropdown-header"></div>
       <a class="dropdown-item" href="#">Project rescue</a>
       <a class="dropdown-item" href="#">Source code recovery</a>
       <a class="dropdown-item" href="#">Application support &amp; maintenance</a>
      </div>
      <div>
       <div class="dropdown-header"></div>
       <a class="dropdown-item" href="#">Contact form creation</a>
       <a class="dropdown-item" href="#">Automated backups</a>
       <a class="dropdown-item" href="#">Image to HTML</a>
      </div>
     </div>
    </div>
   </li>
   <li class="nav-item px-2">
    <a href="#" class="nav-link">Contact</a>
   </li>
   <li class="nav-item px-2">
    <a href="#" class="nav-link">Blog</a>
   </li>
  </ul>
    </div>
    <ul class="navbar-nav ms-auto d-lg-inline-flex align-items-center icon-nav">
      <li class="mx-2"> 
		<img src="<?php echo get_field('flag_icon'); ?>" height="30px" width="30px" alt="UK"/>
      </li>
      <li class="mx-2 search-icon">
	  	<img  src="<?php echo get_field('search_icon'); ?>" height="30px" width="30px" alt="UK"/>
      </li>
      <li class="mx-2">
        <button><a href="<?php echo get_field('header_button_url'); ?>" class="btn"><?php echo get_field('header_button_text'); ?></a></button>
      </li>
    </ul>
  </div>
</nav>


<div class="banner">
    <div class="banner-content">
        <h1><?php echo get_field('banner_heading') ?></h1>
        <div class="banner-buttons">
            <a class="btn btn-primary" href="<?php echo get_field('banner_left_button_url') ?>"><?php echo get_field('banner_left_button_text') ?></a>
            <a class="btn btn-primary" href="<?php echo get_field('banner_right_button_url') ?>"><?php echo get_field('banner_right_button_text') ?></a>
        </div>
    </div>
</div>




<section class="pt-5 pb-5">
	<div class="container-fluid">
        <div class="row">
        	<div class="col-md-3"></div>
			  	<div class="card col-md-9 mt-2">
			      	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
			        	<div class="w-100 carousel-inner mb-5" role="listbox">
			          		<div class="carousel-item active">
			            		<div class="bg"></div>
			            		<div class="row">
								<?php
									$result = new WP_Query(array(
										'post_type' => 'services'
									));
									while($result -> have_posts()){		
									?>
				            		<div class="col-md-6">
				            			<div class="carousel-caption">
					              			<div class="row">
								                <div class="col-sm-3 col-4 align-items-start">
								                  	<img src="https://s17.postimg.org/mqjuw14bz/profile1.png" alt="" class="rounded-circle img-fluid">
								                </div>
								                <div class="col-sm-9 col-8">
								                <h2><?php echo get_the_title(); ?> <span></span></h2>
								                  <small><?php echo get_the_content(); ?></small>
								                </div>
					              			</div>
					            		</div>
				            		</div>
									<?php } ?>
				            		<!-- <div class="col-md-6">
				            			<div class="carousel-caption">
					              			<div class="row">
								                <div class="col-sm-3 col-4 align-items-start">
								                  	<img src="https://s17.postimg.org/5q0yndefz/profile2.png" alt="" class="rounded-circle img-fluid">
								                </div>
								                <div class="col-sm-9 col-8">
								                  <h2>Helena Doe - <span>Architect</span></h2>
								                  <small>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</small>
								                  <small class="smallest mute">- willi</small>
								                </div>
					              			</div>
					            		</div>
				            		</div> -->
			            		</div>
			          		</div>
			          		<!-- <div class="carousel-item">
			            		<div class="bg"></div>
			              			<div class="row">
				            		<div class="col-md-6 col-12">
				            			<div class="carousel-caption">
					              			<div class="row">
								                <div class="col-sm-3 col-4 align-items-start">
								                  	<img src="https://s17.postimg.org/7ulbog0n3/profile3.png" alt="" class="rounded-circle img-fluid">
								                </div>
								                <div class="col-sm-9 col-8">
								                <h2>John Doe - <span>Ceo Mobile company</span></h2>
								                  <small>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</small>
								                  <small class="smallest mute">- willi</small>
								                </div>
					              			</div>
					            		</div>
				            		</div>
				            		<div class="col-md-6 col-12">
				            			<div class="carousel-caption">
					              			<div class="row">
								                <div class="col-sm-3 col-4 align-items-start">
								                  	<img src="https://s17.postimg.org/u6j4hu7gv/profile4.png" alt="" class="rounded-circle img-fluid">
								                </div>
								                <div class="col-sm-9 col-8">
								                <h2>Helena Doe - <span>Architect</span></h2>
								                  <small>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</small>
								                  <small class="smallest mute">- willi</small>
								                </div>
					              			</div>
					            		</div>
				            		</div>
			            		</div>
			          		</div>
			          		 -->
			    		</div>
				        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
				          <span class="sr-only">Previous</span>
				        </a>
				        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
				          <span class="sr-only">Next</span>
				        </a>
			  		</div>
				</div> 
			</div>
</div>
		</section>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
