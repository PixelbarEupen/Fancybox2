<?php
	
	/*	
	Plugin Name: Simple Fancybox 2
	Author: Adrian Lambertz
	Description: Erweitert Wordpress ganz simpel um die Fancybox 2. Greift auf alle links mit .jpg oder .png Endung.
	Plugin URI: https://github.com/PixelbarEupen/Fancybox2
	Version: 0.1
	GitHub Plugin URI: https://github.com/PixelbarEupen/Fancybox2
	GitHub Access Token: 6ca583973da0e33ee1a6c90c3e4920e6143369ca
	*/
	
	
	/******************************************************************************************/
	/************************* DO NOT CHANGE ANYTHING AFTER THIS LINE *************************/
	
	if(!function_exists(pix_register_fancybox_2)){
		
		function pix_register_fancybox_2(){
			
			wp_enqueue_script('jquery');
			
			wp_register_script( 'fancybox', plugins_url( '/js/jquery.fancybox.pack.js' , __FILE__ ));
			wp_enqueue_script( 'fancybox' );
			
			wp_register_style( 'fancybox', plugins_url( '/css/jquery.fancybox.css' , __FILE__ ));
			wp_enqueue_style( 'fancybox' );
			
		}
		
		add_action( 'wp_enqueue_scripts', 'pix_register_fancybox_2', 100 );
		
	}
	
	if(!function_exists(pix_place_fancy_init)){
		
		function pix_place_fancy_init(){ ?>
			
			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('a[href*="jpg"], a[href*="png"]').attr('rel','fancybox').fancybox({
						helpers: {
						    overlay: {
						      locked: false
						    }
						  }
					});
				});
			</script>
			
		<?php }
		
		add_action('wp_footer','pix_place_fancy_init',100);
	}
	
?>