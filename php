/*  
	This snippet of code goes into the header.php file;
	Create Custom Field labeled 'canonical_link';
	Update canonical link when needing to reference another URL;
*/


<?php 

	$id = $wp_query->post->ID; 
	$canonical = get_post_meta($id, 'canonical_link', true);

//Remove the http://www.foo.bar with your deafault URL

	if ($canonical == '') $canonical = 'http://www.foo.bar';			
		echo '<link rel="canonical" href="'. $canonical . '" />';
?>

