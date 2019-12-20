<?php


function montheme_setup(){
  add_theme_support( "post-thumbnails" );
  add_post_type_support('page','excerpt');
}
add_action("after_setup_theme","montheme_setup");

get_permalink();
