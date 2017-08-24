<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

function my_excerpt_length($length) {
return 5;
}
add_filter('excerpt_length', 'my_excerpt_length');

add_filter('pre_get_posts', 'limit_archive_posts');
function limit_archive_posts($query){
    if ($query->is_archive) {
        $query->set('posts_per_page', 8);
    }
    return $query;
}