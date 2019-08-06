<!-- header start here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php the_title();?></title>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php bloginfo('template_url');?>/assets/images/fav.png" type="image/x-icon">
    <link href="<?php bloginfo('template_url');?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.css" rel="stylesheet">
    <?php wp_head();?>
</head>
<body <?php body_class( array( "class-one", "class-two", "class-three" ) ); ?>>

    <header>
     <div class="top-header">
        <div class="container">
    <div class="left-text">
        

 <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-7' ); ?>
<?php endif; ?>
          


        

    </div>

     <div class="right-text">
  
         <ul>
		 
								    <li>
    								<i class="fa fa-search" aria-hidden="true"></i>
										<div class="search-box">

 <?php if ( is_active_sidebar( 'sidebar-20' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-20' ); ?>
<?php endif; ?>


  										</div>
    									</li>
		 </ul>


<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-8' ); ?>
<?php endif; ?>


<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-9' ); ?>
<?php endif; ?>


<!-- <ul>

            <li><a href="javascript:void(0);"><img src="<?php bloginfo('template_url');?>/assets/images/facebook.png" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="<?php bloginfo('template_url');?>/assets/images/twitter.png" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="<?php bloginfo('template_url');?>/assets/images/instagram.png" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="<?php bloginfo('template_url');?>/assets/images/pin.png" alt=""></a></li>
        </ul> -->
		

    </div>

  </div>
  </div>
        <div class="header-mo">
        
                <nav class="navbar">
                    <div>
                      <div class="container">
      <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_home_url();?>">
                  
   <!-- custom logo -->

      <?php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
      ?>

                </a>
            </div>




            
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
								
                                <li class="active">

<!--******************** custom menus ************************************************-->

            <?php 
       wp_nav_menu(array(
         'theme_location' => 'main-menu',
         'container' => '',
       'menu_class' => 'inline',
         'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',

      ));

      ?>
                                
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            
        </div>
    </div>


    </header>

 <section class="shop-page-banner"><?php if( is_shop() || is_product_category()) {?>

	 <div class="container">
		<div class="inner-banner-content">




		 <h2>      <?php woocommerce_page_title(); ?>

 </h2>
			<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
		 </div>
	</div>

<?php }?>

</section> 
