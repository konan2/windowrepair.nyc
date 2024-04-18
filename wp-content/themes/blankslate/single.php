
<?php
$post = $wp_query->post;
if ( in_category('blog') ) {
include(TEMPLATEPATH . '/single-category-blog.php');
} else {
include(TEMPLATEPATH . '/single-post.php');
}
?>