<?php

function twpp_setup_theme() {
  register_nav_menu( 'header-navigation', 'Header Navigation' );
}

add_action( 'after_setup_theme', 'twpp_setup_theme' );
