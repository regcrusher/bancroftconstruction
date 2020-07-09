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
 if($cs_status==1)
  {
  if($cs_id==0){
 $img_url = $cs_photo;
 }
  else{
  $img_url = $crop_size[0];
  }
  ?>
 
  <div class="testimonial">
<div class="testi_con">
   <div class="name">
   <?php if($ts_display_name=="yes"){?>     
<?php echo $cs_name;?>
<?php }?>
<?php if($ts_display_position=="yes"){?>


 -
   <span><?php echo $cs_posi;?></span>
   <?php }?>
    </div>
    <?php if($ts_display_content=="yes"){?> <p class="description">
    <?php echo $cs_desc;?>
    </p>
    <?php }?>
    <?php if($ts_display_email=="yes"){?>


    <p class="email"><?php echo $cs_email;?></p>
    <?php }?>
    <?php if($ts_display_website=="yes"){?>


    <p class="website"><a target="_blank" href="<?php echo $cs_website; ?>"><?php echo $cs_webname;?></a></p><?php }?>
   <?php if($ts_display_rating=="yes"){ ?>
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
<?php } }
else
{
?>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<?php }?>
</div>
<?php }?>
     </div>
     <?php if($ts_display_image=="yes"){?>
    <div class="testi_img">
   <img src="<?php echo $cs_photo;?>" alt=""/>
  </div>
  <?php }?>
  </div>      
        
<?php
   }
   }
?> 