<?php

/**
 * Trigged this file Plugin unistall
 * 
 * @package AlecaddPlugin
 */

 if ( ! defined('WP_UNISTALL_PLUGIN')){
     die;
 }

 //Clear databese stored data
 $books = get_posts( array('post_type' => 'book', 'number_post' => -1) ); //first-plugin.php'deki book'u silmek için.

 foreach ($books as $book) {
     wp_delete_post($book -> ID, true);
 }
//Access the databese via SQL
 global $wpdb;

 $wpdb -> query( "DELETE FROM wp_posts WHERE post_type = 'book' " );
 $wpdb -> query( "DELETE FROM wp_postmeta WHERE post_id NOT IN(SELECT id FROM wp_posts)" );
 $wpdb -> query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN(SELECT id FROM wp_posts)" );