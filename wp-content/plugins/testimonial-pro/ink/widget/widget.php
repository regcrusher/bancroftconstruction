<?php
/**
 * Adds  widget.
 */
class Wpsm_Testi_pro_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wpsm_testi_pro_widget_id', // Base ID
            'Testimonial Pro Widget', // Name
            array( 'description' => __( 'Display Your Testimonial in widget area.', 'wpsm_testi_pro' ), ) // Args
        );
	}

    /**
     * Front-end display of widget.
     */
    public function widget( $args, $instance ) {
        $Title    	=   apply_filters( 'wpsm_testi_pro_widget_title', $instance['Title'] );
		echo $args['before_widget'];
		
		 $wpsm_Testimonial_r_id	=   apply_filters( 'wpsm_testi_pro_widget_shortcode', $instance['Shortcode'] ); 

		if(is_numeric($wpsm_Testimonial_r_id)) {
			if ( ! empty( $instance['Title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['Title'] ). $args['after_title'];
			}
			echo do_shortcode( '[TESTIMONIAL_PRO id='.$wpsm_Testimonial_r_id.']' );
		} else {
			echo "<p>Sorry! No Testimonial Shortcode Found.</p>";
		}
		echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {

        if ( isset( $instance[ 'Title' ] ) ) {
            $Title = $instance[ 'Title' ];
        } else {
            $Title = "Testimonial Pro Shortcode";
        }

        if ( isset( $instance[ 'Shortcode' ] ) ) {
            $Shortcode = $instance[ 'Shortcode' ];
        } else {
            $Shortcode = "Select Any Testimonial";
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'Title' ); ?>"><?php _e( 'Widget Title' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'Title' ); ?>" name="<?php echo $this->get_field_name( 'Title' ); ?>" type="text" value="<?php echo esc_attr( $Title ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'Shortcode' ); ?>"><?php _e( 'Select Testimonial' ); ?> (Required)</label>
			<?php
			/**
			 * Get All Tabs Shortcode Custom Post Type
			 */
			$wpsm_ac_cpt = "testi_builder_pro";
			global $All_Wpsm_Acsh;
			$no_of_posts = wp_count_posts( 'testi_builder_pro')->publish;
			$All_Wpsm_Acsh = array('post_type' => $wpsm_ac_cpt, 'orderby' => 'ASC', 'post_status' => 'publish','posts_per_page' => $no_of_posts);
			$All_Wpsm_Acsh = new WP_Query( $All_Wpsm_Acsh );		
			?>
			<select id="<?php echo $this->get_field_id( 'Shortcode' ); ?>" name="<?php echo $this->get_field_name( 'Shortcode' ); ?>" style="width: 100%;">
				<option value="Select Any Testimonial" <?php if($Shortcode == "Select Any Testimonial") echo 'selected="selected"'; ?>>Select Any Testimonial</option>
				<?php
				if( $All_Wpsm_Acsh->have_posts() ) {	 ?>	
				<?php while ( $All_Wpsm_Acsh->have_posts() ) : $All_Wpsm_Acsh->the_post();	
					$PostId = get_the_ID(); 
					$PostTitle = get_the_title($PostId);
				?>
				<option value="<?php echo $PostId; ?>" <?php if($Shortcode == $PostId) echo 'selected="selected"'; ?>><?php if($PostTitle) echo $PostTitle; else _e("No Title", wpsm_testi_pro); ?></option>
				<?php endwhile; ?>
				<?php
				}  else  { 
					echo "<option>Sorry! No Testimonial Shortcode Found.</option>";
				}
			?>
			</select>
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['Title'] = ( ! empty( $new_instance['Title'] ) ) ? strip_tags( $new_instance['Title'] ) : '';
        $instance['Shortcode'] = ( ! empty( $new_instance['Shortcode'] ) ) ? strip_tags( $new_instance['Shortcode'] ) : 'Select Any Testimonial';
        
        return $instance;
    }
} // end of  Widget Class

// Register Widget
function Wpsm_Testi_pro_Widget() {
    register_widget( 'Wpsm_Testi_pro_Widget' );
}
add_action( 'widgets_init', 'Wpsm_Testi_pro_Widget' );
?>