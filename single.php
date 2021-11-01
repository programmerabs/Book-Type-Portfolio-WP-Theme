
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="jjworks">
    <link rel="icon" href="img/favicon.ico">

    <title><?php bloginfo('name');?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i">
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
	<?php echo wp_head();?>
</head>

<body class="single" <?php body_class(); ?>>

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
            <li>
                <a href="<?php echo home_url();?>/blog">
                    <span class="icon ion-ios-journal"></span>
                    <span class="text">Blog</span>
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
    <!-- Site Navigation end -->

    <!-- Big Book -->
	<?php if(have_posts()):?>
					<?php while(have_posts()):the_post();?>
    <div class="bb-bigbook-wrapper">
        <div class="bb-bigbook bb-bigbook-alt" id="book-1">
            <div class="bb-bookblock">
                <div class="bb-item">
                    <div class="bb-custom-side bb-fullsize">
                        <div class="bb-custom-side-inner">

                            <!-- Post Image -->
							<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                            <div class="bb-custom-side-content post-image bg-image" data-image="<?php echo esc_url($featured_img_url);?>"></div>
                        </div>
                    </div>
                    <div class="bb-custom-side">
                        <div class="bb-custom-side-inner">
                            <div class="bb-custom-side-content">

                                <!-- Blog Post -->
                                <div id="blog-post" class="section section-block">

                                    <!-- Single Post -->
                                    <article class="post entry">
                                        <div class="post-heading">
                                            <h1 class="post-title"><?php the_title();?></h1>
                                            <ul class="post-meta">
                                                <li><a href="<?php the_permalink();?>"><?php the_time('D M Y');?></a></li>
                                                <li><a href="<?php the_permalink();?>"><?php the_category();?></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content">
                                           <?php the_content();?>
                                        </div>
                                    </article>

                                    <!-- Comments Area -->
                                    <div class="comments-area">
                                        <h4 class="comments-title"><?php comments_popup_link('0 Comments','1 Comments','% Comments','','');?></h4>
                                        <ul class="comments">
                                            <?php comments_template();?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Blog Post end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /bb-bookblock -->
        </div>
    </div>
			<?php endwhile;?>
		<?php endif;?>
    <!-- Big Book end -->

   <?php get_footer();?>