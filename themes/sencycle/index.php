<?php 
/*
Template Name: IndexPage
Template Post: page, post
*/


get_header(); ?>

<h1>Hello</h1>

<?php 

if(have_posts()){
	while(have_posts()){
		the_title();
		the_post();
		the_content();
	}
}
get_footer(); ?>


<!--
	is_front_page
	is_page
	is_home
	is_single_page
-->