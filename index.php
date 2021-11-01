
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Abs">
    <link rel="icon" href="img/favicon.ico">

    <title>Blog</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i">
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
	<?php echo wp_head();?>
</head>

<body class="blog" <?php body_class(); ?>>

    <!-- Loader -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

    <!-- Site Navigation -->
    <nav class="site-nav">
       <ul>
            <li>
                <a href="<?php echo home_url();?>">
                    <span class="icon ion-ios-home"></span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li class="d-none d-lg-block">
                <a href="<?php echo get_theme_mod('twitter_url');?>">
                    <span class="icon ion-logo-twitter"></span>
                    <span class="text">Twitter</span>
                </a>
            </li>
            <li class="d-none d-lg-block">
                <a href="<?php echo get_theme_mod('facebook_url');?>">
                    <span class="icon ion-logo-facebook"></span>
                    <span class="text">Facebook</span>
                </a>
            </li>
			<li class="d-none d-lg-block">
                <a href="<?php echo get_theme_mod('behance_url');?>">
                    <span class="icon ion-logo-buffer"></span>
                    <span class="text">Behance</span>
                </a>
            </li>
            <li class="d-none d-lg-block">
                <a href="mailto:<?php echo get_theme_mod('email_address');?>">
                    <span class="icon ion-ios-mail"></span>
                    <span class="text">Email</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Big Book -->
    <div class="bb-bigbook-wrapper">
        <div class="bb-bigbook bb-bigbook-alt" id="book-1">
            <div class="bb-bookblock">
                <div class="bb-item">
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
						
                            <div class="bb-custom-side-content pb-0 pb-lg-3">
                                <div id="blog" class="section section-block">
								 <?php 	$post_data=new WP_Query(array(
									'post_type'=>'post',
									'order'=>'asc'
										));?>	
                                    <h3 class="title">Blog</h3>
									<?php if($post_data->have_posts()):?>
										<?php while($post_data->have_posts()):$post_data->the_post();?>
                                    <article class="post entry">
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink();?>">
                                              <?php the_post_thumbnail();?>
                                            </a>
                                            <div class="post-heading">
                                                <h4 class="post-title">
                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                </h4>
                                                <ul class="post-meta">
                                                    <li><a href="<?php the_permalink();?>"><?php the_time('d M Y');?></a></li>
                                                    <li><?php the_category();?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <?php read_more(40);?>
                                        </div>
                                    </article>
									<?php endwhile;?>
								<?php endif;?>
								<?php wp_reset_postdata();?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content py-0 py-lg-3">
                                <div id="blog-2" class="section section-block pt-0 pt-lg-4 mt-lg-3">
									<?php if(have_posts()):?>
										<?php while(have_posts()):the_post();?>
                                    <article class="post entry">
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink();?>">
                                              <?php the_post_thumbnail();?>
                                            </a>
                                            <div class="post-heading">
                                                <h4 class="post-title">
                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                </h4>
                                                <ul class="post-meta">
                                                    <li><a href="#"><?php the_time('d M Y');?></a></li>
                                                    <li><?php the_category();?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <?php read_more(40);?>
                                        </div>
                                    </article>
									<?php endwhile;?>
								<?php endif;?>      
                                    <!-- Pagination -->
                                    <nav aria-label="Pagination">
                                  <div class="pagination justify-content-center mt-5 mt-md-0 mb-5 mb-lg-4">
									
									<?php
										the_posts_pagination(array(
											'prev_text'=>'Previous',
											'next_text'=>'Next',
											'screen_reader_text'=>' ',
										));
									?>
									</div>      
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
            <!-- /bb-bookblock -->
        </div>
    </div>
    <!-- Big Book end -->
<?php echo get_footer();?>