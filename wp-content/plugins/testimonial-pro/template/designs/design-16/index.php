<div class="testimonial-section" id="wpsm_testi_pro_row<?php echo $post_id;?>">
<div id='carousel-custom-thumbs<?php echo $post_id;?>' class="owl-dots carousel-thumbs">
   <?php
                   foreach($All_data as $single_data)
          {
                         $cs_photo = $single_data['cs_photo'];
             $cs_name = $single_data['cs_name'];
            
            ?> 
            <?php if($ts_display_image=="yes"){?> 
<div class="owl-dot">
    <img src="<?php echo $cs_photo;?>" alt="">

</div>
   <?php
               }
           }
               ?>
            </div>
<div id="testimonial-slider<?php echo $post_id;?>" class="testimonial-slider owl-carousel">
                
                <?php
                   foreach($All_data as $single_data)
          {
                         $cs_photo = $single_data['cs_photo'];
             $cs_name = $single_data['cs_name'];
             $cs_email = $single_data['cs_email'];
             $cs_webname = $single_data['cs_webname'];
             $cs_posi = $single_data['cs_posi'];
             $cs_website = $single_data['cs_website'];
             $cs_desc = $single_data['cs_desc'];
             $cs_rating = $single_data['cs_rating'];
             $cs_id = $single_data['cs_id'];
             $crop_size = wp_get_attachment_image_src($cs_id,'wpsm_testi_pro_small');
             $cs_status = $single_data['cs_status'];
            ?>
                <div class="testimonial">
                     <?php if($ts_display_content=="yes"){?>
                    <div class="description">
                        <?php echo $cs_desc;?>
                    </div>
                    <?php }?>
                    <!--RATING-->
                    <?php if($ts_display_rating=="yes"){
                          ?>
                           <div class="rating">
                          <?php
                          if($cs_rating>0)
                          {
                          for($star=1;$star<=$cs_rating;$star++)
                          {
                           ?>
                         
                            <i class="fa fa-star"></i>
                       
                           <?php 
                          } 
                           for($star=1;$star<=5-$cs_rating;$star++)
                          {
                          ?>
                          
                            <i class="fa fa-star-o"></i>
                       
                          <?php  
                          }  
                          }
                          else
                          {
                         ?>
                         
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                      
                         <?php   
                          }
                          ?>
                            </div>
                        
                        <?php }?>
                    <!--END RATING-->

                    <?php if($ts_display_name=="yes"){?>
                    <h5 class="author-name">
                        <?php echo $cs_name;?>
                       <?php if($ts_display_position=="yes"){?>  <span class="author-position">/<?php echo $cs_posi;?></span><?php }?>
                    </h5>
                     <?php }?>
                   <?php if($ts_display_email=="yes"){?> <p class="email"> <?php echo $cs_email;?></p> <?php }?>
                    <?php if($ts_display_website=="yes"){?><p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p><?php }?>
                </div>
        <?php
                 }
                 ?>        

            </div>
        
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function(){
           var owl_testi = jQuery("#testimonial-slider"+<?php echo $post_id;?>);
    owl_testi.owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
         items: 1,
         autoplay:true,
         nav: true,
     navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    dotsContainer: '#carousel-custom-thumbs<?php echo $post_id;?>',
      responsive: {
          0: {
              nav: false
          },
          800: {
              nav: true
          }
      }
      
    });
   
jQuery('#carousel-custom-thumbs<?php echo $post_id;?>.owl-dot').click(function () {
    owl_testi.trigger('to.owl.carousel', [jQuery(this).index(), 300]);
});

        });
    </script>