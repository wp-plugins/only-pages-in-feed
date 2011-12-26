<?php
/*
Plugin Name: Only Pages in Feed
Version: 1.0
Plugin URI: http://sumtips.com/2011/12/include-page-custom-post-type-wordpress-feed.html
Description: Remove all blog posts from site's RSS feeds, leaving only Pages. Useful for those that use WordPress as a CMS. Plugin has no settings. Activate, and you are good to go.
Author: Renji
Author URI: http://sumtips.com/
*/

function remove_posts_from_rss_feed( $args ) {
  if ( isset( $args['feed'] ) && !isset( $args['post_type'] ) )
    $args['post_type'] = array('page'); //Shows only "Page" post type in feed
  return $args;
}

add_filter( 'request', 'remove_posts_from_rss_feed' );

?>
