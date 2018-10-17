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

  <title><?php bloginfo( $name ); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div class="site-title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( $name ); ?></a>

  </div>


<?php wp_nav_menu( $args ); ?>
