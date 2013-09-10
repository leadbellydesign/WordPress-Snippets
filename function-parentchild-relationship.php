<?php
/**
 * Check for Parent/Child Relationship
 */
function has_parent( $post, $post_id ) {
	if ($post->ID == $post_id)
		return true;
	elseif ($post->post_parent == 0)
		return false;
	else
		return has_parent( get_post($post->post_parent), $post_id );
}
?>