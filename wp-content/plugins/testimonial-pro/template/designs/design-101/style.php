<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
<style>
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_sec-title h3{
	position:relative;
	font-family:'<?php echo $font_family;?>';
	letter-spacing:2px;
	font-size:<?php echo $ts_sec_title_size;?>px;
	color:<?php echo $ts_sec_title_clr ;?>;
	font-weight:<?php echo $ts_sec_title_weight ;?>;
    margin-bottom:30px;
    text-align: center;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a {  
    color:<?php echo $ts_filter_title_clr;?> !important;
    background-color: <?php echo $ts_filter_bg_clr;?> !important;
   
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .portfolioFilter a.current { 
    background-color: <?php echo $ts_filter_activebg_clr;?> !important;
    color:<?php echo $ts_filter_active_title_clr;?> !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial{
	    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
	text-align: center;
	padding: 30px;
	    margin: 0 0 30px;
	border-radius: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic{
	width: 70px;
	height: 70px;
		    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	overflow: hidden;
	margin: 0 auto;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_pic img{
	    margin: 0;
	width: 100%;
	height: auto;
	filter: grayscale(100%);
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-title{
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
	line-height: 18px;	
	margin-top: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-desi{
	margin-top: 2px;
	line-height: 16px;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	display:block;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:0px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-email{
	line-height: 14px;
	margin-top: 5px;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial a{
	line-height: 18px;
	margin-top: 15px;
	<?php if($ts_display_name=="no"){?>
	display:block;<?php }?>
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:10px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-rating {
	line-height: 18px;
	margin: 15px 0 10px 0;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_description{
	    margin: 0;
	line-height:<?php echo $ts_content_line;?>px !important;
	margin-top:20px;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight;?>;
}

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-top:10px;
}    
     #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star {
  font-size: <?php echo $my_star_size;?>px;   	
 color:<?php echo $ts_fillstar_clr ;?>;
-webkit-text-stroke: 1px <?php echo $ts_filstr_bord_clr;?>;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating i.fa-star-o {
	font-size: <?php echo $my_star_size;?>px;
   color:<?php echo $ts_empstar_clr;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> a.wpsm_testimonial-webname{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> a.wpsm_testimonial-webname:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
<?php echo $custom_css;

 ?>
</style>