<?php 
// WP_Query with Pagination
	global $wp_query;
	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array (
	'post_type'              => 'page',
	'category_name'          => 'someName',
	'pagination'             => true,
	'paged'			 => $page,
	'ignore_sticky_posts'    => true,
);

// The Query
$wp_query = new WP_Query( $args );
while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<!-- DO LOOP STUFF HERE -->

<?php endwhile ?>
<div class="pagination">
    <nav class="entry-nav group">
		<?php if (function_exists("pagination")) {
    pagination($wp_query->max_num_pages);
} ?>

</nav><!--/.entry-nav-->
</div>