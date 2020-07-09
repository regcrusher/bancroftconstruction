<?php
class re_recent_posts_widget extends WP_Widget 
{
	/** constructor */
    function re_recent_posts_widget() 
	{
		global $themename;
		$widget_options = array(
			'classname' => 're_recent_posts_widget',
			'description' => 'Displays recent posts list'
		);
        parent::__construct('renovate_recent_posts', __('Renovate Recent Posts', 'renovate'), $widget_options);
    }
	
	/** @see WP_Widget::widget */
    function widget($args, $instance) 
	{
		global $themename;
        extract($args);

		//these are our widget options
		$title = $instance['title'];
		$count = $instance['count'];
		$ids = $instance['ids'];
		$category = $instance['category'];
		$order_by = $instance['order_by'];
		$order = $instance['order'];
		$featured_image_size = $instance['featured_image_size'];
		$top_margin = $instance['top_margin'];

		if(is_array($ids) && ($ids[0]=="-" || $ids[0]==""))
		{
			unset($ids[0]);
			$ids = array_values($ids);
		}
		if(is_array($category) && ($category[0]=="-" || $category[0]==""))
		{
			unset($category[0]);
			$category = array_values($category);
		}
		$args = array( 
			'include' => $ids,
			'post_type' => 'post',
			'posts_per_page' => $count,
			//'nopaging' => true,
			'post_status' => 'publish',
			'category_name' => implode(",", (array)$category),
			'orderby' => ($order_by=="views" ? 'meta_value_num' : implode(" ", explode(",", $order_by))), 
			'order' => $order
		);
		if($order_by=="views")
			$args['meta_key'] = 'post_views_count';
		$posts_list = get_posts($args);
		
		echo $before_widget;
		?>
		<?php
		if($title) 
		{
			echo $before_title . apply_filters("widget_title", $title) . $after_title;
		}
		$output = '';
		if(count($posts_list))
			$output .= '<ul class="blog small margin-top-30">';
		$category_filter_array = $category;
		foreach($posts_list as $post) 
		{
			$output .= '<li class="post">
				<a href="' . get_permalink($post->ID) . '" title="' . esc_attr($post->post_title) . '" class="post-image">
					' . get_the_post_thumbnail($post->ID, ($featured_image_size!="default" ? $featured_image_size : "tiny-thumb") , array("alt" => get_the_title(), "title" => "")) .
				'</a>
				<div class="post-content">
					<a href="' . get_permalink($post->ID) . '" title="' . esc_attr($post->post_title) . '">' . $post->post_title . '</a>
					<ul class="post-details">
						<li class="date">' . date_i18n(get_option('date_format'), strtotime($post->post_date)) . '</li>
					</ul>
				</div>
			</li>';
		}
		if(count($posts_list))
			$output .= '</ul>';
		echo $output;
        echo $after_widget;
    }
	
	/** @see WP_Widget::update */
    function update($new_instance, $old_instance) 
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['count'] = strip_tags($new_instance['count']);
		$instance['type'] = strip_tags($new_instance['type']);
		$instance['ids'] = (is_array($new_instance['ids']) ? $new_instance['ids'] : explode(",", $new_instance['ids']));
		$instance['category'] = $new_instance['category'];
		$instance['format'] = $new_instance['format'];
		$instance['show_post_icon'] = $new_instance['show_post_icon'];
		$instance['order_by'] = strip_tags($new_instance['order_by']);
		$instance['order'] = strip_tags($new_instance['order']);
		$instance['autoplay'] = strip_tags($new_instance['autoplay']);
		$instance['pause_on_hover'] = strip_tags($new_instance['pause_on_hover']);
		$instance['scroll'] = strip_tags($new_instance['scroll']);
		$instance['featured_image_size'] = strip_tags($new_instance['featured_image_size']);
		$instance['top_margin'] = strip_tags($new_instance['top_margin']);
		
		return $instance;
    }
	
	 /** @see WP_Widget::form */
	function form($instance) 
	{	
		global $themename;
		$title = (isset($instance['title']) ? esc_attr($instance['title']) : '');
		$count = (isset($instance['count']) ? esc_attr($instance['count']) : '');
		$ids = (isset($instance['ids']) ? (is_array($instance['ids']) ? $instance['ids'] : explode(",", $instance['ids'])) : '');
		$category = (isset($instance['category']) ? $instance['category'] : '');
		$order_by = (isset($instance['order_by']) ? esc_attr($instance['order_by']) : '');
		$order = (isset($instance['order']) ? esc_attr($instance['order']) : '');
		$featured_image_size = (isset($instance['featured_image_size']) ? esc_attr($instance['featured_image_size']) : '');
		$top_margin = (isset($instance['top_margin']) ? esc_attr($instance['top_margin']) : '');
		
		//get posts list
		$count_posts = wp_count_posts();
		$posts_list = array();
		if($count_posts->publish<100)
		{
			$posts_list = get_posts(array(
				'posts_per_page' => -1,
				'nopaging' => true,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post'
			));
		}

		//get categories
		$post_categories = get_terms("category");
		
		//image sizes
		$image_sizes_array = array();
		$image_sizes_array[__("Default", 'renovate')] = "default";
		global $_wp_additional_image_sizes;
		foreach(get_intermediate_image_sizes() as $s) 
		{
			if(isset($_wp_additional_image_sizes[$s])) 
			{
				$width = intval($_wp_additional_image_sizes[$s]['width']);
				$height = intval($_wp_additional_image_sizes[$s]['height']);
			} 
			else
			{
				$width = get_option($s.'_size_w');
				$height = get_option($s.'_size_h');
			}
			$image_sizes_array[$s . " (" . $width . "x" . $height . ")"] = $s;
		}
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title', 'renovate'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('count')); ?>"><?php _e('Count', 'renovate'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('count')); ?>" name="<?php echo esc_attr($this->get_field_name('count')); ?>" type="text" value="<?php echo esc_attr($count); ?>" />
		</p>
		<?php if(count($posts_list)): ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('ids')); ?>"><?php _e('Display selected', 'renovate'); ?></label><br>
			<select id="<?php echo esc_attr($this->get_field_id('ids')); ?>" name="<?php echo esc_attr($this->get_field_name('ids')); ?>[]" multiple="multiple">
				<option value="-"<?php echo (!isset($ids) || (is_array($ids) && in_array("-", $ids)) ? ' selected="selected"' : '');?>><?php _e("All", 'renovate'); ?></option>
				<?php
				foreach($posts_list as $post)
				{
				?>
					<option <?php echo (is_array($ids) && in_array($post->ID, $ids) ? ' selected="selected"':'');?> value='<?php echo esc_attr($post->ID);?>'><?php echo $post->post_title . " (id:" . $post->ID . ")"; ?></option>
				<?php
				}
				?>
			</select>
		</p>
		<?php else: ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('ids')); ?>"><?php _e('Display selected', 'renovate'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('ids')); ?>" name="<?php echo esc_attr($this->get_field_name('ids')); ?>" type="text" value="<?php echo esc_attr(implode(",", $ids)); ?>" />
			<span class="description"><?php _e("Selected posts ids separated with commas", 'renovate');?></span>
		</p>
		<?php endif; ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('category')); ?>"><?php _e('Display from Category', 'renovate'); ?></label><br>
			<select id="<?php echo esc_attr($this->get_field_id('category')); ?>" name="<?php echo esc_attr($this->get_field_name('category')); ?>[]" multiple="multiple">
				<option value="-"<?php echo ($category=="" || (is_array($category) && in_array("-", $category)) ? ' selected="selected"' : '');?>><?php _e("All", 'renovate'); ?></option>
				<?php
				foreach($post_categories as $post_category)
				{
				?>
					<option <?php echo (is_array($category) && in_array($post_category->slug, $category) ? ' selected="selected"':'');?> value='<?php echo esc_attr($post_category->slug);?>'><?php echo $post_category->name; ?></option>
				<?php
				}
				?>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('order_by')); ?>"><?php _e('Order by', 'renovate'); ?></label><br>
			<select id="<?php echo esc_attr($this->get_field_id('order_by')); ?>" name="<?php echo esc_attr($this->get_field_name('order_by')); ?>">
				<option value="title,menu_order"<?php echo ($order_by=="title,menu_order" ? ' selected="selected"' : ''); ?>><?php _e('Title, menu order', 'renovate'); ?></option>
				<option value="menu_order"<?php echo ($order_by=="menu_order" ? ' selected="selected"' : ''); ?>><?php _e('Menu order', 'renovate'); ?></option>
				<option value="date"<?php echo ($order_by=="date" ? ' selected="selected"' : ''); ?>><?php _e('Date', 'renovate'); ?></option>
				<option value="views"<?php echo ($order_by=="views" ? ' selected="selected"' : ''); ?>><?php _e('Post views', 'renovate'); ?></option>
				<option value="comment_count"<?php echo ($order_by=="comment_count" ? ' selected="selected"' : ''); ?>><?php _e('Comment count', 'renovate'); ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('order')); ?>"><?php _e('Order', 'renovate'); ?></label><br>
			<select id="<?php echo esc_attr($this->get_field_id('order')); ?>" name="<?php echo esc_attr($this->get_field_name('order')); ?>">
				<option value="DESC"<?php echo ($order=="DESC" ? ' selected="selected"' : ''); ?>><?php _e('descending', 'renovate'); ?></option>
				<option value="ASC"<?php echo ($order=="ASC" ? ' selected="selected"' : ''); ?>><?php _e('ascending', 'renovate'); ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('featured_image_size')); ?>"><?php _e('Featured image size', 'renovate'); ?></label><br>
			<select id="<?php echo esc_attr($this->get_field_id('featured_image_size')); ?>" name="<?php echo esc_attr($this->get_field_name('featured_image_size')); ?>">
				<?php
				foreach($image_sizes_array as $key=>$s)
				{
				?>
					<option <?php echo ($featured_image_size==$s ? ' selected="selected"':'');?> value='<?php echo esc_attr($s);?>'><?php echo $key; ?></option>
				<?php
				}
				?>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('top_margin')); ?>"><?php _e('Top margin', 'renovate'); ?></label><br>
			<select id="<?php echo esc_attr($this->get_field_id('top_margin')); ?>" name="<?php echo esc_attr($this->get_field_name('top_margin')); ?>">
				<option value="none"<?php echo ($top_margin=="none" ? ' selected="selected"' : ''); ?>><?php _e('None', 'renovate'); ?></option>
				<option value="page-margin-top"<?php echo ($top_margin=="page-margin-top" ? ' selected="selected"' : ''); ?>><?php _e('Page (small)', 'renovate'); ?></option>
				<option value="page-margin-top-section"<?php echo ($top_margin=="page-margin-top-section" ? ' selected="selected"' : ''); ?>><?php _e('Section (large)', 'renovate'); ?></option>
			</select>
		</p>
		<?php
	}
}
//register widget
add_action('widgets_init', create_function('', 'return register_widget("re_recent_posts_widget");'));
?>