﻿<?php
/**
* Template Name: Next Level Impacts by Kalista and Marty
**/

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_content();
		//
		// Post Content here
		//
	} // end while
} // end if

?>