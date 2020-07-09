<style>
<?php $RGB = wpsm_hex2rgb_testi_pro($ts_content_bg_clr);
$HoverColorRGB = implode(", ", $RGB);?>
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
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial {
	margin-top:30px;
	
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description{
  <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
	padding: 30px 30px 30px;
	border-radius: 20px;
	margin-bottom: 25px;
	position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description:after {
	content: "";
	position: absolute;
	bottom: -15px;
	left: 48%;
	border-top: 15px solid rgb(<?php echo $HoverColorRGB; ?>);
	<?php if($ts_box_opacity<="9"){ ?>
	border-top: 15px solid rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php }
	else { ?>
	border-top:15px solid rgba(<?php echo $HoverColorRGB; ?>,1); 
	<?php }?>
	border-left: 15px solid transparent;
	border-right: 15px solid transparent;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_description > p{
	    margin: 0;
	font-size:<?php echo $ts_content_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_content_clr;?>;
	font-weight:<?php echo $ts_content_weight  ;?>;
	line-height:<?php echo $ts_content_line;?>px !important;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review{
	min-height: 100px;
	text-align: center;
	margin: 0 auto;
	width:300px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review > img{
    margin: 0;
   -webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	width:80px;
	height:80px;
	float: left;
	margin-right:30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-title{
	text-align: left;
	<?php if($ts_display_image=="yes"){?>
	    display: table-cell;
	<?php } else {?>
	margin-left:110px;
	<?php }?>
	font-size:<?php echo $ts_name_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_name_clr;?>;
	font-weight:<?php echo $ts_name_weight ;?>;
	padding-top:10px;
	padding-bottom:0px;
	margin-bottom:5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-desi{
	text-align: left;
	margin-top: 0;
	font-size:<?php echo $ts_position_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_position_clr;?>;
	font-weight:<?php echo $ts_position_weight ;?>;
	padding-top:5px;
	padding-bottom:0px;
	margin-bottom:5px; 
	margin-left:110px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-email{
	text-align: left;
		margin-top: 0;
	font-size:<?php echo $ts_email_size ;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_email_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:5px;
	margin-left:110px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>	.wpsm_testimonial .wpsm_testimonial-review a{
	text-align: left;
	margin-top: 0;
	display:block;
	font-size:<?php echo $ts_website_size;?>px;
	font-family:'<?php echo $font_family;?>';
	color:<?php echo $ts_web_name_clr;?>;
	padding-top:0px;
	padding-bottom:0px;
	margin-bottom:5px;
	margin-left:110px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial .wpsm_testimonial-review a:hover{
	color:<?php echo $ts_link_hvr_clr ;?>;
}

 #wpsm_testi_pro_row_<?php echo $post_id; ?> .rating{
	margin-bottom: 10px;
	margin-left: 110px;
	text-align:left;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial-webname a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .wpsm_testimonial-webname a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}

<?php echo $custom_css;?>
</style>