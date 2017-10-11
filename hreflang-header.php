<?php
   /*
   Plugin Name: Meta HREFLANG in Wordpress 
   Description: Insert the HREFLANG meta tag into your wordpress site header 
   Version: 1.2
   Author: Alejandro Gatica -gatikman (Reviso Copenhagen) 
   License: GPL2
   */


function hreflang(){

	//Check if is home or subsection
	//In home pages the canonical URL is empty
	if (wp_get_canonical_url() == "" || wp_get_canonical_url() == NULL){
		$site_url = get_site_url();
	}else{
		$site_url = wp_get_canonical_url();
	}

	echo "<link rel='alternate' href='".$site_url."' hreflang='".get_locale()."' />";
}

add_action("wp_head", "hreflang");


?>
