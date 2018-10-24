<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- style.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
<!-- header.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
<!-- reset.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
<!-- front-page.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" type="text/css" />

<!-- slick.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
<!-- slick.theme.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
<!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- slicl.min.js -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>



  <title><?php bloginfo( $name ); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div class="site-title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( $name ); ?></a>

  </div>


<?php wp_nav_menu( $args ); ?>
