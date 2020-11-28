<?php

$args = array(
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'meta_query' => array(
        array(
            'key' => '_ibbhaber_testimonial_key',
            'value' => 's:8:"approved";i:0;s:8:"featured";i:0',
            'compare' => 'LIKE'
        )
    )
);

$query = new WP_Query($args);

if($query->have_posts()) :
    echo '<ul>';
    while($query->have_posts()): $query->the_post();
        echo '<li>' . get_the_title() . '<p>' . get_the_content() . '</p></li>';
    endwhile;
    echo '</ul>';
endif;

wp_reset_postdata();