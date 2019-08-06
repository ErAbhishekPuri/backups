<?php

// Template Name: Home 
?>

    <?php get_header();?>

        <section class="slider">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <?php
                    global $post;
                    $count=0;
                    $arg=array('post_type'=>'banner_slider','posts_per_page'=>-1, 'order'=>'ASC');
                    $myposts=get_posts($arg);

                    foreach($myposts as $post):setup_postdata($post);?>

                        <div class="item <?php echo $count==0? 'active':'';?> ">
                            <div class="banner">
                                <div class="container">
                                    <div class="banner-text">
                                        <div class="col-md-5">
                                        </div>
                                        <div class="col-md-7 col-md-offset-5 col-sm-offset-3 col-sm-9 col-xs-offset-0">
                                            <p>
                                                <?php the_content();?>
                                            </p>
                                            <div class="btn-wrap">
                                                <a href="<?php  the_permalink(587); ?>" class="view-btn">ADVICE NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skew">
                            <a href="#section2" class="scroll-section"><img src="<?php bloginfo('template_url');?>/assets/images/arrow-down.png" alt=""></a>
                        </div>

                        <?php $count++;endforeach;wp_reset_postdata($post);?>

                            <div class="container">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                            </div>

                            <!-- Left and right controls -->
                            <!--   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="fa fa-chevron-left" aria-hidden="true"></i>

    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a> -->
                </div>

        </section>

        <!-- banner ends -->

        <!-- employment -->

        <section class="employment" id="section2">
            <div class="container">
                <div class="new-heading">
                    <h3 class="headings"><?php echo get_field('employee_heading');?> <span><?php the_field('employee_span_heading_text');?></span></h3>
                    <div class="img-new">
                        <img src="<?php bloginfo('template_url');?>/assets/images/order-img.svg" alt="">
                    </div>
                </div>
                
                    <div class="row">
                        <div class="owl-carousel owl-theme employe-slider-p">
                            <!-- ************************* loop starts here ************************************* -->

                            <?php  $args = array( 'post_type' => 'product', 'posts_per_page' => -1,'product_cat' => 'Employment Law Guides' );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();

              // $description = $post->post_content;

              ?>

                                <div class="item">
									<figure>
                                    <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail();?>
                                    </a>
										</figure>

                                    <div class="owl-text">
                                        <a href="<?php the_permalink();?>">
                                            <p>
                                                <?php the_title();?>
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <?php
        }
    }
    ?>

                                    <!-- ************************* loop ends here *************************** -->

                                    <?php wp_reset_query(); ?>

                                        <!-- employment ends -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="btn-wrap new">
                            <a href="<?php echo get_term_link( 19  ,'product_cat') ?>" class="view-btn Blue-owl">VIEW ALL GUIDES</a>
                        </div>
                    </div>
            </div>
        </section>

        <!-- employment section ends -->
        <section class="problem-about">
            <div class="container">

                <div class="new-heading">
                    <h3 class="headings white"><?php the_field('whats_your_problem_aboutheading');?>  <span><?php the_field('whats_your_problem_aboutspan_text');?></span></h3>
                    <div class="img-new">
                        <img src="<?php bloginfo('template_url');?>/assets/images/order-new.png" alt="">
                        <h3><?php the_field('whats_your_problem_aboutsub_heading');?></h3>
                        <p>
                            <?php the_field('whats_your_problem_about_sub-content');?>
                        </p>

                    </div>
                </div>

                <div class="row">

                    <!-- ************************* loop starts here ************************************* -->

                    <?php  $args = array( 'post_type' => 'WHATS YOUR PROBLEM', 'posts_per_page' => 6,'order'=>'ASC' );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();

              // $description = $post->post_content;

              ?>

                        <div class="col-md-4 col-sm-6">
                            <div class="new-jack">
                                <figure>
                                    <img src="<?php the_field('whats_your_problem_image_1');?>" alt="" class="home-one">
                                    <img src="<?php the_field('whats_your_problem_image_2');?>" alt="" class="home">

                                </figure>
                                <div class="new-about-text">
                                    <h4><?php the_title();?></h4>
                                    <p>
                                        <?php the_excerpt();?>
                                    </p>
                                    <div class="btn-wrap new read">
                                        <!-- <a href="javascript:void(0);" class="view-btn"> -->
                                        <?php the_field('read_more_button');?>
                                            <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>

                        <?php
        }
    }
    ?>

                            <?php wp_reset_query(); ?>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <a href="<?php the_permalink(730);  ?>" class="btn form-control">VIEW ALL CATEGORIES</a>
                                    </div>

                                </div>
                                <!-- ************************* loop ends here *************************** -->

        </section>
        <!-- about problem ends -->
        <section class="eddie">
            <div class="container">
                <div class="new-heading">
                    <h3 class="headings grey"><?php the_field('ask_eddie_how_to_heading');?><span><?php the_field('ask_eddie_how_to_span_heading_text');?></span></h3>
                    <div class="img-new">
                        <img src="<?php bloginfo('template_url');?>/assets/images/order-img.svg" alt="">
                    </div>
                </div>
                <div class="row new-section">

                    <!-- ************************* loop starts here ************************************* -->

                    <?php  $args = array( 'post_type' => 'ASK EDDIE HOW TO', 'posts_per_page' => 3 );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();

              // $description = $post->post_content;

              ?>

                        <div class="col-md-4 col-sm-6">
                            <figure>
                                <video class="video" id="bVideo" loop="" width="100%" height="100%" poster="<?php the_field('video_cover');?>">
                                    <source src="<?php the_field('ask_eddie_how_to_video_url');?>" type="video/mp4">
                                    <source src="<?php the_field('video_cover');?>" type="video/ogg">
                                    <source src="<?php bloginfo('template_url');?>/assets/images/Blender made House animation.webm" type="video/webm">
                                </video>
                                <div id="playButton" class="playButton" onclick="playPause()">
                                    <div class="content-jack">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                </div>
                            </figure>
                        </div>

                        <?php
        }
    }
    ?>

                            <?php wp_reset_query(); ?>

                </div>
                <!-- <div class="col-md-12">
            <div class="btn-wrap new">
                  <a href="http://49.249.236.30:3008/cilinnie/how-it-works/" class="view-btn blue">View All</a>
 </div>
        </div> -->
            </div>
        </section>
        <!--video section-->
        <!--Documents and Templates-->
        <section class="documents">
            <div class="container">
                <h2><?php the_field('documents_heading');?> <strong><?php the_field('documents_and_span_text');?></strong></h2>

                <div class="order-img text-center">
                    <img src="<?php bloginfo('template_url');?>/assets/images/order-img.svg">
                </div>
                <div class="row">

                    <?php  $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ,'product_cat' => 'Documents and Templates');
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();

              // $description = $post->post_content;

              ?>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="employement-box">
                                <div class="employement-img">
                                    <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail();?>
                                    </a>
                                </div>
                                <a class="employ_text" href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </div>
                        </div>

                        <?php
        }
    }
    ?>

                            <?php wp_reset_query(); ?>

                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="<?php echo get_term_link( 102 ,'product_cat') ?>" class="form-control documents">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Documents and Templates-->

        <!--Employment-->
        <section class="Employment">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><?php the_field('employment_updates_heading');?> <strong> <?php the_field('employment_updates_span_text_');?></strong></h2>
                        <div class="order-img text-center">
                            <img src="<?php bloginfo('template_url');?>/assets/images/order-img.svg">
                        </div>
                        <p>
                            <?php the_field('employment_updates_sub_heading');?>
                        </p>
                    </div>
                </div>
                <div class="row">

                    <?php  $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
          $new_query = new WP_Query( $args ); 

          if ($new_query->have_posts()) {
            while($new_query->have_posts()){
              $new_query->the_post();

              // $description = $post->post_content;

              ?>

                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="employe-wrap">
                                <?php the_post_thumbnail();?>
                                    <div class="employe-hover">
                                        <h2><?php the_title();?></h2>
                                        <span><?php the_field('news_category')?> | <?php echo get_the_date( 'M d,Y' ); ?></span>
                                    </div>
                                    <div class="employe-pop-hover">
                                        <h2><?php the_title();?></h2>
                                        <p>
                                            <?php the_excerpt();?>
                                        </p>
                                        <a href="<?php the_permalink();?>">Read More >></a>
                                        <span><?php the_field('news_category')?> | <?php echo get_the_date( 'M d,Y' ); ?></span>
                                    </div>
                            </div>
                        </div>

                        <?php
        }
    }
    ?>

                            <?php wp_reset_query(); ?>

                </div>
        </section>
        <!--Employment-->

        <!--eBooks-->
        <section class="ebook">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div id="ebook-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#ebook-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#ebook-carousel" data-slide-to="1"></li>
                                <li data-target="#ebook-carousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php
                    global $post;
                    $count=0;
                    $arg=array('post_type'=>'product','posts_per_page'=>3,'order' => 'ASC');
                    $myposts=get_posts($arg);

                    foreach($myposts as $post):setup_postdata($post);?>

                                    <div class="item <?php echo $count==0? 'active':'';?>">
                                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                    </div>

                                    <?php $count++;endforeach;wp_reset_postdata($post);?>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#ebook-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"><img src="<?php bloginfo('template_url');?>/assets/images/arrow_2.png"></span>
                                <span class="sr-only"></span>
                            </a>
                            <a class="right carousel-control" href="#ebook-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"><img src="<?php bloginfo('template_url');?>/assets/images/arrow_1.png"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h2><?php the_field('download_our_ebooks_today!_heading');?><strong class="text-uppercase"><?php the_field('download_our_ebooks_today!_span_text');?></strong></h2>
                        <p>
                            <?php the_field('download_our_ebooks_today!_content');?>
                        </p>
                        <a href="<?php the_permalink(22);?>" class="btn form-control">Shop now</a>
                    </div>

                </div>
            </div>
        </section>
        <!--eBooks-->

        <!--Newsletter-->
        <section class="new-sletter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="news-wrap">
                            <div class="send-img text-center">
                                <img src="<?php bloginfo('template_url');?>/assets/images/send-img.png">
                            </div>
                            <h2><?php the_field('newsletter_sign_up_heading');?> <strong><?php the_field('newsletter_sign_up_heading_span_heading_text');?></strong></h2>
                            <div class="order-img text-center">
                                <img src="<?php bloginfo('template_url');?>/assets/images/order-img.svg">
                            </div>
                            <p>
                                <?php the_field('newsletter_sign_up_sub-heading');?>
                            </p>
                            <!-- <form> -->
                            <div class="row">
                                <!-- <div class="col-sm-6">
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="" class="form-control">
                      </div>  
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Email Address</label>
                          <input type="text" name="" class="form-control">
                      </div>  
                    </div>
                     <div class="col-sm-12 text-center">
                        <a href="javascript:;" class="form-control">SUBSCRIBE</a>
                     </div> -->

                                <?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
                                    <?php dynamic_sidebar( 'sidebar-10' ); ?>
                                        <?php endif; ?>

                            </div>
                            <!-- </form> -->

                         <?php //echo do_shortcode('[email-subscribers-form id="1"]');?>

                        </div>
                    </div>
                </div>
        </section>
        <!--Newsletter-->
        <script>
            $('.ebook-carousel').carousel({
                pause: true,
                interval: false,
                wrap: false
            });
        </script>

        <?php get_footer();?>