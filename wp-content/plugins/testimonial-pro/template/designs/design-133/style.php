<style type="text/css">
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
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin-left: 70px;
    position: relative;
    <?php if($ts_box_opacity<="9"){ ?>
    background: rgba(<?php echo $HoverColorRGB; ?>, 0.<?php echo $ts_box_opacity; ?>);<?php } 
    else { ?>
    <?php /*background: rgba(<?php echo $HoverColorRGB; ?>,1);
    background: rgb(<?php echo $HoverColorRGB; ?>);
    */?> 
    background: <?php echo $ts_content_bg_clr;?>;
    <?php }?>
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .setting {
margin-bottom: 30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic-block{
 left: -65px;
    position: absolute;
    top: 20%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-pic{
    float: left;
    width: 130px;
    height: 130px;
    position: relative;
    z-index: 2;
    border: none;
    border-radius: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic img {
    width: 100%; 
    border-radius: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .fa-quote-left{
    font-size: 36px;
    color:<?php echo $ts_quote_clr ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-paragraph p {
    padding: 5px 0px;
line-height:<?php echo $ts_content_line;?>px !important;
    font-size:<?php echo $ts_content_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_content_clr;?>;
    font-weight:<?php echo $ts_content_weight  ;?>;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-name {
      font-size:<?php echo $ts_name_size;?>px;
font-family:'<?php echo $font_family;?>';
color:<?php echo $ts_name_clr;?>;
font-weight:<?php echo $ts_name_weight ;?>;
    text-transform: uppercase;
  
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-position {
    font-style: normal;
    display: block;
        font-size:<?php echo $ts_position_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_position_clr;?>;
    font-weight:<?php echo $ts_position_weight ;?>;
    padding-top: 5px;
    padding-bottom: 5px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .testimonial-pic {
    background: #fff;
    width: 100px;
    height: 100px;
    position: relative;
    display: inline-block;
    border: 5px solid #FFF;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text {
    padding: 30px 30px 30px 90px;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic:after {
    content: "";
    border-radius: 100%;
    position: absolute;
    background-color:<?php echo $ts_img_border_clr; ?>;
    width: 110%;
    height: 110%;
    left: -2%;
    top: -2%;
    z-index: -1;
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-dots {
    text-align: center;
    margin-top: 20px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-dots .owl-dot {
    display: inline-block;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-dots .owl-dot.active span, 
#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-dots .owl-dot:hover span {
    background: #ec5598;
    transition: all .3s ease
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .owl-carousel .owl-dots .owl-dot span {
    width: 12px;
    height: 12px;
    margin: 5px 7px;
    background: #4b3941;
    border: 1px solid #fff;
    border-radius: 0;
    display: block;
    -webkit-backface-visibility: visible;
    -webkit-transition: opacity 200ms ease;
    -moz-transition: opacity 200ms ease;
    -ms-transition: opacity 200ms ease;
    -o-transition: opacity 200ms ease;
    transition: opacity 200ms ease;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .email{
        font-size:<?php echo $ts_email_size ;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_email_clr;?>;
    margin: 0
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website {
    font-size:<?php echo $ts_website_size;?>px;
    font-family:'<?php echo $font_family;?>';
    color:<?php echo $ts_web_name_clr;?>;
    margin: 0
}

#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a{
color:<?php echo $ts_web_name_clr;?>; 
text-decoration:none;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .website a:hover{
    color:<?php echo $ts_link_hvr_clr;?>; 
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    float: right;
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
#wpsm_testi_pro_row_<?php echo $post_id; ?>  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;}

@media only screen and (max-width: 991px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin-left: 13%;
    position: relative;
}
}

@media only screen and ( max-width:520px){
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial {
    margin-left: 0%;
    position: relative;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-pic-block {
    left: inherit;
    position: inherit;
    text-align: center;
    top: inherit;
    padding-top:30px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial-text{
    padding:40px;
}
#wpsm_testi_pro_row_<?php echo $post_id; ?> .testimonial .testimonial-pic{
    float:none;
}#wpsm_testi_pro_row_<?php echo $post_id; ?> .rating {
    float: none;
}
}
<?php echo $custom_css;

 ?>
</style>