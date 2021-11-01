<?php get_header();?>
    <!-- Small Book -->
    <div id="scroll-wrap" class="scroll-wrap">
        <div id="bookshelf" class="bookshelf">
            <figure class="smallbook">
                <div class="perspective">
                    <div class="book" data-book="book-1">
                        <div class="cover">

                            <!-- Cover Image -->
                            <div class="front bg-image" data-image="<?php echo get_theme_mod('logo_image');?>"></div>

                            <!-- Cover Title -->
                            <h3 class="cover-title"><?php bloginfo('name');?></h3>
                            <div class="inner inner-left"></div>
                        </div>
                        <div class="inner inner-right"></div>
                    </div>
                </div>
                <div class="book-opener"></div>
            </figure>
        </div>
    </div>
    <!-- Small Book end -->

    <!-- Profile (mobile only) -->
    <div id="profile" class="profile">
        <div class="card">

            <!-- Avatar Image -->
            <div class="profile-avatar bg-image" data-image="<?php echo get_theme_mod('logo_image');?>">
                <div class="profile-name">
                    <h1><?php bloginfo('name');?></h1>
                </div>
            </div>

            <!-- Card footer -->
            <div class="card-body">
					<?php 	$success_data=new WP_Query(array(
							'post_type'=>'success',
							'posts_per_page'=>-1
					));?>
				
                <div class="profile-counters row">
				<?php	if($success_data->have_posts()):?>
					<?php while($success_data->have_posts()):$success_data->the_post();?> 
                    <div class="col-4">
                        <span><?php the_content();?></span>
                        <h5 class=""><?php the_title();?></h5>
                    </div>
                    <?php endwhile;?>
					<?php endif;?>
                </div>

                <!-- Phone Call Button -->
                <a class="btn-floating" href="callto:<?php echo get_theme_mod('phone_number');?>"><i class="icon ion-ios-call"></i></a>

                <!-- Card footer -->
                <div class="card-footer">
                    <nav class="card-nav">
                        <!-- Social Icons -->
                        <ul>
                            <li>
                                <a href="<?php echo get_theme_mod('behance_url');?>">
                                    <span class="icon ion-logo-buffer"></span> 
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?php echo get_theme_mod('email_address');?>">
                                     <span class="icon ion-ios-mail"></span> 
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod('facebook_url');?>">
                                    <span class="icon ion-logo-facebook"></span> 
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile end -->

    <!-- Big Book -->
    <div class="bb-bigbook-wrapper">
        <div class="bb-bigbook" id="book-1">
            <div class="bb-bookblock">
                <?php get_template_part( 'template-parts/content/about');?>
                <?php get_template_part( 'template-parts/content/resume');?>
                <?php get_template_part( 'template-parts/content/works');?>
                <?php get_template_part( 'template-parts/content/blog');?>
                <?php get_template_part( 'template-parts/content/contact');?>
               
            </div>
            <nav>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div>
    </div>
    <!-- Big Book end -->

  <?php get_footer();?>