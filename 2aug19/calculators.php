
<?php

// Template Name: Calculators


?>

<?php get_header();?>


	<!--header part-->

	<!--	********-->

	<div class="cat-breadcrumbs">
		<div class="container">
			<!-- <ul class="breadcrumb">
				<li><a href="<?php echo get_home_url();?>">Home</a></li>
				<li>Calculators</a></li>

			</ul> -->
		</div>
	</div>

	<!--	catagories section starts-->
	<section class="catagories-sec cal-sec">
		<div class="container">
			<div class="inner-heading">
				<h3>Calculators</h3>
				
			</div>
			<div class="cat-content-outer cal-outer">
				<div class="row">



<?php  $args = array( 'post_type' => 'Calculators', 'posts_per_page' => -1,'order'=>'ASC' );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();
              
              // $description = $post->post_content;
               
              ?> 


					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content cal-content">
							<figure>
								<img src="<?php the_post_thumbnail_url(); ?>">
							</figure>
							<figcaption>
								<?php the_content();?>
							</figcaption>
						</div>
		

					</div>


 <?php
        }
    }
    ?>

<!-- ************************* loop ends here *************************** -->

    <?php wp_reset_query(); ?>
   

<!-- 
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-2.png">
							</figure>
							<figcaption>
								<a href="https://worksmart.org.uk/tools/overtime-calculator">Overtime Calculator</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-3.png">
							</figure>
							<figcaption>
								<a href="https://worksmart.org.uk/tools/pay-reckoner">Pay Reckoner</a>
							</figcaption>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-4.png">
							</figure>
							<figcaption>
								<a href="https://worksmart.org.uk/tools/minimum-wage-calculator">Minimum Wage Calculator</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-2.png">
							</figure>
							<figcaption>
								<a href="https://www.gov.uk/am-i-getting-minimum-wage">Living Wage Calculator</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-6.png">
							</figure>
							<figcaption>
								<a href="https://www.gov.uk/calculate-your-holiday-entitlement">Holiday Pay Calculator</a>
							</figcaption>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-7.png">
							</figure>
							<figcaption>
								<a href="https://www.timeanddate.com/date/dateadd.html">Time and Date Calculator</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="cat-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-2.png">
							</figure>
							<figcaption>
								<a href="https://www.gov.uk/calculate-your-redundancy-pay">Redundancy Calculator</a>
							</figcaption>
						</div>
					</div> -->


					
					
				</div>
			</div>

		</div>
	</section>
		<!-- <p>catagories section ends</p> -->
<?php get_footer();?>




