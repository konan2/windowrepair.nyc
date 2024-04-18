
<?php
$post = $wp_query->post;
if ( in_category('blog') ) {
    include(get_template_directory() . '/single-post-blog.php');
} else {
    include(get_template_directory() . '/single-post.php');
}
?>
