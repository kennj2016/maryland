<?php
	add_filter('set_thumbnail_gallery','set_thumbnail_gallery',10,1);
	function set_thumbnail_gallery($thumbnail){
		return 'medium';
	}
?>