<?php 
	class Img_Widget extends WP_Widget {
		function __construct(){
			parent :: __construct(
				'img_widget',
				'image widget',
				array('description'=>'add image widget in sidebar')
			);

		}
		public function widget($args,$inst){
			extract($args);
			echo $before_widget;
			echo '<a href="'.$inst['href'].'"><img src="'.$inst['src'].'"></a>';
			echo $after_widget;

		} 
		public function form($instance){
			$href=!empty($instance['href']) ? $instance['href'] : '';
			$src=!empty($instance['src']) ? $instance['src'] : '';
 			echo '<label for="'.$this->get_field_id('href').'">Image link to :</label>';
			echo '<input type="text" class="widefat" id="'.$this->get_field_id('href').'" name="'.$this->get_field_name('href').'" value="'.esc_attr($href).'" >';
			echo '<div class="img-wid-blk">';
			echo '<label for="'.$this->get_field_id('src').'">url of image :</label>';
			echo '<input type="text" class="widefat" id="'.$this->get_field_id('src').'" name="'.$this->get_field_name('src').'" value="'.esc_attr($src).'" >';
			echo '<button class="brow-img">Browser</button>';
			echo '</div>';

		}
		public function update($new_instance,$old_instance){
			$instance=$old_instance;
			$instance['href']=strip_tags($new_instance['href']);
			$instance['src']=strip_tags($new_instance['src']);
			return $instance;

		}

	} 
	function img_wid_func(){
		register_widget( Img_Widget );
	}
	add_action('widgets_init',img_wid_func);
 ?>