<?php 
   /* enqueue css and js to admin*/

   if(is_admin()){
   	wp_enqueue_media();
   	wp_enqueue_style('my_admin_style', get_template_directory_uri().'/inc/css/my-admin.css', false, '1.0' );
   	wp_enqueue_script( 'my_admin_script', get_template_directory_uri().'/inc/js/my-admin-script.js', false, '1.0' );
   }

   /*end enqueue*/
 ?>