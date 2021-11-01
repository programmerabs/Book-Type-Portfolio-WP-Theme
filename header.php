
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="jjworks">
    <link rel="icon" href="img/favicon.ico">

    <title><?php bloginfo('title');?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i">
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">


	<?php echo wp_head();?>
</head>

<body <?php body_class(); ?>>

    <!-- Loader -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

    <!-- Site Navigation -->
    <nav class="site-nav">
         <ul class="main-nav">
            <li>
                <a href="#about">
                    <span class="icon ion-ios-home"></span>
                    <span class="text">About</span>
                </a>
            </li>
            <li>
                <a href="#experience">
                    <span class="icon ion-ios-paper"></span>
                    <span class="text">Resume</span>
                </a>
            </li>
            <li>
                <a href="#portfolio">
                    <span class="icon ion-ios-photos"></span>
                    <span class="text">Works</span>
                </a>
            </li>
            <li>
                <a href="#blog">
                    <span class="icon ion-ios-journal"></span>
                    <span class="text">Blog</span>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <span class="icon ion-ios-map"></span>
                    <span class="text">Contact</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Site Navigation end -->